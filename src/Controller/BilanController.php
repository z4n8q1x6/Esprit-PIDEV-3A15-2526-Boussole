<?php

namespace App\Controller;

use App\Entity\Bilan;
use App\Entity\Franchises;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/bilan')]
final class BilanController extends AbstractController
{
    #[Route('', name: 'app_bilan_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $bilans = $entityManager
            ->getRepository(Bilan::class)
            ->findBy([], ['annee' => 'DESC', 'mois' => 'DESC']);

        $franchises = $entityManager
            ->getRepository(Franchises::class)
            ->findAll();

        return $this->render('bilan/bilan.html.twig', [
            'bilans' => $bilans,
            'franchises' => $franchises,
        ]);
    }

    #[Route('/{id}/edit-ajax', name: 'app_bilan_edit_ajax', methods: ['POST'])]
    public function editAjax(Request $request, Bilan $bilan, EntityManagerInterface $entityManager): Response
    {
        $data = json_decode($request->getContent(), true);

        if (isset($data['total_recettes'])) {
            $val = floatval($data['total_recettes']);
            if ($val < 0) return $this->json(['success' => false, 'message' => 'Le montant doit être positif.']);
            $bilan->setTotalRecettes($val);
        }
        if (isset($data['total_charges'])) {
            $val = floatval($data['total_charges']);
            if ($val < 0) return $this->json(['success' => false, 'message' => 'Le montant doit être positif.']);
            $bilan->setTotalCharges($val);
        }

        // Recalcul manuel
        $resultatNet = $bilan->getTotalRecettes() - $bilan->getTotalCharges();
        $bilan->setResultatNet($resultatNet);

        $entityManager->flush();

        return $this->json([
            'success' => true,
            'resultat_net' => $resultatNet
        ]);
    }

    #[Route('/{id}/delete-ajax', name: 'app_bilan_delete_ajax', methods: ['POST'])]
    public function deleteAjax(Bilan $bilan, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($bilan);
        $entityManager->flush();

        return $this->json(['success' => true]);
    }

    #[Route('/generate-ajax', name: 'app_bilan_generate_ajax', methods: ['POST'])]
    public function generateAjax(Request $request, EntityManagerInterface $entityManager): Response
    {
        $data = json_decode($request->getContent(), true);
        $cible = $data['cible'] ?? '';
        $mois = intval($data['mois'] ?? 0);
        $annee = intval($data['annee'] ?? 0);

        if ($mois < 1 || $mois > 12 || $annee < 2024 || $annee > 2030) {
            return $this->json(['success' => false, 'message' => 'Période invalide.']);
        }

        $franchise = null;
        // La cible '' = TOUT LE RESEAU (franchise_id = null)
        if ($cible !== '') {
            $franchise = $entityManager->getRepository(Franchises::class)->find($cible);
            if (!$franchise) {
                return $this->json(['success' => false, 'message' => 'Franchise introuvable.']);
            }
        }

        $criteria = ['mois' => $mois, 'annee' => $annee, 'franchise_id' => $franchise];

        $bilan = $entityManager->getRepository(Bilan::class)->findOneBy($criteria);

        if (!$bilan) {
            $bilan = new Bilan();
            $bilan->setMois($mois);
            $bilan->setAnnee($annee);
            $bilan->setFranchiseId($franchise);
            $bilan->setTotalRecettes(0);
            $bilan->setTotalCharges(0);
            $bilan->setResultatNet(0);
            $entityManager->persist($bilan);
            $msg = 'Nouveau bilan généré avec succès.';
        } else {
            $msg = 'Bilan existant recalculé.';
        }

        // Recalcul 
        $bilan->setResultatNet($bilan->getTotalRecettes() - $bilan->getTotalCharges());

        $entityManager->flush();

        return $this->json([
            'success' => true,
            'message' => $msg,
            'reload' => true
        ]);
    }
}