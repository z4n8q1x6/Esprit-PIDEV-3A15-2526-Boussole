<?php

namespace App\Controller;

use App\Entity\Charge;
use App\Form\ChargeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AjouterChargeController extends AbstractController
{
    #[Route('/ajouter_charge', name: 'app_ajouter_charge')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $charge = new Charge();
        $form = $this->createForm(ChargeType::class, $charge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            // 1. GÉNÉRATION MANUELLE DE L'ID
            // Puisque ta table n'est pas auto-increment, on génère un ID unique.
            // On utilise un timestamp combiné à un chiffre aléatoire pour éviter les doublons.
            $manualId = (int) (time() + random_int(1, 1000));
            $charge->setId($manualId);

            // 2. DÉFINITION DU STATUT
            $charge->setStatusValidation('EN_ATTENTE');

            $entityManager->persist($charge);
            $entityManager->flush();

            $this->addFlash('success', 'La charge a été enregistrée avec succès (ID: ' . $manualId . ') !');
            
            return $this->redirectToRoute('app_ajouter_charge');
        }

        return $this->render('ajouter_charge/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}