<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminEntrepriseController extends AbstractController
{
    #[Route('/admin/entreprise', name: 'app_admin_entreprise')]
    public function index(): Response
    {
        return $this->render('admin_entreprise/index.html.twig', [
            'controller_name' => 'AdminEntrepriseController',
        ]);
    }
}
