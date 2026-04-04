<?php

namespace App\Controller;

use App\Entity\Transaction;
use App\Form\RecetteType;
use App\Repository\TransactionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

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
            'solde' => $solde,
        ]);
    }

    /**
     * Modification inline d'une transaction (AJAX)
     */
    #[Route('/franchise/transaction/{id}/edit', name: 'app_franchise_transaction_edit', methods: ['POST'])]
    public function editTransaction(
        int $id,
        Request $request,
        EntityManagerInterface $em,
        ValidatorInterface $validator
    ): JsonResponse {
        try {
            $transaction = $em->getRepository(Transaction::class)->find($id);
            if (!$transaction) {
                return new JsonResponse(['success' => false, 'message' => 'Transaction introuvable.'], 404);
            }

            $data = json_decode($request->getContent(), true);
            if (!is_array($data) || empty($data)) {
                return new JsonResponse(['success' => false, 'message' => 'Données invalides.'], 400);
            }

            // Mise à jour ET validation uniquement du champ modifié
            $errorMessages = [];

            if (isset($data['montant'])) {
                $transaction->setMontant((float) $data['montant']);
                $errors = $validator->validateProperty($transaction, 'montant');
                foreach ($errors as $error) {
                    $errorMessages['montant'] = $error->getMessage();
                }
            }

            if (isset($data['description'])) {
                $transaction->setDescription($data['description']);
                $errors = $validator->validateProperty($transaction, 'description');
                foreach ($errors as $error) {
                    $errorMessages['description'] = $error->getMessage();
                }
            }

            if (isset($data['date'])) {
                try {
                    $transaction->setDate(new \DateTime($data['date']));
                } catch (\Exception $e) {
                    $errorMessages['date'] = 'Format de date invalide.';
                }
                if (empty($errorMessages['date'])) {
                    $errors = $validator->validateProperty($transaction, 'date');
                    foreach ($errors as $error) {
                        $errorMessages['date'] = $error->getMessage();
                    }
                }
            }

            if (!empty($errorMessages)) {
                return new JsonResponse(['success' => false, 'errors' => $errorMessages], 400);
            }

            $em->flush();

            // Recalculer le solde après modification
            $dummyFranchise = $em->getRepository(\App\Entity\Franchises::class)->findOneBy([]);
            $solde = 0;
            if ($dummyFranchise) {
                $allTx = $em->getRepository(Transaction::class)->findBy(['franchise_id' => $dummyFranchise]);
                foreach ($allTx as $t) {
                    if ($t->getType() === 'RECETTE') {
                        $solde += $t->getMontant();
                    } elseif ($t->getType() === 'DEPENSE') {
                        $solde -= $t->getMontant();
                    }
                }
            }

            return new JsonResponse([
                'success' => true,
                'message' => 'Transaction modifiée avec succès !',
                'solde' => $solde,
                'transaction' => [
                    'id' => $transaction->getId(),
                    'date' => $transaction->getDate()->format('Y-m-d'),
                    'montant' => $transaction->getMontant(),
                    'description' => $transaction->getDescription(),
                    'type' => $transaction->getType(),
                ]
            ]);
        } catch (\Exception $e) {
            return new JsonResponse(['success' => false, 'message' => 'Erreur serveur: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Suppression d'une transaction (AJAX)
     */
    #[Route('/franchise/transaction/{id}/delete', name: 'app_franchise_transaction_delete', methods: ['POST'])]
    public function deleteTransaction(
        int $id,
        EntityManagerInterface $em
    ): JsonResponse {
        $transaction = $em->getRepository(Transaction::class)->find($id);
        if (!$transaction) {
            return new JsonResponse(['success' => false, 'message' => 'Transaction introuvable.'], 404);
        }

        $em->remove($transaction);
        $em->flush();

        // Recalculer le solde après suppression
        $dummyFranchise = $em->getRepository(\App\Entity\Franchises::class)->findOneBy([]);
        $solde = 0;
        if ($dummyFranchise) {
            $allTx = $em->getRepository(Transaction::class)->findBy(['franchise_id' => $dummyFranchise]);
            foreach ($allTx as $t) {
                if ($t->getType() === 'RECETTE') {
                    $solde += $t->getMontant();
                } elseif ($t->getType() === 'DEPENSE') {
                    $solde -= $t->getMontant();
                }
            }
        }

        return new JsonResponse([
            'success' => true,
            'message' => 'Transaction supprimée avec succès !',
            'solde' => $solde,
        ]);
    }
}