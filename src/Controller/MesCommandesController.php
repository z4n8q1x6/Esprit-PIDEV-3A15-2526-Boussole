<?php

namespace App\Controller;

use App\Entity\Commande;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class MesCommandesController extends AbstractController
{
    #[Route('/mes-commandes', name: 'app_mes_commandes')]
    public function index(EntityManagerInterface $em, Request $request): Response
    {
        $statut = $request->query->get('statut', 'tous');
        
        $repo = $em->getRepository(Commande::class);
        
        if ($statut !== 'tous') {
            $commandes = $repo->findBy(['statut' => $statut], ['date_creation' => 'DESC']);
        } else {
            $commandes = $repo->findBy([], ['date_creation' => 'DESC']);
        }
        
        return $this->render('mes_commandes/index.html.twig', [
            'commandes' => $commandes,
            'statutActuel' => $statut,
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