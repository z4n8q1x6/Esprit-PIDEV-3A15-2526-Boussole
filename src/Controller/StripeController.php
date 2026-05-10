<?php

namespace App\Controller;

use App\Entity\Simulation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class StripeController extends AbstractController
{
    #[Route('/stripe/checkout/{id}', name: 'app_stripe_checkout', methods: ['POST'])]
    public function checkout(Request $request, Simulation $simulation): Response
    {
        // Vérifie le token CSRF
        if (!$this->isCsrfTokenValid('stripe_checkout' . $simulation->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token invalide');
            return $this->redirectToRoute('app_simulation_index');
        }

        // Configure Stripe avec ta clé secrète
        Stripe::setApiKey($this->getParameter('stripe_secret_key'));

        // Crée une session de paiement Stripe
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'USD',
                    'product_data' => [
                        'name' => 'Frais de dossier - Simulation #' . $simulation->getId(),
                        'description' => 'Simulation: ' . $simulation->getNomSimulation(),
                    ],
                    'unit_amount' => 5000, // 50 TND en millimes (50 * 100)
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('app_stripe_success', ['id' => $simulation->getId()], \Symfony\Component\Routing\Generator\UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('app_stripe_cancel', [], \Symfony\Component\Routing\Generator\UrlGeneratorInterface::ABSOLUTE_URL),
        ]);

        // Redirige vers la page de paiement Stripe
        return $this->redirect($session->url, 303);
    }

    #[Route('/stripe/success/{id}', name: 'app_stripe_success', methods: ['GET'])]
    public function success(Simulation $simulation): Response
    {
        $this->addFlash('success', 'Paiement réussi ! Votre dossier pour la simulation "' . $simulation->getNomSimulation() . '" a été soumis.');
        return $this->redirectToRoute('app_simulation_index');
    }

    #[Route('/stripe/cancel', name: 'app_stripe_cancel', methods: ['GET'])]
    public function cancel(): Response
    {
        $this->addFlash('warning', 'Paiement annulé.');
        return $this->redirectToRoute('app_simulation_index');
    }
}