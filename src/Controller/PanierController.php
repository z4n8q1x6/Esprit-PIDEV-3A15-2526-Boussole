<?php

namespace App\Controller;

use App\Entity\Produit;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    #[Route('/panier', name: 'app_panier')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $panier = $request->getSession()->get('panier', []);
        $details = [];
        $total = 0;

        foreach ($panier as $id => $quantite) {
            $produit = $em->getRepository(Produit::class)->find($id);
            if ($produit) {
                $sousTotal = $produit->getPrixAchat() * $quantite;
                $total += $sousTotal;
                $details[] = [
                    'produit' => $produit,
                    'quantite' => $quantite,
                    'sousTotal' => $sousTotal
                ];
            }
        }
        
        return $this->render('panier/index.html.twig', [
            'details' => $details,
            'total' => $total
        ]);
    }

    #[Route('/panier/ajouter/{id}', name: 'app_panier_ajouter')]
    public function ajouter(int $id, Request $request): Response
    {
        $panier = $request->getSession()->get('panier', []);
        
        if (isset($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }
        
        $request->getSession()->set('panier', $panier);
        
        $this->addFlash('success', 'Produit ajouté au panier');
        return $this->redirectToRoute('app_marketplace');
    }

    #[Route('/panier/modifier/{id}/{quantite}', name: 'app_panier_modifier')]
    public function modifier(int $id, int $quantite, Request $request): Response
    {
        $panier = $request->getSession()->get('panier', []);
        
        if ($quantite <= 0) {
            unset($panier[$id]);
        } else {
            $panier[$id] = $quantite;
        }
        
        $request->getSession()->set('panier', $panier);
        
        return $this->redirectToRoute('app_panier');
    }

    #[Route('/panier/supprimer/{id}', name: 'app_panier_supprimer')]
    public function supprimer(int $id, Request $request): Response
    {
        $panier = $request->getSession()->get('panier', []);
        
        if (isset($panier[$id])) {
            unset($panier[$id]);
        }
        
        $request->getSession()->set('panier', $panier);
        
        $this->addFlash('success', 'Produit retiré du panier');
        return $this->redirectToRoute('app_panier');
    }

    #[Route('/panier/vider', name: 'app_panier_vider')]
    public function vider(Request $request): Response
    {
        $request->getSession()->remove('panier');
        
        $this->addFlash('success', 'Panier vidé');
        return $this->redirectToRoute('app_panier');
    }


    #[Route('/panier/modifier-ajax/{id}/{quantite}', name: 'app_panier_modifier_ajax', methods: ['POST'])]
    public function modifierAjax(int $id, int $quantite, Request $request, EntityManagerInterface $em): Response
    {
        $panier = $request->getSession()->get('panier', []);
        $produit = $em->getRepository(Produit::class)->find($id);
        
        if (!$produit) {
            return $this->json(['success' => false, 'message' => 'Produit non trouvé']);
        }
        
        if ($quantite <= 0) {
            unset($panier[$id]);
        } else {
            $panier[$id] = $quantite;
        }
        
        $request->getSession()->set('panier', $panier);
        
        // Calculer nouveau sous-total et total
        $sousTotal = $produit->getPrixAchat() * $quantite;
        $total = 0;
        foreach ($panier as $pid => $qty) {
            $p = $em->getRepository(Produit::class)->find($pid);
            if ($p) {
                $total += $p->getPrixAchat() * $qty;
            }
        }
        
        return $this->json([
            'success' => true,
            'sousTotal' => number_format($sousTotal, 2, ',', ' '),
            'total' => number_format($total, 2, ',', ' ')
        ]);
    }

    #[Route('/panier/valider', name: 'app_panier_valider')]
public function valider(Request $request, EntityManagerInterface $em): Response
{
    $panier = $request->getSession()->get('panier', []);
    
    if (empty($panier)) {
        $this->addFlash('warning', 'Votre panier est vide');
        return $this->redirectToRoute('app_panier');
    }
    
    // Création de la commande
    $commande = new \App\Entity\Commande();
    $commande->setDate_creation(new \DateTime());
    $commande->setStatut('EN_ATTENTE');
    
    // Franchise ID fixe = 1
    $franchise = $em->getRepository(\App\Entity\Franchises::class)->find(1);
    $commande->setFranchise_id($franchise);
    
    $total = 0;
    
    foreach ($panier as $id => $quantite) {
        $produit = $em->getRepository(\App\Entity\Produit::class)->find($id);
        if ($produit) {
            $ligne = new \App\Entity\Ligne_commande();
            $ligne->setQuantite($quantite);
            $ligne->setPrix_unitaire($produit->getPrixAchat());
            $ligne->setProduit_id($produit);
            $ligne->setCommande_id($commande);
            
            $em->persist($ligne);
            $total += $produit->getPrixAchat() * $quantite;
        }
    }
    
    $commande->setMontant_total($total);
    $em->persist($commande);
    $em->flush();
    
    $request->getSession()->remove('panier');
    
    $this->addFlash('success', 'Commande validée avec succès');
    return $this->redirectToRoute('app_marketplace');
}
}