<?php

namespace App\Controller;

use App\Entity\Transaction;
use App\Form\TransactionType;
use App\Repository\TransactionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/transaction')]
final class TransactionController extends AbstractController
{
    #[Route(name: 'app_transaction_index', methods: ['GET', 'POST'])]
    public function index(Request $request, EntityManagerInterface $entityManager, TransactionRepository $transactionRepo): Response
    {
        $transaction = new Transaction();
        $transaction->setDate(new \DateTime());
        
        $form = $this->createForm(TransactionType::class, $transaction);
        $form->handleRequest($request);

        // --- CODE TEMPORAIRE (En attendant l'authentification) ---
        $dummyFranchise = $entityManager->getRepository(\App\Entity\Franchises::class)->findOneBy([]);

        if ($form->isSubmitted() && $form->isValid()) {
            $transaction->setType('RECETTE');
            if ($dummyFranchise) {
                $transaction->setFranchise_id($dummyFranchise);
            }
            $entityManager->persist($transaction);
            $entityManager->flush();

            $this->addFlash('success', 'Recette validée avec succès !');
            return $this->redirectToRoute('app_transaction_index', [], Response::HTTP_SEE_OTHER);
        }

        $solde = 0;
        $derniersMouvements = [];

        if ($dummyFranchise) {
            $toutesLesTransactions = $transactionRepo->findBy(['franchise_id' => $dummyFranchise]);
            
            foreach ($toutesLesTransactions as $t) {
                if ($t->getType() === 'RECETTE') {
                    $solde += $t->getMontant();
                } elseif ($t->getType() === 'DEPENSE') {
                    $solde -= $t->getMontant();
                }
            }

            $derniersMouvements = $transactionRepo->findBy(
                ['franchise_id' => $dummyFranchise],
                ['date' => 'DESC'],
                5
            );
        }

        return $this->render('franchise/dashboard.html.twig', [
            'transactions' => $derniersMouvements,
            'form' => $form->createView(),
            'solde' => $solde,
        ]);
    }

    #[Route('/new', name: 'app_transaction_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $transaction = new Transaction();
        $form = $this->createForm(TransactionType::class, $transaction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($transaction);
            $entityManager->flush();

            return $this->redirectToRoute('app_transaction_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('transaction/new.html.twig', [
            'transaction' => $transaction,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_transaction_show', methods: ['GET'])]
    public function show(Transaction $transaction): Response
    {
        return $this->render('transaction/show.html.twig', [
            'transaction' => $transaction,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_transaction_edit', methods: ['POST'])]
    public function edit(
        Request $request, 
        Transaction $transaction, 
        EntityManagerInterface $entityManager,
        ValidatorInterface $validator
    ): JsonResponse {
        try {
            $data = json_decode($request->getContent(), true);
            if (!is_array($data) || empty($data)) {
                return new JsonResponse(['success' => false, 'message' => 'Données invalides.'], 400);
            }

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

            $entityManager->flush();

            // Recalculer le solde
            $dummyFranchise = $entityManager->getRepository(\App\Entity\Franchises::class)->findOneBy([]);
            $solde = 0;
            if ($dummyFranchise) {
                $allTx = $entityManager->getRepository(Transaction::class)->findBy(['franchise_id' => $dummyFranchise]);
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

    #[Route('/{id}', name: 'app_transaction_delete', methods: ['POST'])]
    public function delete(Transaction $transaction, EntityManagerInterface $entityManager): JsonResponse
    {
        $entityManager->remove($transaction);
        $entityManager->flush();

        // Recalculer le solde
        $dummyFranchise = $entityManager->getRepository(\App\Entity\Franchises::class)->findOneBy([]);
        $solde = 0;
        if ($dummyFranchise) {
            $allTx = $entityManager->getRepository(Transaction::class)->findBy(['franchise_id' => $dummyFranchise]);
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
