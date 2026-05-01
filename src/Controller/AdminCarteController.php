<?php

namespace App\Controller;

use App\Entity\Franchises;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/carte')]
class AdminCarteController extends AbstractController
{
    #[Route('/', name: 'app_admin_carte')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $franchises = $entityManager->getRepository(Franchises::class)->findAll();

        return $this->render('admin_carte/index.html.twig', [
            'franchises' => $franchises,
        ]);
    }
}
