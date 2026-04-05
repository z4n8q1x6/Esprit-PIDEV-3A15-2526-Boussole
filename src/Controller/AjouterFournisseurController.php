<?php

namespace App\Controller;

use App\Entity\Fournisseur;
use App\Form\FournisseurType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AjouterFournisseurController extends AbstractController
{
    #[Route('/ajouter_fournisseur', name: 'app_ajouter_fournisseur')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $fournisseur = new Fournisseur();
        $form = $this->createForm(FournisseurType::class, $fournisseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Logique analogue à Charge : ID Manuel
            $manualId = (int) (time() + random_int(1, 1000));
            $fournisseur->setId($manualId);

            $em->persist($fournisseur);
            $em->flush();

            $this->addFlash('success', 'Fournisseur ajouté ! ID généré : ' . $manualId);
            return $this->redirectToRoute('app_ajouter_fournisseur');
        }

        return $this->render('ajouter_fournisseur/index.html.twig', [
            'form' => $form->createView(),
            'is_edit' => false
        ]);
    }

    #[Route('/modifier_fournisseur/{id}', name: 'app_modifier_fournisseur')]
    public function modifier(Fournisseur $fournisseur, Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(FournisseurType::class, $fournisseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Fournisseur modifié avec succès !');
            return $this->redirectToRoute('app_afficher_front_fournisseur');
        }

        return $this->render('ajouter_fournisseur/index.html.twig', [
            'form' => $form->createView(),
            'is_edit' => true
        ]);
    }
}