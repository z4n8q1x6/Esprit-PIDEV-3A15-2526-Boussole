<?php

namespace App\Service;

use App\Entity\Franchises;
use App\Entity\Bilan;
use App\Repository\TransactionRepository;
use Doctrine\ORM\EntityManagerInterface;

class ClotureFinanciereService
{
    private EntityManagerInterface $em;
    private TransactionRepository $transactionRepo;

    public function __construct(EntityManagerInterface $em, TransactionRepository $transactionRepo)
    {
        $this->em = $em;
        $this->transactionRepo = $transactionRepo;
    }

    /**
     * @throws \Exception
     */
    public function cloturerMois(Franchises $franchise, int $mois, int $annee): void
    {
        // 1. Récupérer toutes les transactions non clôturées pour cette franchise, ce mois et cette année
        $transactions = $this->transactionRepo->findTransactionsNonClotureesPourMois($franchise, $mois, $annee);

        if (empty($transactions)) {
            throw new \Exception("Aucune transaction non clôturée trouvée pour ce mois/année.");
        }

        $totalRecettes = 0;
        $totalCharges = 0;

        // 2. Boucle pour calculer les totaux
        foreach ($transactions as $t) {
            if ($t->getType() === 'RECETTE') {
                $totalRecettes += $t->getMontant();
            } elseif ($t->getType() === 'DEPENSE') {
                $totalCharges += $t->getMontant();
            }
        }

        // 3. Calcule le résultat net
        $resultatNet = $totalRecettes - $totalCharges;

        // 4. L'Archivage : Instancie une nouvelle entité Bilan
        $bilan = new Bilan();
        $bilan->setMois($mois);
        $bilan->setAnnee($annee);
        $bilan->setFranchiseId($franchise); // setFranchiseId() d'après src/Entity/Bilan.php
        $bilan->setTotalRecettes($totalRecettes); // setTotalRecettes() d'après src/Entity/Bilan.php
        $bilan->setTotalCharges($totalCharges); // setTotalCharges() d'après src/Entity/Bilan.php
        $bilan->setResultatNet($resultatNet); // setResultatNet() d'après src/Entity/Bilan.php

        $this->em->persist($bilan);

        // 5. Passe le statut de chaque transaction à est_cloture = true
        foreach ($transactions as $t) {
            $t->setEstCloture(true);
        }

        // 6. Sauvegarde en base (Transaction Transactionnelle)
        $this->em->flush();
    }
}
