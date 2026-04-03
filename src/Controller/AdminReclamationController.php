<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AdminReclamationController extends AbstractController
{
    #[Route('/admin/reclamation', name: 'app_admin_reclamation')]
    public function index(): Response
    {
        return $this->render('admin_reclamation/index.html.twig', [
            'controller_name' => 'AdminReclamationController',
        ]);
    }
}
