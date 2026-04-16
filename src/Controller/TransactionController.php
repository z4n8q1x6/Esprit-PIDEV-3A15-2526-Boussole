<?php

namespace App\Controller;

use App\Entity\Transaction;
use App\Entity\Bilan;
use App\Entity\Budget_previsionnel;
use App\Form\TransactionType;
use App\Form\BilanType;
use App\Form\BudgetPrevisionnelType;
use App\Repository\TransactionRepository;
use App\Repository\BilanRepository;
use App\Repository\Budget_previsionnelRepository;
use App\Service\CurrencyConverterService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\StreamedResponse;

#[Route('/transaction')]
final class TransactionController extends AbstractController
{
    #[Route(name: 'app_transaction_index', methods: ['GET', 'POST'])]
    public function index(Request $request, EntityManagerInterface $entityManager, TransactionRepository $transactionRepo, CurrencyConverterService $currencyConverter): Response
    {
        $transaction = new Transaction();
        $transaction->setDate(new \DateTime());
        
        $form = $this->createForm(TransactionType::class, $transaction);
        $form->handleRequest($request);

        // On récupère la franchise de l'utilisateur connecté s'il y en a une
        $user = $this->getUser();
        if ($user && method_exists($user, 'getIdFranchise') && $user->getIdFranchise()) {
            $dummyFranchise = $user->getIdFranchise();
        } else {
            $dummyFranchise = $entityManager->getRepository(\App\Entity\Franchises::class)->findOneBy([]);
        }

        if ($form->isSubmitted() && $form->isValid()) {
            if ($dummyFranchise) {
                $transaction->setFranchise_id($dummyFranchise);
            }
            $entityManager->persist($transaction);
            $entityManager->flush();

            $this->addFlash('success', 'Transaction validée avec succès !');
            return $this->redirectToRoute('app_transaction_index',[], Response::HTTP_SEE_OTHER);
        }

        $solde = 0;
        $derniersMouvements =[];

        $limiteDepenses = 0;
        $objectifRevenu = 0;

        if ($dummyFranchise) {
            $toutesLesTransactions = $transactionRepo->findBy(['franchise_id' => $dummyFranchise]);
            
            foreach ($toutesLesTransactions as $t) {
                if ($t->getType() === 'RECETTE') {
                    $solde += $t->getMontant();
                } elseif ($t->getType() === 'DEPENSE') {
                    $solde -= $t->getMontant();
                }
            }

            $derniersMouvements = $transactionRepo->findBy(['franchise_id' => $dummyFranchise],
                ['date' => 'DESC'],
                5
            );

            // Charger la DERNIÈRE Limite de Dépenses enregistrée dans tout le système (car pas encore d'authentification)
            $lastLimite = $entityManager->getRepository(\App\Entity\Budget_previsionnel::class)->findOneBy([
                "type_budget" => "LIMITE_DEPENSE"
            ], ["id" => "DESC"]);
            if ($lastLimite) { $limiteDepenses = $lastLimite->getMontant_cible(); }

            // Charger le DERNIER Objectif de Revenu enregistré dans tout le système
            $lastObjectif = $entityManager->getRepository(\App\Entity\Budget_previsionnel::class)->findOneBy([
                "type_budget" => "OBJECTIF_REVENU"
            ], ["id" => "DESC"]);
            if ($lastObjectif) { $objectifRevenu = $lastObjectif->getMontant_cible(); }
        }

        // --- API 2 : Conversion du solde TND → EUR + USD en temps réel ---
        $conversion = $currencyConverter->convertirDepuisTND($solde);

        return $this->render('franchise/dashboard.html.twig',[
            'transactions' => $derniersMouvements,
            'form' => $form->createView(),
            'solde' => $solde,
            'limiteDepenses' => $limiteDepenses,
            'objectifRevenu' => $objectifRevenu,
            'conversion' => $conversion,
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

            return $this->redirectToRoute('app_transaction_index',[], Response::HTTP_SEE_OTHER);
        }

        return $this->render('franchise/new.html.twig',[
            'transaction' => $transaction,
            'form' => $form,
        ]);
    }

    // =========================================================================
    // NOUVELLE ROUTE : HISTORIQUE (Placée AVANT le /{id} pour éviter les conflits)
    // =========================================================================
    #[Route('/historique', name: 'app_transaction_historique', methods: ['GET'])]
    public function historique(
        Request $request,
        TransactionRepository $transactionRepo, 
        EntityManagerInterface $entityManager
    ): Response
    {
        // On récupère la franchise de l'utilisateur connecté s'il y en a une
        $user = $this->getUser();
        if ($user && method_exists($user, 'getIdFranchise') && $user->getIdFranchise()) {
            $dummyFranchise = $user->getIdFranchise();
        } else {
            $dummyFranchise = $entityManager->getRepository(\App\Entity\Franchises::class)->findOneBy([]);
        }

        $typeFilter = $request->query->get('type', 'TOUT');
        $searchQuery = $request->query->get('search', '');
        $periode = $request->query->get('periode', 'this_month');
        $dateStart = $request->query->get('date_start', '');
        $dateEnd = $request->query->get('date_end', '');

        $sort = $request->query->get('sort', 'date');
        $direction = $request->query->get('direction', 'DESC');

        $allowedSorts = ['date', 'type', 'description', 'montant'];
        if (!in_array($sort, $allowedSorts)) {
            $sort = 'date';
        }
        $direction = strtoupper($direction) === 'ASC' ? 'ASC' : 'DESC';

        // --- LECTURE DES DONNEES ---
        $transactions = [];
        $totalRecettes = 0;
        $totalCharges = 0;

        if ($dummyFranchise) {
            $transactions = $transactionRepo->findFilteredTransactions(
                $dummyFranchise, 
                $typeFilter, 
                $searchQuery,
                $periode,
                $dateStart,
                $dateEnd,
                $sort,
                $direction
            );

            foreach ($transactions as $t) {
                if ($t->getType() === 'RECETTE') {
                    $totalRecettes += $t->getMontant();
                } elseif ($t->getType() === 'DEPENSE') {
                    $totalCharges += $t->getMontant();
                }
            }
        }

        $soldeFiltre = $totalRecettes - $totalCharges;

        $templateVars = [
            'transactions' => $transactions,
            'nombreTransactions' => count($transactions),
            'totalRecettes' => $totalRecettes,
            'totalCharges' => $totalCharges,
            'soldeFiltre' => $soldeFiltre,
            'currentType' => $typeFilter,
            'currentSearch' => $searchQuery,
            'currentPeriode' => $periode,
            'currentStart' => $dateStart,
            'currentEnd' => $dateEnd,
            'currentSort' => $sort,
            'currentDirection' => $direction
        ];

        // --- AJAX : renvoyer uniquement le fragment HTML (partiel) ---
        if ($request->headers->get('X-Requested-With') === 'XMLHttpRequest') {
            $html = $this->renderView('franchise/_transactions_list.html.twig', $templateVars);
            return new Response($html);
        }

        return $this->render('franchise/historique.html.twig', $templateVars);
    }
    // =========================================================================

    #[Route('/historique/export', name: 'app_export_excel', methods: ['GET'])]
    public function exportExcel(Request $request, TransactionRepository $transactionRepo, EntityManagerInterface $entityManager): Response
    {
        // On récupère la franchise
        $user = $this->getUser();
        if ($user && method_exists($user, 'getIdFranchise') && $user->getIdFranchise()) {
            $dummyFranchise = $user->getIdFranchise();
        } else {
            $dummyFranchise = $entityManager->getRepository(\App\Entity\Franchises::class)->findOneBy([]);
        }

        // On récupère les mêmes filtres que l'affichage
        $typeFilter = $request->query->get('type', 'TOUT');
        $searchQuery = $request->query->get('search', '');
        $periode = $request->query->get('periode', 'this_month');
        $dateStart = $request->query->get('date_start', '');
        $dateEnd = $request->query->get('date_end', '');
        $sort = $request->query->get('sort', 'date');
        $direction = $request->query->get('direction', 'DESC');

        if (!in_array($sort, ['date', 'type', 'description', 'montant'])) {
            $sort = 'date';
        }

        if ($dummyFranchise) {
            $transactions = $transactionRepo->findFilteredTransactions(
                $dummyFranchise, $typeFilter, $searchQuery, $periode, $dateStart, $dateEnd, $sort, $direction
            );
        } else {
            $transactions = [];
        }

        // Création du fichier Excel
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Le Design Personnalisé (L'en-tête)
        $sheet->setCellValue('A1', 'Historique des Transactions - Boussole');
        $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(16);
        $sheet->mergeCells('A1:D1');

        // Les Colonnes du Tableau (Ligne 3)
        $sheet->setCellValue('A3', 'Date');
        $sheet->setCellValue('B3', 'Type');
        $sheet->setCellValue('C3', 'Description');
        $sheet->setCellValue('D3', 'Montant (TND)');

        // Fond gris et texte blanc
        $sheet->getStyle('A3:D3')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF6C757D');
        $sheet->getStyle('A3:D3')->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
        $sheet->getStyle('A3:D3')->getFont()->setBold(true);

        // Remplissage Dynamique (La Boucle)
        $row = 4;
        $totalRecettes = 0;
        $totalCharges = 0;

        foreach ($transactions as $tx) {
            $sheet->setCellValue('A' . $row, $tx->getDate()->format('Y-m-d'));
            $sheet->setCellValue('B' . $row, $tx->getType());
            $sheet->setCellValue('C' . $row, $tx->getDescription());
            $sheet->setCellValue('D' . $row, $tx->getMontant());

            if ($tx->getType() === 'DEPENSE') {
                $sheet->getStyle('D' . $row)->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_RED);
                $totalCharges += $tx->getMontant();
            } else {
                $sheet->getStyle('D' . $row)->getFont()->getColor()->setARGB('FF198754'); // Vert Bootstrap #198754
                $totalRecettes += $tx->getMontant();
            }
            $row++;
        }

        // Le Calcul Final
        $row++; // Espace pur esthétique ou directement en dessous
        $sheet->setCellValue('C' . $row, 'SOLDE TOTAL :');
        $sheet->getStyle('C' . $row)->getFont()->setBold(true);

        $solde = $totalRecettes - $totalCharges;
        $sheet->setCellValue('D' . $row, $solde . ' TND');
        $sheet->getStyle('D' . $row)->getFont()->setBold(true);
        if ($solde < 0) {
            $sheet->getStyle('D' . $row)->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_RED);
        } else {
            $sheet->getStyle('D' . $row)->getFont()->getColor()->setARGB('FF198754');
        }

        // Ajustement automatique des colonnes
        foreach (range('A', 'D') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }

        // Forçage du téléchargement
        $writer = new Xlsx($spreadsheet);
        $response = new StreamedResponse(function () use ($writer) {
            $writer->save('php://output');
        });

        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', 'attachment;filename="historique_transactions.xlsx"');

        return $response;
    }

    // =========================================================================

    #[Route('/{id}', name: 'app_transaction_show', methods: ['GET'])]
    public function show(Transaction $transaction): Response
    {
        return $this->render('franchise/show.html.twig',[
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
        if ($transaction->isEstCloture()) {
            return new JsonResponse(['success' => false, 'message' => 'Interdit : Cette transaction est archivée et ne peut plus être modifiée.'], 403);
        }

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
        if ($transaction->isEstCloture()) {
             return new JsonResponse(['success' => false, 'message' => 'Interdit : Cette transaction est archivée et ne peut plus être supprimée.'], 403);
        }

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
