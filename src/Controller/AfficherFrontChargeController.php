<?php

namespace App\Controller;

use App\Entity\Charge;
use App\Repository\ChargeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

class AfficherFrontChargeController extends AbstractController
{
    #[Route('/charge/pdf/{id}', name: 'app_charge_pdf')]
    public function pdf(Charge $charge): Response
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->set('isRemoteEnabled', true);
        
        $dompdf = new Dompdf($pdfOptions);
        
        $dateStr = (new \DateTime())->format('d/m/Y H:i');
        $chargeDate = $charge->getDateCharge()->format('d/m/Y');
        $montant = number_format($charge->getMontant(), 2, ',', ' ');
        $franchise = $charge->getFranchiseId() ? $charge->getFranchiseId()->getNom() : 'Non spécifié';
        $titre = $charge->getTitre();
        $type = $charge->getType();
        $status = $charge->getStatusValidation();
        $id = $charge->getId();

        $html = <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: 'Helvetica', sans-serif; color: #333; margin: 0; padding: 0; }
        .header { background: #1d3b53; color: white; padding: 40px 20px; text-align: center; }
        .header h1 { margin: 0; font-size: 28px; text-transform: uppercase; letter-spacing: 2px; }
        .content { padding: 40px; }
        .document-title { color: #1d3b53; font-size: 20px; font-weight: bold; border-bottom: 2px solid #0d6efd; margin-bottom: 30px; padding-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
        th { text-align: left; color: #6c757d; font-size: 13px; text-transform: uppercase; padding: 15px 10px; border-bottom: 1px solid #eee; width: 35%; }
        td { padding: 18px 10px; border-bottom: 1px solid #f8f9fa; font-size: 16px; color: #212529; }
        .amount-box { background: #f8f9fa; border-left: 5px solid #0d6efd; padding: 30px; text-align: right; margin-top: 20px; }
        .footer { position: fixed; bottom: 0; width: 100%; padding: 20px; text-align: center; font-size: 11px; color: #adb5bd; border-top: 1px solid #eee; }
        .badge { background: #e9ecef; padding: 5px 10px; border-radius: 4px; font-weight: bold; font-size: 12px; }
    </style>
</head>
<body>
    <div class="header">
        <h1>BOUSSOLE</h1>
        <p>Rapport de Charge Certifié</p>
    </div>
    <div class="content">
        <div class="document-title">Récapitulatif de la Dépense</div>
        <table>
            <tr><th>Titre de la charge</th><td><strong>{$titre}</strong></td></tr>
            <tr><th>Catégorie / Type</th><td>{$type}</td></tr>
            <tr><th>Date d'émission</th><td>{$chargeDate}</td></tr>
            <tr><th>Statut</th><td><span class="badge">{$status}</span></td></tr>
            <tr><th>Franchise associée</th><td>{$franchise}</td></tr>
        </table>
        <div class="amount-box">
            <div style="font-size:14px; color:#6c757d; margin-bottom:5px;">Montant Total de la Charge</div>
            <div style="font-size:32px; font-weight:bold; color:#1d3b53;">{$montant} TND</div>
        </div>
    </div>
    <div class="footer">Document généré le {$dateStr} par la plateforme Boussole.</div>
</body>
</html>
HTML;

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="charge_'.$id.'.pdf"'
        ]);
    }
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