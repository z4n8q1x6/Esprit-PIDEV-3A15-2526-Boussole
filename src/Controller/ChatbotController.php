<?php

namespace App\Controller;

use App\Service\AiChatbotService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

use App\Repository\AlerteiasRepository;
use App\Repository\TransactionRepository;
use App\Repository\FranchisesRepository;
use App\Service\AiClusteringService;
use App\Service\FinancialRatingService;

final class ChatbotController extends AbstractController
{
    #[Route('/chatbot/message', name: 'app_chatbot_message', methods: ['POST'])]
    public function message(Request $request, AiChatbotService $chatbotService, TransactionRepository $transactionRepo, FranchisesRepository $franchiseRepo, AiClusteringService $aiClustering, FinancialRatingService $ratingService): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $message = $data['message'] ?? '';

        if (empty(trim($message))) {
            return new JsonResponse(['response' => 'Veuillez saisir un message.'], 400);
        }

        $contextData = [];
        
        // Retrieve basic data to give the AI some context
        try {
            // 1. Récupérer TOUTES les franchises de la base de données
            $toutesFranchises = $franchiseRepo->findAll();
            $franchiseList = [];
            foreach ($toutesFranchises as $f) {
                $nom = $f->getNom();
                $franchiseList[$nom] = [
                    'nom' => $nom,
                    'solde_actuel' => method_exists($f, 'getSoldeActuel') ? $f->getSoldeActuel() : 0,
                    'actif' => method_exists($f, 'isActif') ? $f->isActif() : (method_exists($f, 'getActif') ? $f->getActif() : true),
                    'rating_mois_en_cours' => $ratingService->evaluateFranchise($f, (int)date('n'), (int)date('Y'))
                ];
            }

            // 2. Récupérer les performances (si la franchise a des transactions, elle sera classée)
            $aiData = $transactionRepo->getFinancialDataForClustering();
            $clustersData = $aiClustering->analyzeFranchisePerformances($aiData);
            
            foreach ($clustersData as $cluster) {
                $classe = $cluster['label'] ?? 'Inconnu';
                if (!empty($cluster['franchises'])) {
                    foreach ($cluster['franchises'] as $franchise) {
                        $nom = $franchise['nom'] ?? 'Inconnu';
                        if (isset($franchiseList[$nom])) {
                            $franchiseList[$nom]['classe_financiere'] = $classe;
                            $franchiseList[$nom]['recettes'] = $franchise['recettes'] ?? 0;
                            $franchiseList[$nom]['depenses'] = $franchise['depenses'] ?? 0;
                        }
                    }
                }
            }

            $contextData['franchises_dashboard'] = array_values($franchiseList);
        } catch (\Exception $e) {
            // Ignorer les erreurs si les méthodes n'existent pas exactement
        }

        $botResponse = $chatbotService->sendMessage($message, $contextData);

        return new JsonResponse(['response' => $botResponse]);
    }
}
