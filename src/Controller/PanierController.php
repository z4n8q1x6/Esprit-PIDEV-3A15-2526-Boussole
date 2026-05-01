<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Commande;
use App\Entity\Ligne_commande;
use App\Repository\CouponRepository;

#[Route('/panier')]
final class PanierController extends AbstractController
{
    #[Route('/', name: 'app_panier')]
    public function index(SessionInterface $session, ProduitRepository $produitRepository): Response
    {
        $panier = $session->get('panier', []);
        
        $panierWithData = [];
        $total = 0;

        foreach ($panier as $id => $quantity) {
            $produit = $produitRepository->find($id);
            if ($produit) {
                $panierWithData[] = [
                    'produit' => $produit,
                    'quantity' => $quantity
                ];
                $total += $produit->getPrixApresReduction() * $quantity;
            }
        }

        $user = $this->getUser();
        $franchisePoints = 0;
        if ($user && $user->getIdFranchise()) {
            $franchisePoints = $user->getIdFranchise()->getPointsFidelite();
        }

        return $this->render('panier/index.html.twig', [
            'items' => $panierWithData,
            'total' => $total,
            'franchise_points' => $franchisePoints
        ]);
    }

    #[Route('/add/{id}', name: 'app_panier_add')]
    public function add(int $id, SessionInterface $session): Response
    {
        $panier = $session->get('panier', []);

        if (!empty($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }

        $session->set('panier', $panier);
        
        $this->addFlash('success', 'Produit ajouté au panier avec succès !');

        return $this->redirectToRoute('app_marketplace');
    }

    #[Route('/update/{id}', name: 'app_panier_update', methods: ['POST'])]
    public function update(int $id, Request $request, SessionInterface $session): Response
    {
        $panier = $session->get('panier', []);
        $quantity = (int) $request->request->get('quantity');

        if ($quantity > 0) {
            $panier[$id] = $quantity;
            $this->addFlash('success', 'Quantité mise à jour.');
        } else {
            unset($panier[$id]);
            $this->addFlash('success', 'Produit retiré du panier.');
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute('app_panier');
    }

    #[Route('/remove/{id}', name: 'app_panier_remove')]
    public function remove(int $id, SessionInterface $session): Response
    {
        $panier = $session->get('panier', []);

        if (!empty($panier[$id])) {
            unset($panier[$id]);
            $this->addFlash('success', 'Produit retiré du panier avec succès.');
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute('app_panier');
    }

    #[Route('/checkout', name: 'app_panier_checkout', methods: ['POST'])]
    public function checkout(Request $request, SessionInterface $session, ProduitRepository $produitRepository, EntityManagerInterface $entityManager, CouponRepository $couponRepository): Response
    {
        $panier = $session->get('panier', []);
        $user = $this->getUser();

        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour passer une commande.');
            return $this->redirectToRoute('app_login');
        }

        if (empty($panier)) {
            $this->addFlash('error', 'Votre panier est vide.');
            return $this->redirectToRoute('app_panier');
        }

        $franchise = $user->getIdFranchise();
        if (!$franchise) {
            $this->addFlash('error', 'Vous n\'êtes rattaché à aucune franchise.');
            return $this->redirectToRoute('app_panier');
        }

        $commande = new Commande();
        $commande->setDate_creation(new \DateTime());
        $commande->setStatut('En attente');
        $commande->setFranchise_id($franchise);

        $total = 0;

        foreach ($panier as $id => $quantity) {
            $produit = $produitRepository->find($id);
            if ($produit && $produit->getStockDispo() >= $quantity) {
                $prix_final = $produit->getPrixApresReduction();
                
                $ligne = new Ligne_commande();
                $ligne->setProduit_id($produit);
                $ligne->setQuantite($quantity);
                $ligne->setPrix_unitaire($prix_final);
                
                $commande->addLigne_commande($ligne);
                $entityManager->persist($ligne);

                $total += $prix_final * $quantity;
                
                $produit->setStockDispo($produit->getStockDispo() - $quantity);
                $entityManager->persist($produit);
            } elseif ($produit) {
                $this->addFlash('error', 'Stock insuffisant pour le produit ' . $produit->getNom());
                return $this->redirectToRoute('app_panier');
            }
        }

        // Logic for loyalty points
        $points_to_use = (int) $request->request->get('points_to_use', 0);
        $points_to_use = max(0, $points_to_use);
        
        $max_points_usable = (int) floor($total * 0.5 * 10);
        $franchise_points = $franchise->getPointsFidelite();
        
        // Clamp the used points to valid bounds
        $points_to_use = min($points_to_use, $franchise_points, $max_points_usable);
        
        $discount = $points_to_use / 10;

        // Logic for coupon
        $couponCode = strtoupper(trim((string)$request->request->get('coupon_code', '')));
        $couponDiscount = 0.0;
        $couponApplied = null;

        if (!empty($couponCode)) {
            $coupon = $couponRepository->findOneBy(['code' => $couponCode, 'is_used' => false]);
            if ($coupon) {
                $couponDiscount = $coupon->getValeur();
                $couponApplied = $coupon;
            } else {
                $this->addFlash('error', 'Code coupon invalide ou déjà utilisé.');
                return $this->redirectToRoute('app_panier');
            }
        }

        $final_total = max(0, $total - $discount - $couponDiscount);
        
        $earned_points = (int) floor($final_total * 10);
        
        $commande->setMontant_total($final_total);
        $commande->setPointsUtilises($points_to_use);
        $commande->setPointsGagnes($earned_points);

        if ($couponApplied) {
            $commande->setCouponCode($couponApplied->getCode());
            $commande->setRemiseCoupon($couponDiscount);
            $couponApplied->setIsUsed(true);
            $entityManager->persist($couponApplied);
        }
        
        $franchise->setPointsFidelite($franchise_points - $points_to_use + $earned_points);

        $entityManager->persist($commande);
        $entityManager->persist($franchise);
        $entityManager->flush();

        $session->remove('panier');

        $flashMsg = 'Votre commande a été enregistrée avec succès ! Vous avez gagné ' . $earned_points . ' points.';
        if ($couponApplied) {
            $flashMsg .= ' Une remise coupon de ' . number_format($couponDiscount, 2, ',', ' ') . ' DT a été appliquée.';
        }
        $this->addFlash('success', $flashMsg);

        return $this->redirectToRoute('app_user_commandes');
    }
}
