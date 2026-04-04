<?php

namespace App\Controller;

use App\Entity\Transaction;
use App\Form\RecetteType;
use App\Repository\TransactionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DashboardFranchiseController extends AbstractController
{
    #[Route('/franchise/dashboard', name: 'app_franchise_dashboard')]
    public function index(Request $request, EntityManagerInterface $em, TransactionRepository $transactionRepo): Response
    {
        $transaction = new Transaction();
        $transaction->setDate(new \DateTime());
        
        $form = $this->createForm(RecetteType::class, $transaction);
        $form->handleRequest($request);

        // --- CODE TEMPORAIRE (En attendant l'authentification de Sarra) ---
        $dummyFranchise = $em->getRepository(\App\Entity\Franchises::class)->findOneBy([]);
        
        // 1. GESTION DU FORMULAIRE (Ajout)
        if ($form->isSubmitted() && $form->isValid()) {
            $transaction->setType('RECETTE');
            if ($dummyFranchise) {
                $transaction->setFranchise_id($dummyFranchise);
            }
            $em->persist($transaction);
            $em->flush();

            $this->addFlash('success', 'Recette validée avec succès !');
            return $this->redirectToRoute('app_franchise_dashboard');
        }

        // 2. MÉTIER DE BASE : Calcul du Solde
        $solde = 0;
        $derniersMouvements = [];

        if ($dummyFranchise) {
            // On récupère TOUTES les transactions de cette franchise pour le calcul
            $toutesLesTransactions = $transactionRepo->findBy(['franchise_id' => $dummyFranchise]);
            
            foreach ($toutesLesTransactions as $t) {
                if ($t->getType() === 'RECETTE') {
                    $solde += $t->getMontant();
                } elseif ($t->getType() === 'DEPENSE') {
                    $solde -= $t->getMontant();
                }
            }

            // On récupère juste les 5 dernières pour le tableau d'affichage
            $derniersMouvements = $transactionRepo->findBy(
                ['franchise_id' => $dummyFranchise],
                ['date' => 'DESC'],
                5
            );
        }

        return $this->render('franchise/dashboard.html.twig', [
            'form' => $form->createView(),
            'transactions' => $derniersMouvements,
            'solde' => $solde, // <-- On envoie le solde calculé à la vue (Twig)
        ]);
    }
}