<?php

namespace App\Controller;

use App\Entity\Charge;
use App\Repository\ChargeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AfficherFrontChargeController extends AbstractController
{
    #[Route('/charge/delete/{id}', name: 'app_charge_delete', methods: ['POST', 'GET'])]
    public function delete(Charge $charge, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($charge);
        $entityManager->flush();

        $this->addFlash('success', 'La charge a été supprimée avec succès.');

        return $this->redirectToRoute('app_afficher_front_charge');
    }

    #[Route('/afficher_front_charge', name: 'app_afficher_front_charge')]
    public function index(ChargeRepository $repo, Request $request): Response
    {
        $search = $request->query->get('q', '');
        $sort = $request->query->get('sort', 'id');
        $dir = $request->query->get('dir', 'ASC');

        $qb = $repo->createQueryBuilder('c')
            ->leftJoin('c.franchise_id', 'f')
            ->addSelect('f');

        if (!empty($search)) {
            $qb->andWhere('c.titre LIKE :search OR c.type LIKE :search OR c.status_validation LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        $allowedSorts = ['id', 'titre', 'montant', 'date_charge', 'type'];
        if (in_array($sort, $allowedSorts)) {
            $direction = strtoupper($dir) === 'DESC' ? 'DESC' : 'ASC';
            $qb->orderBy('c.' . $sort, $direction);
        }

        $allCharges = $qb->getQuery()->getArrayResult();
        
        // Pagination : 3 cartes par page
        $limit = 3;
        $page = (int)$request->query->get('page', 1);
        $totalCharges = count($allCharges);
        $pagesCount = ceil($totalCharges / $limit);
        $offset = ($page - 1) * $limit;
        
        $charges = array_slice($allCharges, $offset, $limit);
        
        // Calcul du montant total
        $totalMontant = 0;
        foreach ($allCharges as $c) {
            $totalMontant += $c['montant'];
        }

        return $this->render('afficher_front_charge/index.html.twig', [
            'charges' => $charges,
            'total' => $totalMontant,
            'currentPage' => $page,
            'pagesCount' => $pagesCount,
            'search' => $search,
            'sort' => $sort,
            'dir' => $dir
        ]);
    }

    #[Route('/afficher_front_charge/conseils', name: 'app_front_charge_conseils')]
    public function conseils(ChargeRepository $repo, Request $request): Response
    {
        $search = $request->query->get('q', '');
        
        $qb = $repo->createQueryBuilder('c')
            ->leftJoin('c.franchise_id', 'f')
            ->addSelect('f');

        if (!empty($search)) {
            $qb->andWhere('c.titre LIKE :search OR c.type LIKE :search OR c.status_validation LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        // Utilisation de getArrayResult pour correspondre à la vue index
        $allCharges = $qb->getQuery()->getArrayResult();
        
        if (empty($allCharges)) {
            return $this->json([
                'success' => false,
                'message' => "Aucune donnée correspondant à votre recherche n'a été trouvée pour l'analyse."
            ]);
        }

        $totalDepenses = 0;
        $parCategorie = [];

        foreach ($allCharges as $charge) {
            $montant = (float) $charge['montant'];
            $totalDepenses += $montant;
            $type = (string) $charge['type'];

            if (!isset($parCategorie[$type])) {
                $parCategorie[$type] = [
                    'montant' => 0,
                    'count' => 0,
                    'label' => $this->translateType($type)
                ];
            }
            $parCategorie[$type]['montant'] += $montant;
            $parCategorie[$type]['count']++;
        }

        $moyenneParCharge = $totalDepenses / count($allCharges);

        $stats = [];
        foreach ($parCategorie as $type => $data) {
            $pourcentage = ($data['montant'] / $totalDepenses) * 100;
            $stats[] = [
                'type' => $type,
                'label' => $data['label'],
                'montant' => $data['montant'], // On garde le float pour le tri
                'montant_format' => number_format($data['montant'], 2, ',', ' '),
                'pourcentage' => round($pourcentage, 1),
                'count' => $data['count'],
                'conseil' => $this->getExtendedAdvice($type, round($pourcentage, 1))
            ];
        }

        // Tri par montant décroissant (plus robuste)
        usort($stats, fn($a, $b) => $b['montant'] <=> $a['montant']);

        return $this->json([
            'success' => true,
            'total' => number_format($totalDepenses, 2, ',', ' '),
            'moyenne' => number_format($moyenneParCharge, 2, ',', ' '),
            'count' => count($allCharges),
            'stats' => $stats
        ]);
    }

    private function translateType(string $type): string
    {
        return match ($type) {
            'CHARGES_EXPLOITATIONS' => 'Exploitation',
            'CHARGES_FINANCIERES' => 'Financière',
            'CHARGES_EXCEPTIONNELLES' => 'Exceptionnelle',
            default => $type,
        };
    }

    private function getExtendedAdvice(string $type, float $pourcentage): string
    {
        $baseAdvice = match ($type) {
            'CHARGES_EXPLOITATIONS' => "<b>Exploitation :</b> Ces charges représentent le cœur de votre activité. Si elles sont élevées (>$pourcentage%), envisagez de renégocier les contrats fournisseurs ou d'optimiser vos processus de production.",
            'CHARGES_FINANCIERES' => "<b>Financier :</b> Ce poste concerne vos frais bancaires et intérêts. Un pourcentage élevé ($pourcentage%) peut indiquer un endettement lourd. Vérifiez vos taux d'intérêt.",
            'CHARGES_EXCEPTIONNELLES' => "<b>Exceptionnel :</b> Par nature imprévisibles, ces charges ne devraient pas peser lourd ($pourcentage%). Si elles dépassent 10%, analysez leur origine réelle.",
            default => "Analyse standard pour ce type de charge.",
        };

        if ($pourcentage > 40) {
            $baseAdvice .= " <span class='text-danger'><b>Attention :</b> Cette catégorie est prédominante.</span>";
        }

        return $baseAdvice;
    }
}