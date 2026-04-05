<?php

namespace App\Controller;

use App\Entity\Commande;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MesCommandesController extends AbstractController
{
    #[Route('/mes-commandes', name: 'app_mes_commandes')]
    public function index(EntityManagerInterface $em): Response
    {
        // Pour l'instant, on prend toutes les commandes
        // Plus tard, on filtrera par utilisateur/franchise
        $commandes = $em->getRepository(Commande::class)->findAll();
        
        return $this->render('mes_commandes/index.html.twig', [
            'commandes' => $commandes,
        ]);
    }

    #[Route('/mes-commandes/{id}', name: 'app_mes_commandes_detail')]
public function detail(int $id, EntityManagerInterface $em): Response
{
    $commande = $em->getRepository(Commande::class)->find($id);
    
    if (!$commande) {
        throw $this->createNotFoundException('Commande non trouvée');
    }
    
    return $this->render('mes_commandes/detail.html.twig', [
        'commande' => $commande,
    ]);
}
}