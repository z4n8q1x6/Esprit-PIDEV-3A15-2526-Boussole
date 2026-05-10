<?php

namespace App\Controller;

use App\Entity\Simulation;
use App\Form\SimulationType;
use App\Repository\SimulationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpClient\HttpClient;

#[Route('/simulation')]
final class SimulationController extends AbstractController
{
    #[Route(name: 'app_simulation_index', methods: ['GET'])]
    public function index(SimulationRepository $simulationRepository): Response
    {
        return $this->render('simulation/index.html.twig', [
            'simulations' => $simulationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_simulation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $simulation = new Simulation();
        $form = $this->createForm(SimulationType::class, $simulation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($simulation);
            $entityManager->flush();

            return $this->redirectToRoute('app_simulation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('simulation/new.html.twig', [
            'simulation' => $simulation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/calcul/{id}', name: 'app_simulation_show', methods: ['GET'])]
    public function show(Simulation $simulation): Response
    {
        $tableau = [];
        $montant = $simulation->getCapital();
        $tauxAnnuel = $simulation->getTauxAnnuel();
        $dureeMois = $simulation->getDureeMois();
        $revenuMensuel = $simulation->getRevenuMensuel();

        $tauxMensuel = ($tauxAnnuel / 100) / 12;

        if ($tauxMensuel > 0) {
            $mensualite = ($montant * $tauxMensuel) / (1 - pow(1 + $tauxMensuel, -$dureeMois));
        } else {
            $mensualite = $montant / $dureeMois;
        }

        $soldeRestant = $montant;
        for ($i = 1; $i <= $dureeMois; $i++) {
            $interet = $soldeRestant * $tauxMensuel;
            $principal = $mensualite - $interet;
            $soldeRestant -= $principal;
            $tableau[] = [
                'periode'       => $i,
                'mensualite'    => $mensualite,
                'interet'       => $interet,
                'principal'     => $principal,
                'solde_restant' => abs($soldeRestant) < 0.01 ? 0 : $soldeRestant,
            ];
        }

        // --- ANALYSE DE RISQUE ---
        $ratio = ($revenuMensuel > 0) ? ($mensualite / $revenuMensuel) * 100 : 0;

        if ($ratio <= 20) {
            $niveauRisque = 'très faible';
        } elseif ($ratio <= 30) {
            $niveauRisque = 'faible';
        } elseif ($ratio <= 40) {
            $niveauRisque = 'modéré';
        } else {
            $niveauRisque = 'élevé';
        }

        // --- APPEL API CLAUDE ---
        $analyseIA = '';
        if ($revenuMensuel > 0) {
            try {
                $prompt = "Tu es un conseiller financier bienveillant et professionnel.
    Analyse ce prêt et donne une réponse en français en 3-4 phrases maximum :

    - Capital emprunté : {$montant} USD
    - Durée : {$dureeMois} mois
    - Taux annuel : {$tauxAnnuel}%
    - Mensualité calculée : " . round($mensualite, 2) . " USD
    - Revenu mensuel : {$revenuMensuel} USD
    - Ratio mensualité/revenu : " . round($ratio, 1) . "%
    - Niveau de risque : {$niveauRisque}

    Explique le ratio, évalue le risque, et donne 1 ou 2 conseils concrets si nécessaire.";

                $httpClient = HttpClient::create();
                $response = $httpClient->request('POST', 'https://api.anthropic.com/v1/messages', [
                    'headers' => [
                        'x-api-key'         => $_ENV['ANTHROPIC_API_KEY'],
                        'anthropic-version' => '2023-06-01',
                        'content-type'      => 'application/json',
                    ],
                    'json' => [
                        'model'      => 'claude-3-opus-20240229',
                        'max_tokens' => 300,
                        'messages'   => [
                            ['role' => 'user', 'content' => $prompt]
                        ],
                    ],
                ]);

                $data = $response->toArray();
                $analyseIA = $data['content'][0]['text'] ?? '';

            } catch (\Exception $e) {
                $analyseIA = 'Analyse IA temporairement indisponible.';
            }
        }

        return $this->render('simulation/show.html.twig', [
            'tableau'       => $tableau,
            'simulation'    => $simulation,
            'simulation_id' => $simulation->getId(),
            'mensualite'    => $mensualite,
            'ratio'         => $ratio,
            'niveauRisque'  => $niveauRisque,
            'analyseIA'     => $analyseIA,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_simulation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Simulation $simulation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SimulationType::class, $simulation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_simulation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('simulation/edit.html.twig', [
            'simulation' => $simulation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/delete', name: 'app_simulation_delete', methods: ['POST', 'DELETE'])]
    public function delete(Request $request, Simulation $simulation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $simulation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($simulation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_simulation_index', [], Response::HTTP_SEE_OTHER);
    }
}