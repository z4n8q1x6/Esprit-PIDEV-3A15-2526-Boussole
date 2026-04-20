<?php

namespace App\Controller;

use App\Entity\Bilan;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FrontController extends AbstractController
{
    #[Route('/front', name: 'app_front_home')]
    public function index(): Response
    {
        // Redirige directement vers le tableau de bord (Vue d'ensemble) au lieu d'une page vide
        return $this->redirectToRoute('app_transaction_index');
    }

    #[Route('/verify/bilan/{id}', name: 'app_verify_bilan')]
    public function verifyBilan(Bilan $bilan): Response
    {
        return $this->render('front/verify_bilan.html.twig', [
            'bilan' => $bilan,
        ]);
    }
}
