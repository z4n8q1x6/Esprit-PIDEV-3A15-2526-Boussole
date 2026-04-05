<?php

namespace App\Controller;

use App\Entity\Bilan;
use App\Entity\Franchises;
use App\Entity\Transaction;
use App\Entity\Charge;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use DateTime;

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
        
        if (isset($data['mois'])) {
            $val = intval($data['mois']);
            if ($val >= 1 && $val <= 12) $bilan->setMois($val);
        }
        
        if (isset($data['annee'])) {
            $val = intval($data['annee']);
            if ($val >= 2024 && $val <= 2030) $bilan->setAnnee($val);
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
        if ($cible !== '') {
            $franchise = $entityManager->getRepository(Franchises::class)->find($cible);
            if (!$franchise) {
                return $this->json(['success' => false, 'message' => 'Franchise introuvable.']);
            }
        }

        // Calcul des dates pour la requête
        $startDate = new DateTime(sprintf('%04d-%02d-01', $annee, $mois));
        $endDate = clone $startDate;
        $endDate->modify('last day of this month')->setTime(23, 59, 59);

        // 1. Calculer les recettes depuis Transaction (type = 'RECETTE')
        $qbRecettes = $entityManager->createQueryBuilder()
            ->select('SUM(t.montant)')
            ->from(Transaction::class, 't')
            ->where('t.type = :type')
            ->andWhere('t.date >= :start AND t.date <= :end')
            ->setParameter('type', 'RECETTE')
            ->setParameter('start', $startDate)
            ->setParameter('end', $endDate);
            
        if ($franchise) {
            $qbRecettes->andWhere('t.franchise_id = :franchise')->setParameter('franchise', $franchise);
        }
        $totalRecettes = (float) $qbRecettes->getQuery()->getSingleScalarResult();

        // 2. Calculer les charges depuis Charge + Transaction (type = 'DEPENSE') si nécessaire
        // Charges directes
        $qbCharges = $entityManager->createQueryBuilder()
            ->select('SUM(c.montant)')
            ->from(Charge::class, 'c')
            ->where('c.date_charge >= :start AND c.date_charge <= :end')
            ->setParameter('start', $startDate)
            ->setParameter('end', $endDate);
            
        if ($franchise) {
            $qbCharges->andWhere('c.franchise_id = :franchise')->setParameter('franchise', $franchise);
        }
        $totalChargesBase = (float) $qbCharges->getQuery()->getSingleScalarResult();

        // Depenses dans Transaction
        $qbDepenses = $entityManager->createQueryBuilder()
            ->select('SUM(t.montant)')
            ->from(Transaction::class, 't')
            ->where('t.type = :type')
            ->andWhere('t.date >= :start AND t.date <= :end')
            ->setParameter('type', 'DEPENSE')
            ->setParameter('start', $startDate)
            ->setParameter('end', $endDate);
            
        if ($franchise) {
            $qbDepenses->andWhere('t.franchise_id = :franchise')->setParameter('franchise', $franchise);
        }
        $totalDepenses = (float) $qbDepenses->getQuery()->getSingleScalarResult();
        
        // Total global des charges = Charges + Depenses de la table Transaction
        $totalChargesGlobal = $totalChargesBase + $totalDepenses;


        // Mettre à jour ou Créer le Bilan
        $criteria = ['mois' => $mois, 'annee' => $annee, 'franchise_id' => $franchise];
        $bilan = $entityManager->getRepository(Bilan::class)->findOneBy($criteria);

        if (!$bilan) {
            $bilan = new Bilan();
            $bilan->setMois($mois);
            $bilan->setAnnee($annee);
            $bilan->setFranchiseId($franchise);
            $entityManager->persist($bilan);
            $msg = 'Bilan généré dynamiquement depuis la base de données.';
        } else {
            $msg = 'Bilan existant recalculé avec les valeurs de la base de données.';
        }

        // On écrase/remplace même si l'utilisateur avait modifié à la main
        $bilan->setTotalRecettes($totalRecettes);
        $bilan->setTotalCharges($totalChargesGlobal);
        $bilan->setResultatNet($bilan->getTotalRecettes() - $bilan->getTotalCharges());

        $entityManager->flush();

        return $this->json([
            'success' => true,
            'message' => $msg,
            'reload' => true
        ]);
    }
}