<?php

namespace App\Controller;

use App\Repository\ChargeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AfficherBackChargeController extends AbstractController
{
    // MODIFICATION ICI : L'URL est maintenant identique au nom de ton dossier Twig
    #[Route('/afficher_back_charge', name: 'app_afficher_back_charge')]
    public function index(ChargeRepository $chargeRepository): Response
    {
        // 1. Récupérer toutes les charges de la base de données
        $charges = $chargeRepository->findAll();
        
        // 2. Calculer le total des montants
        $total = 0;
        foreach ($charges as $charge) {
            $total += $charge->getMontant();
        }

        // 3. Envoyer les données à la vue Twig (située dans le dossier du même nom)
        return $this->render('afficher_back_charge/index.html.twig', [
            'charges' => $charges,
            'total' => $total,
        ]);
    }

    // On garde cette route pour la suppression
    #[Route('/afficher_back_charge/delete/{id}', name: 'app_charge_delete')]
    public function delete(int $id, ChargeRepository $chargeRepository, EntityManagerInterface $entityManager): Response
    {
        $charge = $chargeRepository->find($id);

        if ($charge) {
            $entityManager->remove($charge);
            $entityManager->flush();
            $this->addFlash('success', 'La charge a été supprimée.');
        }

        return $this->redirectToRoute('app_afficher_back_charge');
    }
}