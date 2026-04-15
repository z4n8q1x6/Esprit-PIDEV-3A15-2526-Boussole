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
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Part\DataPart;
use Symfony\Component\Mime\Part\File;
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

    #[Route('/afficher_back_charge/mail', name: 'app_afficher_back_charge_mail')]
    public function sendEmailReport(EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $charges = $entityManager->createQuery(
            'SELECT c, f FROM App\Entity\Charge c LEFT JOIN c.franchise_id f'
        )->getArrayResult();

        $totalCharges = 0;
        foreach ($charges as $charge) {
            $totalCharges += $charge['montant'];
        }

        $htmlContent = $this->generateChargesEmailHtml($charges, $totalCharges);

        $recipient = $_ENV['MAILER_TO'] ?? 'waellpbt@gmail.com';

        $email = (new Email())
            ->from($recipient)
            ->to($recipient)
            ->subject('Rapport Complet des Charges - Boutique Boussole')
            ->html($htmlContent);

        $logoPath = $this->getParameter('kernel.project_dir') . '/public/assets/images/logoboussole.png';
        if (file_exists($logoPath)) {
            $email->addPart((new DataPart(new File($logoPath), 'logo_boussole', 'image/png'))->asInline());
        }

        try {
            $mailer->send($email);
            $this->addFlash('success', 'Le rapport des charges a été envoyé avec succès à ' . $recipient);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors de l\'envoi du mail : ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_afficher_back_charge');
    }

    private function generateChargesEmailHtml(array $charges, float $totalCharges): string
    {
        $rows = "";
        foreach ($charges as $charge) {
            $date = $charge['date_charge'] instanceof \DateTimeInterface ? $charge['date_charge']->format('d/m/Y') : (is_string($charge['date_charge']) ? date('d/m/Y', strtotime($charge['date_charge'])) : 'N/A');
            $statusStr = $charge['status_validation'];
            $badgeColor = $statusStr === 'Validé' ? '#1cc88a' : ($statusStr === 'En attente' ? '#f6c23e' : '#e74a3b');
            
            $rows .= "<tr>
                <td style='padding: 12px; border-bottom: 1px solid #eee;'>{$charge['titre']}</td>
                <td style='padding: 12px; border-bottom: 1px solid #eee; font-weight: bold; color: #1d3b53;'>".number_format($charge['montant'], 3, '.', ' ')." DT</td>
                <td style='padding: 12px; border-bottom: 1px solid #eee;'>{$date}</td>
                <td style='padding: 12px; border-bottom: 1px solid #eee;'>{$charge['type']}</td>
                <td style='padding: 12px; border-bottom: 1px solid #eee;'><span style='padding: 4px 10px; border-radius: 50px; font-size: 10px; font-weight: bold; text-transform: uppercase; color: #fff; background-color: {$badgeColor};'>{$statusStr}</span></td>
            </tr>";
        }

        $year = date('Y');
        $totalFormatted = number_format($totalCharges, 3, '.', ' ');

        return "
        <!DOCTYPE html>
        <html>
        <body style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; line-height: 1.6; color: #333; margin: 0; padding: 0; background-color: #f0f2f5;\">
            <div style=\"max-width: 800px; margin: 30px auto; background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.05);\">
                <div style=\"background: #1d3b53; padding: 40px 20px; text-align: center; color: #fff;\">
                    <img src=\"cid:logo_boussole\" alt=\"Boussole Logo\" style=\"height: 70px; margin-bottom: 20px;\">
                    <h1 style=\"margin: 0; font-size: 26px; text-transform: uppercase; letter-spacing: 2px;\">Rapport des Charges</h1>
                    <p style=\"margin: 10px 0 0; opacity: 0.8; font-size: 14px;\">Analyse Financière - Plateforme Boussole</p>
                </div>
                <div style=\"padding: 40px;\">
                    <p style=\"font-size: 16px;\">Bonjour,</p>
                    <p style=\"font-size: 16px;\">Veuillez trouver ci-dessous le récapitulatif détaillé des charges enregistrées dans le système de gestion.</p>
                    
                    <table style=\"width: 100%; border-collapse: collapse; margin-top: 30px;\">
                        <thead>
                            <tr style=\"background-color: #f8f9fc; color: #1d3b53;\">
                                <th style=\"padding: 15px 12px; text-align: left; border-bottom: 2px solid #1d3b53; font-size: 13px; text-transform: uppercase;\">Titre</th>
                                <th style=\"padding: 15px 12px; text-align: left; border-bottom: 2px solid #1d3b53; font-size: 13px; text-transform: uppercase;\">Montant</th>
                                <th style=\"padding: 15px 12px; text-align: left; border-bottom: 2px solid #1d3b53; font-size: 13px; text-transform: uppercase;\">Date</th>
                                <th style=\"padding: 15px 12px; text-align: left; border-bottom: 2px solid #1d3b53; font-size: 13px; text-transform: uppercase;\">Type</th>
                                <th style=\"padding: 15px 12px; text-align: left; border-bottom: 2px solid #1d3b53; font-size: 13px; text-transform: uppercase;\">Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            {$rows}
                        </tbody>
                    </table>
                    
                    <div style=\"margin-top: 35px; padding: 25px; background: #f8f9fc; border-radius: 8px; border-left: 5px solid #1d3b53; text-align: right;\">
                        <span style=\"display: block; font-size: 14px; color: #6c757d; margin-bottom: 5px;\">TOTAL GLOBAL DES CHARGES</span>
                        <strong style=\"font-size: 28px; color: #1d3b53;\">{$totalFormatted} <small style=\"font-size: 16px;\">DT</small></strong>
                    </div>
                </div>
                <div style=\"padding: 30px; text-align: center; font-size: 12px; color: #adb5bd; background: #fafafa; border-top: 1px solid #f0f0f0;\">
                    <p style=\"margin-bottom: 5px;\">&copy; {$year} <strong>Boussole</strong> - Écosystème de Gestion Intégré.</p>
                    <p style=\"margin-top: 0;\">Ceci est un message automatique, merci de ne pas y répondre.</p>
                </div>
            </div>
        </body>
        </html>";
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
