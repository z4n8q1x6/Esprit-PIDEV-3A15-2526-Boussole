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
            // 1. GÉNÉRATION MANUELLE DE L'ID (Logique conservée)
            $manualId = (int) (time() + random_int(1, 1000));
            $charge->setId($manualId);

            // 2. SAUVEGARDE DE LA CHARGE
            $entityManager->persist($charge);

            // 3. SYNCHRONISATION AUTOMATIQUE EN TANT QUE DÉPENSE (TRANSACTION)
            $transaction = new \App\Entity\Transaction();
            $transaction->setDate($charge->getDateCharge());
            $transaction->setMontant($charge->getMontant());
            $transaction->setType('DEPENSE');
            $transaction->setDescription('Charge ' . $charge->getTitre());
            
            // Toujours utiliser la première franchise (celle utilisée par le dashboard/historique)
            $dummyFranchise = $entityManager->getRepository(\App\Entity\Franchises::class)->findOneBy([]);
            if ($dummyFranchise) {
                $transaction->setFranchise_id($dummyFranchise);
            }

            $entityManager->persist($transaction);
            $entityManager->flush();

            $this->addFlash('success', 'La charge a été enregistrée et ajoutée aux transactions en tant que dépense avec succès !');
            
            return $this->redirectToRoute('app_ajouter_charge');
        }

        return $this->render('ajouter_charge/index.html.twig', [
            'form' => $form->createView(),
            'is_edit' => false,
        ]);
    }

    #[Route('/modifier_charge/{id}', name: 'app_modifier_charge')]
    public function modifier(Charge $charge, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ChargeType::class, $charge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'La charge (ID: ' . $charge->getId() . ') a été modifiée avec succès !');

            return $this->redirectToRoute('app_afficher_front_charge');
        }

        return $this->render('ajouter_charge/index.html.twig', [
            'form' => $form->createView(),
            'is_edit' => true,
        ]);
    }
}