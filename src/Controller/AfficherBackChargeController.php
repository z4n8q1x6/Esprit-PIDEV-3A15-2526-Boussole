<?php

namespace App\Controller;

use App\Entity\Charge;
use App\Entity\Franchises;
use App\Repository\ChargeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[Route('/admin')]
final class AfficherBackChargeController extends AbstractController
{
    #[Route('/afficher_back_charge', name: 'app_afficher_back_charge')]
    public function index(EntityManagerInterface $entityManager, HttpClientInterface $httpClient): Response
    {
        // getArrayResult() évite les erreurs PHP sur les propriétés typées non initialisées (franchise_id)
        $charges = $entityManager->createQuery(
            'SELECT c, f FROM App\Entity\Charge c LEFT JOIN c.franchise_id f'
        )->getArrayResult();

        // Récupérer la liste des franchises pour le select
        $franchises = $entityManager->getRepository(Franchises::class)->findAll();

        $totalCharges = 0;
        foreach ($charges as $charge) {
            $totalCharges += $charge['montant'];
        }

        // --- Récupération des taux de change (Backend Symfony) ---
        $rates = $this->getExchangeRates($httpClient);
        $totalEur = $totalCharges * $rates['eur'];
        $totalUsd = $totalCharges * $rates['usd'];

        return $this->render('afficher_back_charge/index.html.twig', [
            'charges'       => $charges,
            'total_charges' => $totalCharges,
            'total_eur'     => $totalEur,
            'total_usd'     => $totalUsd,
            'rates'         => $rates,
            'types'         => [
                'CHARGES_EXPLOITATIONS' => 'Exploitation',
                'CHARGES_FINANCIERES'   => 'Financière',
                'CHARGES_EXCEPTIONNELLES' => 'Exceptionnelle',
            ],
            'statuts'       => [
                'En attente' => 'En attente',
                'Validé'     => 'Validé',
                'Refusé'     => 'Refusé',
            ],
            'franchises'    => $franchises,
        ]);
    }

    private function getExchangeRates(HttpClientInterface $httpClient): array
    {
        try {
            // Utilisation de l'API Fawaz Ahmed (gratuite, sans clé, sans expiration)
            $response = $httpClient->request('GET', 'https://cdn.jsdelivr.net/npm/@fawazahmed0/currency-api@latest/v1/currencies/tnd.json');
            $data = $response->toArray();
            
            return [
                'eur' => $data['tnd']['eur'] ?? 0,
                'usd' => $data['tnd']['usd'] ?? 0,
            ];
        } catch (\Exception $e) {
            return ['eur' => 0, 'usd' => 0];
        }
    }

    #[Route('/afficher_back_charge/delete/{id}', name: 'app_afficher_back_charge_delete', methods: ['DELETE'])]
    public function delete(Charge $charge, EntityManagerInterface $entityManager): JsonResponse
    {
        try {
            $entityManager->remove($charge);
            $entityManager->flush();
            return new JsonResponse(['success' => true]);
        } catch (\Exception $e) {
            return new JsonResponse(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    #[Route('/afficher_back_charge/edit/{id}', name: 'app_afficher_back_charge_edit', methods: ['POST'])]
    public function inlineEdit(
        Request $request,
        Charge $charge,
        EntityManagerInterface $entityManager,
        ChargeRepository $chargeRepository
    ): JsonResponse {
        $data  = json_decode($request->getContent(), true);
        $field = $data['field'] ?? null;
        $value = $data['value'] ?? null;

        if (!$field) {
            return new JsonResponse(['success' => false, 'message' => 'Donnée manquante'], 400);
        }

        try {
            switch ($field) {
                case 'titre':
                    if (!preg_match('/^[a-zA-ZÀ-ÿ\s]+$/u', (string) $value)) {
                        return new JsonResponse(['success' => false, 'message' => 'Le titre ne doit contenir que des lettres'], 400);
                    }
                    $charge->setTitre((string) $value);
                    break;
                case 'montant':
                    $val = (float) $value;
                    if ($val <= 0) {
                        return new JsonResponse(['success' => false, 'message' => 'Le montant doit être supérieur à zéro'], 400);
                    }
                    $charge->setMontant($val);
                    break;
                case 'date_charge':
                    try {
                        $charge->setDateCharge(new \DateTime((string) $value));
                    } catch (\Exception $e) {
                        return new JsonResponse(['success' => false, 'message' => 'Format de date invalide'], 400);
                    }
                    break;
                case 'type':
                    $charge->setType((string) $value);
                    break;
                case 'preuve_image':
                    $valStr = trim((string) $value);
                    if (empty($valStr)) {
                        return new JsonResponse(['success' => false, 'message' => 'Le justificatif est obligatoire'], 400);
                    }
                    $charge->setPreuveImage($valStr);
                    break;
                case 'status_validation':
                    $charge->setStatusValidation((string) $value);
                    break;
                case 'franchise_id':
                    $franchise = $entityManager->getRepository(Franchises::class)->find((int) $value);
                    if ($franchise) {
                        $charge->setFranchiseId($franchise);
                    } else {
                        return new JsonResponse(['success' => false, 'message' => 'Franchise introuvable'], 400);
                    }
                    break;
                default:
                    return new JsonResponse(['success' => false, 'message' => 'Champ invalide'], 400);
            }

            $entityManager->flush();

            // Recalcul du total global après modification
            $allCharges   = $chargeRepository->findAll();
            $totalCharges = array_sum(array_map(fn($c) => $c->getMontant(), $allCharges));

            return new JsonResponse(['success' => true, 'newTotal' => $totalCharges]);
        } catch (\Exception $e) {
            return new JsonResponse(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}
