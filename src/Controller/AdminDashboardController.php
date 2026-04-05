<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends AbstractController
{
    #[Route('/admin', name: 'app_admin_dashboard')]
    public function index(EntityManagerInterface $em): Response
    {
        $nbUtilisateurs = $em->createQuery('SELECT COUNT(u) FROM App\Entity\Utilisateur u')->getSingleScalarResult();
        $nbFranchises = $em->createQuery('SELECT COUNT(f) FROM App\Entity\Franchises f')->getSingleScalarResult();
        $nbProduits = $em->createQuery('SELECT COUNT(p) FROM App\Entity\Produit p')->getSingleScalarResult();
        $nbCommandes = $em->createQuery('SELECT COUNT(c) FROM App\Entity\Commande c')->getSingleScalarResult();
        
        return $this->render('admin_dashboard/index.html.twig', [
            'nbUtilisateurs' => $nbUtilisateurs,
            'nbFranchises' => $nbFranchises,
            'nbProduits' => $nbProduits,
            'nbCommandes' => $nbCommandes,
        ]);
    }
}