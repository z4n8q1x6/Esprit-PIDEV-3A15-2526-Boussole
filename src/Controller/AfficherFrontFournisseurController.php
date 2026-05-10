<?php

namespace App\Controller;

use App\Entity\Fournisseur;
use App\Entity\Franchises;
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

        // Logo Base64
        $logoPath = $this->getParameter('kernel.project_dir') . '/public/assets/images/logoboussole.png';
        $logoBase64 = '';
        if (file_exists($logoPath)) {
            $logoBase64 = 'data:image/png;base64,' . base64_encode(file_get_contents($logoPath));
        }

        $html = <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: 'Helvetica', sans-serif; color: #333; margin: 0; padding: 0; }
        .header { background: #1d3b53; color: white; padding: 30px 20px; text-align: center; }
        .header img { height: 60px; margin-bottom: 10px; }
        .header h1 { margin: 0; font-size: 24px; text-transform: uppercase; letter-spacing: 2px; }
        .content { padding: 40px; }
        .document-title { color: #1d3b53; font-size: 20px; font-weight: bold; border-bottom: 2px solid #0d6efd; margin-bottom: 30px; padding-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 40px; }
        th { text-align: left; color: #6c757d; font-size: 13px; text-transform: uppercase; padding: 15px 10px; border-bottom: 1px solid #eee; width: 35%; }
        td { padding: 20px 10px; border-bottom: 1px solid #f8f9fa; font-size: 16px; color: #212529; }
        .info-box { background: #fdfdfd; border: 1px solid #eee; padding: 25px; border-radius: 8px; margin-top: 20px; font-size: 13px; color: #666; }
        .footer { position: fixed; bottom: 0; width: 100%; padding: 20px; text-align: center; font-size: 11px; color: #adb5bd; border-top: 1px solid #eee; }
    </style>
</head>
<body>
    <div class="header">
        <img src="{$logoBase64}" alt="Logo">
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
            <strong style="color: #1d3b53; display: block; margin-bottom: 10px;">Note de Conformité</strong>
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

        // 4. Pagination
        $allResults = $queryBuilder->getQuery()->getResult();
        $totalFournisseurs = count($allResults);
        $pagesCount = ceil($totalFournisseurs / $limit);
        
        $fournisseurs = array_slice($allResults, ($page - 1) * $limit, $limit);

        // 6. Détection Métier : Mobile Tunisie (Logique centralisée ici)
        $tunisianIds = [];
        foreach ($fournisseurs as $f) {
            $tel = $f->getTelephone();
            // Longueur 8 et commence par 2, 5 ou 9
            if ($tel && strlen($tel) === 8 && in_array($tel[0], ['2', '5', '9'])) {
                $tunisianIds[] = $f->getId();
            }
        }

        // 7. Récupération de la météo (Backend PHP)
        $weather = $this->getWeatherData($httpClient);

        // 8. Analyse IA avec DuckDuckGo (NO KEY)
        $ai_analysis = $this->getAIAnalysis($fournisseurs, $httpClient, $repository);

        // 9. GESTION DE LA CORBEILLE (Logiciel Métier Avancé)
        $session = $request->getSession();
        $trash = $session->get('supplier_trash', []);
        $now = time();
        $hasChanged = false;

        // Auto-purge PHP : On nettoie la session pour les items de plus de 24 heures (86400s)
        foreach ($trash as $id => $item) {
            if (($now - $item['deleted_at']) > 86400) {
                unset($trash[$id]);
                $hasChanged = true;
            }
        }
        if ($hasChanged) {
            $session->set('supplier_trash', $trash);
        }

        return $this->render('afficher_front_fournisseur/index.html.twig', [
            'fournisseurs' => $fournisseurs,
            'tunisian_ids' => $tunisianIds,
            'total' => $totalFournisseurs,
            'pagesCount' => $pagesCount,
            'currentPage' => $page,
            'currentSearch' => $search,
            'currentSort' => $sort,
            'currentDirection' => $direction,
            'news' => $news,
            'weather' => $weather,
            'ai_analysis' => $ai_analysis,
            'trash' => $trash // On envoie la corbeille à la vue
        ]);
    }


    private function getAIAnalysis(array $pageFournisseurs, HttpClientInterface $httpClient, FournisseurRepository $repository): array
    {
        // 1. Analyse locale : Franchise la plus représentée (Toujours 100% exact)
        $counts = [];
        $allFournisseurs = $repository->findAll();
        foreach ($allFournisseurs as $f) {
            $name = $f->getFranchiseId() ? $f->getFranchiseId()->getNom() : 'Indépendant';
            $counts[$name] = ($counts[$name] ?? 0) + 1;
        }
        arsort($counts);
        $topFranchise = key($counts);
        $topCount = current($counts);

        // 2. Préparation des franchises de la page pour l'IA
        $uniqueNames = [];
        foreach ($pageFournisseurs as $f) {
            if ($f->getFranchiseId()) {
                $uniqueNames[] = $f->getFranchiseId()->getNom();
            }
        }
        $uniqueNames = array_unique($uniqueNames);

        // 3. Appel à l'Intelligence Artificielle (GROQ - Llama3)
        $apiKey = $_ENV['GROQ_API_KEY'] ?? $_SERVER['GROQ_API_KEY'] ?? getenv('GROQ_API_KEY');
        if (!$apiKey) {
            return [
                'top_franchise' => $topFranchise,
                'top_count' => $topCount,
                'research' => [],
                'error' => 'Veuillez configurer GROQ_API_KEY dans le fichier .env'
            ];
        }

        try {
            $namesList = implode(', ', $uniqueNames);
            
            $prompt = "Tu es un expert analyste business pour la plateforme 'Boussole'. 
            Analyse cette liste de franchises : [{$namesList}].
            Pour chaque franchise, fournis :
            1. Une description experte rédigée de 2-3 phrases.
            2. Le Chiffre d'Affaires (CA) estimé.
            3. La tendance boursière (soit 'gain', soit 'loss', soit 'neutral').
            4. Le statut boursier textuel (ex: '+2.45%', '-1.2%', ou 'Non coté').
            
            Réponds UNIQUEMENT sous forme de JSON pur avec cette structure :
            {
                \"research\": {
                    \"NomDeLaFranchise\": {
                        \"summary\": \"...\",
                        \"revenue\": \"...\",
                        \"stock_trend\": \"gain|loss|neutral\",
                        \"stock_status\": \"...\",
                        \"link\": \"https://www.google.com/search?q=NomDeLaFranchise\"
                    }
                }
            }";

            $response = $httpClient->request('POST', 'https://api.groq.com/openai/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'llama-3.1-8b-instant',
                    'messages' => [
                        ['role' => 'system', 'content' => 'Tu es un assistant qui répond uniquement en JSON.'],
                        ['role' => 'user', 'content' => $prompt]
                    ],
                    'response_format' => ['type' => 'json_object'],
                    'temperature' => 0.2
                ]
            ]);

            $result = $response->toArray();
            $content = $result['choices'][0]['message']['content'] ?? '{}';
            $data = json_decode($content, true);

            return [
                'top_franchise' => $topFranchise,
                'top_count' => $topCount,
                'research' => $data['research'] ?? [],
                'error' => null
            ];
        } catch (\Exception $e) {
            return [
                'top_franchise' => $topFranchise,
                'top_count' => $topCount,
                'research' => [],
                'error' => "Erreur Groq : " . $e->getMessage()
            ];
        }
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
    public function delete(Fournisseur $fournisseur, EntityManagerInterface $em, Request $request): Response
    {
        $session = $request->getSession();
        $trash = $session->get('supplier_trash', []);

        // SAUVEGARDE DANS LA CORBEILLE (Backup Session)
        $trash[$fournisseur->getId()] = [
            'id' => $fournisseur->getId(),
            'nom' => $fournisseur->getNom(),
            'matricule' => $fournisseur->getMatriculeFiscal(),
            'telephone' => $fournisseur->getTelephone(),
            'franchise_id' => $fournisseur->getFranchiseId() ? $fournisseur->getFranchiseId()->getId() : null,
            'franchise_nom' => $fournisseur->getFranchiseId() ? $fournisseur->getFranchiseId()->getNom() : 'Indépendant',
            'deleted_at' => time()
        ];

        $session->set('supplier_trash', $trash);

        
        $em->remove($fournisseur);
        $em->flush();

        $this->addFlash('success', 'Fournisseur supprimé et déplacé dans la corbeille (24h).');
        return $this->redirectToRoute('app_afficher_front_fournisseur');
    }

    #[Route('/fournisseur/restore/{id}', name: 'app_fournisseur_restore')]
    public function restore(int $id, Request $request, EntityManagerInterface $em): Response
    {
        $session = $request->getSession();
        $trash = $session->get('supplier_trash', []);

        if (isset($trash[$id])) {
            $data = $trash[$id];
            
            // Recréation de l'entité avec les données sauvegardées
            $fournisseur = new Fournisseur();
            $fournisseur->setId($data['id']); // Utilisation du setId (manual ID)
            $fournisseur->setNom($data['nom']);
            $fournisseur->setMatriculeFiscal($data['matricule']);
            $fournisseur->setTelephone($data['telephone']);

            if ($data['franchise_id']) {
                $franchise = $em->getRepository(Franchises::class)->find($data['franchise_id']);
                if ($franchise) {
                    $fournisseur->setFranchiseId($franchise);
                }
            }

            $em->persist($fournisseur);
            $em->flush();

            // Retrait de la corbeille
            unset($trash[$id]);
            $session->set('supplier_trash', $trash);

            $this->addFlash('success', 'Fournisseur restauré avec succès !');
        }

        return $this->redirectToRoute('app_afficher_front_fournisseur');
    }

    #[Route('/fournisseur/empty_trash', name: 'app_fournisseur_empty_trash')]
    public function emptyTrash(Request $request): Response
    {
        $session = $request->getSession();
        $session->set('supplier_trash', []);
        
        $this->addFlash('info', 'La corbeille a été vidée.');
        return $this->redirectToRoute('app_afficher_front_fournisseur');
    }
}