<?php

namespace App\Controller;

use App\Entity\Fournisseur;
use App\Repository\FournisseurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class AfficherFrontFournisseurController extends AbstractController
{
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