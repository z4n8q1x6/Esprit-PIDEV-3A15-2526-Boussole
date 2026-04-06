<?php

namespace App\Controller;

use App\Entity\Commande;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

#[Route('/admin/commandes')]
class AdminCommandeController extends AbstractController
{
    #[Route('/', name: 'app_admin_commandes')]
    public function index(EntityManagerInterface $em, Request $request): Response
    {
        $statut = $request->query->get('statut', 'tous');
        
        $repo = $em->getRepository(Commande::class);
        
        if ($statut !== 'tous') {
            $commandes = $repo->findBy(['statut' => $statut], ['date_creation' => 'DESC']);
        } else {
            $commandes = $repo->findBy([], ['date_creation' => 'DESC']);
        }
        
        return $this->render('admin_commande/index.html.twig', [
            'commandes' => $commandes,
            'statutActuel' => $statut,
        ]);
    }

    #[Route('/{id}/valider', name: 'app_admin_commande_valider')]
    public function valider(int $id, EntityManagerInterface $em): Response
    {
        $commande = $em->getRepository(Commande::class)->find($id);
        
        if (!$commande) {
            throw $this->createNotFoundException('Commande non trouvée');
        }
        
        // Vérifier le stock
        $stockInsuffisant = false;
        foreach ($commande->getLigne_commandes() as $ligne) {
            $produit = $ligne->getProduit_id();
            if ($produit->getStockDispo() < $ligne->getQuantite()) {
                $stockInsuffisant = true;
                $this->addFlash('danger', 'Stock insuffisant pour le produit: ' . $produit->getNom());
            }
        }
        
        if ($stockInsuffisant) {
            return $this->redirectToRoute('app_admin_commandes');
        }
        
        // Diminuer le stock
        foreach ($commande->getLigne_commandes() as $ligne) {
            $produit = $ligne->getProduit_id();
            $nouveauStock = $produit->getStockDispo() - $ligne->getQuantite();
            $produit->setStockDispo($nouveauStock);
        }
        
        $commande->setStatut('VALIDEE');
        $em->flush();
        
        $this->addFlash('success', 'Commande #' . $id . ' validée avec succès');
        return $this->redirectToRoute('app_admin_commandes');
    }

    #[Route('/{id}/refuser', name: 'app_admin_commande_refuser')]
    public function refuser(int $id, EntityManagerInterface $em): Response
    {
        $commande = $em->getRepository(Commande::class)->find($id);
        
        if (!$commande) {
            throw $this->createNotFoundException('Commande non trouvée');
        }
        
        $commande->setStatut('REFUSEE');
        $em->flush();
        
        $this->addFlash('success', 'Commande #' . $id . ' refusée');
        return $this->redirectToRoute('app_admin_commandes');
    }

    #[Route('/{id}', name: 'app_admin_commande_detail')]
    public function detail(int $id, EntityManagerInterface $em): Response
    {
        $commande = $em->getRepository(Commande::class)->find($id);
        
        if (!$commande) {
            throw $this->createNotFoundException('Commande non trouvée');
        }
        
        return $this->render('admin_commande/detail.html.twig', [
            'commande' => $commande,
        ]);
    }
}