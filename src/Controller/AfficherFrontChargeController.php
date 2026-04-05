<?php

namespace App\Controller;

use App\Repository\ChargeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AfficherFrontChargeController extends AbstractController
{
    #[Route('/afficher_front_charge', name: 'app_afficher_front_charge')]
    public function index(ChargeRepository $repo, Request $request): Response
    {
        $search = $request->query->get('q', '');
        $sort = $request->query->get('sort', 'id');
        $dir = $request->query->get('dir', 'ASC');

        $qb = $repo->createQueryBuilder('c');

        if (!empty($search)) {
            $qb->andWhere('c.titre LIKE :search OR c.type LIKE :search OR c.status_validation LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        $allowedSorts = ['id', 'titre', 'montant', 'date_charge', 'type'];
        if (in_array($sort, $allowedSorts)) {
            $direction = strtoupper($dir) === 'DESC' ? 'DESC' : 'ASC';
            $qb->orderBy('c.' . $sort, $direction);
        }

        $allCharges = $qb->getQuery()->getResult();
        
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
            $totalMontant += $c->getMontant();
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
}