<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Complete database schema migration for boussole database
 * Creates all tables with proper constraints and indexes
 */
final class Version20260416000000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create complete database schema for boussole database including all tables, indexes, and foreign keys';
    }

    public function up(Schema $schema): void
    {
        // Create franchises table first (needed for foreign key constraints)
        $this->addSql('
            CREATE TABLE franchises (
                id INT AUTO_INCREMENT NOT NULL,
                nom VARCHAR(100) NOT NULL,
                email VARCHAR(100) NOT NULL,
                telephone VARCHAR(20) NOT NULL,
                adresse VARCHAR(200) NOT NULL,
                date_creation DATETIME NOT NULL,
                actif TINYINT NOT NULL,
                solde_actuel DOUBLE PRECISION NOT NULL,
                PRIMARY KEY (id)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ');

        // Create utilisateur table
        $this->addSql('
            CREATE TABLE utilisateur (
                id_user INT AUTO_INCREMENT NOT NULL,
                nom VARCHAR(50) NOT NULL,
                prenom VARCHAR(50) NOT NULL,
                email VARCHAR(100) NOT NULL,
                mot_de_passe VARCHAR(255) NOT NULL,
                role VARCHAR(255) NOT NULL,
                actif TINYINT NOT NULL,
                date_creation DATETIME NOT NULL,
                face_token LONGTEXT DEFAULT NULL,
                id_franchise INT DEFAULT NULL,
                PRIMARY KEY (id_user),
                UNIQUE INDEX UNIQ_1D1C63B3E6C3720D (id_franchise),
                CONSTRAINT FK_1D1C63B3E6C3720D FOREIGN KEY (id_franchise) REFERENCES franchises (id) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ');

        // Create produit table
        $this->addSql('
            CREATE TABLE produit (
                id INT NOT NULL,
                nom VARCHAR(100) NOT NULL,
                reference VARCHAR(50) NOT NULL,
                prix_achat DOUBLE PRECISION NOT NULL,
                stock_dispo INT NOT NULL,
                image VARCHAR(255) NOT NULL,
                PRIMARY KEY (id),
                UNIQUE INDEX UNIQ_880C6C8D6B1D3F1C (reference)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ');

        // Create fournisseur table
        $this->addSql('
            CREATE TABLE fournisseur (
                id INT NOT NULL,
                nom VARCHAR(255) NOT NULL,
                matricule_fiscal VARCHAR(100) DEFAULT NULL,
                telephone VARCHAR(20) DEFAULT NULL,
                franchise_id INT DEFAULT NULL,
                PRIMARY KEY (id),
                INDEX IDX_369ECA32523CAB89 (franchise_id),
                CONSTRAINT FK_369ECA32523CAB89 FOREIGN KEY (franchise_id) REFERENCES franchises (id) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ');

        // Create commande table
        $this->addSql('
            CREATE TABLE commande (
                id INT NOT NULL,
                date_creation DATETIME NOT NULL,
                montant_total DOUBLE PRECISION NOT NULL,
                statut VARCHAR(255) NOT NULL,
                franchise_id INT DEFAULT NULL,
                PRIMARY KEY (id),
                INDEX IDX_6EEAA67D523CAB89 (franchise_id),
                CONSTRAINT FK_6EEAA67D523CAB89 FOREIGN KEY (franchise_id) REFERENCES franchises (id) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ');

        // Create ligne_commande table
        $this->addSql('
            CREATE TABLE ligne_commande (
                id INT NOT NULL,
                quantite INT NOT NULL,
                prix_unitaire DOUBLE PRECISION NOT NULL,
                commande_id INT DEFAULT NULL,
                produit_id INT DEFAULT NULL,
                PRIMARY KEY (id),
                INDEX IDX_3170B74B82EA2E54 (commande_id),
                INDEX IDX_3170B74BF347EFB (produit_id),
                CONSTRAINT FK_3170B74B82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id) ON DELETE CASCADE,
                CONSTRAINT FK_3170B74BF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ');

        // Create charge table
        $this->addSql('
            CREATE TABLE charge (
                id INT NOT NULL,
                titre VARCHAR(255) NOT NULL,
                montant DOUBLE PRECISION NOT NULL,
                date_charge DATE NOT NULL,
                type VARCHAR(255) NOT NULL,
                preuve_image VARCHAR(255) NOT NULL,
                status_validation VARCHAR(255) NOT NULL,
                franchise_id INT DEFAULT NULL,
                PRIMARY KEY (id),
                INDEX IDX_556BA434523CAB89 (franchise_id),
                CONSTRAINT FK_556BA434523CAB89 FOREIGN KEY (franchise_id) REFERENCES franchises (id) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ');

        // Create bilan table
        $this->addSql('
            CREATE TABLE bilan (
                id INT AUTO_INCREMENT NOT NULL,
                mois INT NOT NULL,
                annee INT NOT NULL,
                total_recettes DOUBLE PRECISION NOT NULL,
                total_charges DOUBLE PRECISION NOT NULL,
                resultat_net DOUBLE PRECISION NOT NULL,
                franchise_id INT DEFAULT NULL,
                PRIMARY KEY (id),
                INDEX IDX_F4DF4F44523CAB89 (franchise_id),
                CONSTRAINT FK_F4DF4F44523CAB89 FOREIGN KEY (franchise_id) REFERENCES franchises (id) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ');

        // Create budget_previsionnel table
        $this->addSql('
            CREATE TABLE budget_previsionnel (
                id INT AUTO_INCREMENT NOT NULL,
                mois INT NOT NULL,
                annee INT NOT NULL,
                montant_cible DOUBLE PRECISION NOT NULL,
                type_budget VARCHAR(255) NOT NULL,
                categorie VARCHAR(100) NOT NULL,
                franchise_id INT DEFAULT NULL,
                PRIMARY KEY (id),
                INDEX IDX_55878442523CAB89 (franchise_id),
                CONSTRAINT FK_55878442523CAB89 FOREIGN KEY (franchise_id) REFERENCES franchises (id) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ');

        // Create pret table
        $this->addSql('
            CREATE TABLE pret (
                id INT NOT NULL,
                montant_demande DOUBLE PRECISION NOT NULL,
                duree_mois INT NOT NULL,
                taux VARCHAR(255) NOT NULL,
                motif LONGTEXT NOT NULL,
                date_demande DATETIME NOT NULL,
                statut VARCHAR(255) NOT NULL,
                franchise_id INT DEFAULT NULL,
                PRIMARY KEY (id),
                INDEX IDX_52ECE979523CAB89 (franchise_id),
                CONSTRAINT FK_52ECE979523CAB89 FOREIGN KEY (franchise_id) REFERENCES franchises (id) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ');

        // Create mensualite table
        $this->addSql('
            CREATE TABLE mensualite (
                id INT NOT NULL,
                date_echeance DATE NOT NULL,
                montant DOUBLE PRECISION NOT NULL,
                est_paye TINYINT NOT NULL,
                pret_id INT DEFAULT NULL,
                PRIMARY KEY (id),
                INDEX IDX_764608DC1B61704B (pret_id),
                CONSTRAINT FK_764608DC1B61704B FOREIGN KEY (pret_id) REFERENCES pret (id) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ');

        // Create transaction table
        $this->addSql('
            CREATE TABLE transaction (
                id INT AUTO_INCREMENT NOT NULL,
                date DATE NOT NULL,
                montant DOUBLE PRECISION NOT NULL,
                type VARCHAR(255) NOT NULL,
                description VARCHAR(255) NOT NULL,
                franchise_id INT DEFAULT NULL,
                PRIMARY KEY (id),
                INDEX IDX_723705D1523CAB89 (franchise_id),
                CONSTRAINT FK_723705D1523CAB89 FOREIGN KEY (franchise_id) REFERENCES franchises (id) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ');

        // Create alerteias table
        $this->addSql('
            CREATE TABLE alerteias (
                id INT AUTO_INCREMENT NOT NULL,
                type_alerte VARCHAR(100) NOT NULL,
                message LONGTEXT NOT NULL,
                score_gravite DOUBLE NOT NULL,
                date_detection DATETIME NOT NULL,
                franchise_id INT DEFAULT NULL,
                PRIMARY KEY (id),
                INDEX IDX_477730C4523CAB89 (franchise_id),
                CONSTRAINT FK_477730C4523CAB89 FOREIGN KEY (franchise_id) REFERENCES franchises (id) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ');

        // Create reclamations table
        $this->addSql('
            CREATE TABLE reclamations (
                id INT AUTO_INCREMENT NOT NULL,
                sujet VARCHAR(255) NOT NULL,
                description LONGTEXT NOT NULL,
                statut VARCHAR(50) NOT NULL,
                date_creation DATETIME NOT NULL,
                franchise_id INT DEFAULT NULL,
                PRIMARY KEY (id),
                INDEX IDX_1CAD6B76523CAB89 (franchise_id),
                CONSTRAINT FK_1CAD6B76523CAB89 FOREIGN KEY (franchise_id) REFERENCES franchises (id) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ');

        // Create alert_report table
        $this->addSql('
            CREATE TABLE alert_report (
                id INT AUTO_INCREMENT NOT NULL,
                url VARCHAR(255) NOT NULL,
                generated_at DATETIME NOT NULL,
                alert_count INT NOT NULL,
                PRIMARY KEY (id)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ');

        // Create doctrine_migration_versions table
        $this->addSql('
            CREATE TABLE doctrine_migration_versions (
                version VARCHAR(191) NOT NULL,
                executed_at DATETIME DEFAULT NULL,
                execution_time INT DEFAULT NULL,
                PRIMARY KEY (version)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ');
    }

    public function down(Schema $schema): void
    {
        // Drop all tables in reverse order to respect foreign key constraints
        $this->addSql('DROP TABLE IF EXISTS doctrine_migration_versions');
        $this->addSql('DROP TABLE IF EXISTS alert_report');
        $this->addSql('DROP TABLE IF EXISTS reclamations');
        $this->addSql('DROP TABLE IF EXISTS alerteias');
        $this->addSql('DROP TABLE IF EXISTS transaction');
        $this->addSql('DROP TABLE IF EXISTS mensualite');
        $this->addSql('DROP TABLE IF EXISTS pret');
        $this->addSql('DROP TABLE IF EXISTS budget_previsionnel');
        $this->addSql('DROP TABLE IF EXISTS bilan');
        $this->addSql('DROP TABLE IF EXISTS charge');
        $this->addSql('DROP TABLE IF EXISTS ligne_commande');
        $this->addSql('DROP TABLE IF EXISTS commande');
        $this->addSql('DROP TABLE IF EXISTS fournisseur');
        $this->addSql('DROP TABLE IF produit');
        $this->addSql('DROP TABLE IF utilisateur');
        $this->addSql('DROP TABLE IF franchises');
    }
}