<?php

namespace App\Controller;

use App\Entity\Fournisseur;
use App\Repository\FournisseurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AfficherFrontFournisseurController extends AbstractController
{
    #[Route('/afficher_front_fournisseur', name: 'app_afficher_front_fournisseur')]
    public function index(FournisseurRepository $repository, Request $request): Response
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

        // 3. Pagination manuelle simple
        $totalFournisseurs = count($queryBuilder->getQuery()->getResult());
        $pagesCount = ceil($totalFournisseurs / $limit);
        
        $fournisseurs = $queryBuilder
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();

        return $this->render('afficher_front_fournisseur/index.html.twig', [
            'fournisseurs' => $fournisseurs,
            'total' => $totalFournisseurs,
            'pagesCount' => $pagesCount,
            'currentPage' => $page,
            'currentSearch' => $search,
            'currentSort' => $sort,
            'currentDirection' => $direction
        ]);
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