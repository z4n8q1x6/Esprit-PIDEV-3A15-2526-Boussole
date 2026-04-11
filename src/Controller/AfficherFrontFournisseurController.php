<?php

namespace App\Controller;

use App\Entity\Fournisseur;
use App\Repository\FournisseurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class AfficherFrontFournisseurController extends AbstractController
{
    #[Route('/fournisseur/pdf/{id}', name: 'app_fournisseur_pdf')]
    public function pdf(Fournisseur $fournisseur): Response
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->set('isRemoteEnabled', true);
        
        $dompdf = new Dompdf($pdfOptions);
        
        $dateStr = (new \DateTime())->format('d/m/Y H:i');
        $nom = $fournisseur->getNom();
        $matricule = $fournisseur->getMatriculeFiscal();
        $tel = $fournisseur->getTelephone();
        $franchise = $fournisseur->getFranchiseId() ? $fournisseur->getFranchiseId()->getNom() : 'Indépendant';
        $id = $fournisseur->getId();

        $html = <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: 'Helvetica', sans-serif; color: #333; margin: 0; padding: 0; }
        .header { background: #198754; color: white; padding: 40px 20px; text-align: center; }
        .header h1 { margin: 0; font-size: 28px; text-transform: uppercase; letter-spacing: 2px; }
        .content { padding: 40px; }
        .document-title { color: #198754; font-size: 20px; font-weight: bold; border-bottom: 2px solid #20c997; margin-bottom: 30px; padding-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 40px; }
        th { text-align: left; color: #6c757d; font-size: 13px; text-transform: uppercase; padding: 15px 10px; border-bottom: 1px solid #eee; width: 35%; }
        td { padding: 20px 10px; border-bottom: 1px solid #f8f9fa; font-size: 16px; color: #212529; }
        .info-box { background: #fdfdfd; border: 1px solid #eee; padding: 25px; border-radius: 8px; margin-top: 20px; font-size: 13px; color: #666; }
        .footer { position: fixed; bottom: 0; width: 100%; padding: 20px; text-align: center; font-size: 11px; color: #adb5bd; border-top: 1px solid #eee; }
    </style>
</head>
<body>
    <div class="header">
        <h1>BOUSSOLE</h1>
        <p>Fiche Partenaire Officielle</p>
    </div>
    <div class="content">
        <div class="document-title">Informations du Fournisseur</div>
        <table>
            <tr><th>Nom de l'entreprise</th><td><strong>{$nom}</strong></td></tr>
            <tr><th>Matricule Fiscal</th><td>{$matricule}</td></tr>
            <tr><th>Coordonnées Téléphone</th><td>{$tel}</td></tr>
            <tr><th>Franchise associée</th><td>{$franchise}</td></tr>
        </table>
        <div class="info-box">
            <strong style="color: #198754; display: block; margin-bottom: 10px;">Note de Conformité</strong>
            Ce partenaire est enregistré dans le réseau Boussole. Les informations portées sur cette fiche sont extraites de notre base de données certifiée et ont été validées lors de la dernière mise à jour du dossier.
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
            'Content-Disposition' => 'attachment; filename="fournisseur_'.$id.'.pdf"'
        ]);
    }
    #[Route('/afficher_front_fournisseur', name: 'app_afficher_front_fournisseur')]
    public function index(FournisseurRepository $repository, Request $request, HttpClientInterface $httpClient): Response
    {
        // 1. Récupération des paramètres de recherche et de tri
        $search = $request->query->get('search');
        $sort = $request->query->get('sort', 'nom'); // Tri par nom par défaut
        $direction = $request->query->get('direction', 'asc');
        $page = (int)$request->query->get('page', 1);
        $limit = 3; // 3 cartes par page comme demandé

        // 2. Logique de filtrage et tri
        $queryBuilder = $repository->createQueryBuilder('f');
        
        if ($search) {
            $queryBuilder->where('f.nom LIKE :s OR f.matricule_fiscal LIKE :s')
                         ->setParameter('s', '%'.$search.'%');
        }

        $allowedSorts = ['id', 'nom', 'matricule_fiscal', 'telephone'];
        $actualSort = in_array($sort, $allowedSorts) ? $sort : 'nom';
        $actualDirection = strtoupper($direction) === 'DESC' ? 'DESC' : 'ASC';

        $queryBuilder->orderBy('f.' . $actualSort, $actualDirection);

        // 3. Récupération des actualités Business (Flux RSS sans clé API)
        $news = [];
        try {
            $rssUrl = "https://news.google.com/rss/search?q=business+entrepreneurship&hl=fr&gl=FR&ceid=FR:fr";
            // Utilisation de simplexml pour parser le flux
            $rss = @simplexml_load_file($rssUrl);
            if ($rss && isset($rss->channel->item)) {
                $count = 0;
                foreach ($rss->channel->item as $item) {
                    if ($count >= 10) break;
                    $news[] = [
                        'title' => (string)$item->title,
                        'link' => (string)$item->link
                    ];
                    $count++;
                }
            }
        } catch (\Exception $e) {
            // Silencieux en cas d'erreur de connexion
            $news = [];
        }

        // 4. Pagination manuelle simple
        $totalFournisseurs = count($queryBuilder->getQuery()->getResult());
        $pagesCount = ceil($totalFournisseurs / $limit);
        
        $fournisseurs = $queryBuilder
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();

        // 5. Récupération de la météo (Backend PHP)
        $weather = $this->getWeatherData($httpClient);

        return $this->render('afficher_front_fournisseur/index.html.twig', [
            'fournisseurs' => $fournisseurs,
            'total' => $totalFournisseurs,
            'pagesCount' => $pagesCount,
            'currentPage' => $page,
            'currentSearch' => $search,
            'currentSort' => $sort,
            'currentDirection' => $direction,
            'news' => $news,
            'weather' => $weather
        ]);
    }

    private function getWeatherData(HttpClientInterface $httpClient): array
    {
        try {
            // Coordonnées de Tunis (API sans clé)
            $response = $httpClient->request('GET', 'https://api.open-meteo.com/v1/forecast?latitude=36.8065&longitude=10.1815&current_weather=true');
            $data = $response->toArray();
            $w = $data['current_weather'];
            
            // Mapping des codes WMO vers descriptions et icônes
            $mapping = [
                0 => ['d' => 'Dégagé', 'i' => 'fa-sun'],
                1 => ['d' => 'Peu Nuageux', 'i' => 'fa-cloud-sun'],
                2 => ['d' => 'Partiel', 'i' => 'fa-cloud-sun'],
                3 => ['d' => 'Couvert', 'i' => 'fa-cloud'],
                45 => ['d' => 'Brouillard', 'i' => 'fa-smog'],
                61 => ['d' => 'Pluie légère', 'i' => 'fa-cloud-rain'],
                80 => ['d' => 'Averses', 'i' => 'fa-cloud-showers-heavy'],
                95 => ['d' => 'Orageux', 'i' => 'fa-bolt']
            ];
            
            $state = $mapping[$w['weathercode']] ?? ['d' => 'Variable', 'i' => 'fa-cloud'];
            
            return [
                'temp' => round($w['temperature']),
                'desc' => $state['d'],
                'icon' => $state['i']
            ];
        } catch (\Exception $e) {
            return ['temp' => '--', 'desc' => 'Indisponible', 'icon' => 'fa-cloud'];
        }
    }

    #[Route('/fournisseur/delete/{id}', name: 'app_fournisseur_delete', methods: ['POST', 'GET'])]
    public function delete(Fournisseur $fournisseur, EntityManagerInterface $em): Response
    {
        $em->remove($fournisseur);
        $em->flush();
        $this->addFlash('success', 'Fournisseur supprimé avec succès.');
        return $this->redirectToRoute('app_afficher_front_fournisseur');
    }
}