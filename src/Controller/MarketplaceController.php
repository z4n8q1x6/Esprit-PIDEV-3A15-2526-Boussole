<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\CommandeRepository;

final class MarketplaceController extends AbstractController
{
    #[Route('/marketplace', name: 'app_marketplace')]
    public function index(ProduitRepository $produitRepository): Response
    {
        // Fetch only products with stock available
        $produits = $produitRepository->createQueryBuilder('p')
            ->where('p.stock_dispo > 0')
            ->getQuery()
            ->getResult();

        return $this->render('marketplace/index.html.twig', [
            'produits' => $produits,
        ]);
    }
}
