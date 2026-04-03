<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260403140341 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE alerteias CHANGE id id INT NOT NULL, CHANGE message message LONGTEXT NOT NULL, CHANGE score_gravite score_gravite VARCHAR(255) NOT NULL, CHANGE date_detection date_detection DATETIME NOT NULL, CHANGE franchise_id franchise_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE alerteias RENAME INDEX fk_alerteias_franchise TO IDX_477730C4523CAB89');
        $this->addSql('ALTER TABLE bilan CHANGE id id INT NOT NULL, CHANGE total_recettes total_recettes DOUBLE PRECISION NOT NULL, CHANGE total_charges total_charges DOUBLE PRECISION NOT NULL, CHANGE resultat_net resultat_net DOUBLE PRECISION NOT NULL, CHANGE franchise_id franchise_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bilan RENAME INDEX fk_bilan_franchise TO IDX_F4DF4F44523CAB89');
        $this->addSql('ALTER TABLE budget_previsionnel CHANGE id id INT NOT NULL, CHANGE type_budget type_budget VARCHAR(255) NOT NULL, CHANGE franchise_id franchise_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE budget_previsionnel RENAME INDEX fk_budget_franchise TO IDX_55878442523CAB89');
        $this->addSql('ALTER TABLE charge CHANGE id id INT NOT NULL, CHANGE montant montant DOUBLE PRECISION NOT NULL, CHANGE type type VARCHAR(255) NOT NULL, CHANGE preuve_image preuve_image VARCHAR(255) NOT NULL, CHANGE status_validation status_validation VARCHAR(255) NOT NULL, CHANGE franchise_id franchise_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE charge RENAME INDEX franchise_id TO IDX_556BA434523CAB89');
        $this->addSql('ALTER TABLE commande CHANGE id id INT NOT NULL, CHANGE date_creation date_creation DATETIME NOT NULL, CHANGE statut statut VARCHAR(255) NOT NULL, CHANGE franchise_id franchise_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commande RENAME INDEX fk_commande_franchise TO IDX_6EEAA67D523CAB89');
        $this->addSql('ALTER TABLE fournisseur DROP FOREIGN KEY `fournisseur_ibfk_1`');
        $this->addSql('DROP INDEX matricule_fiscal ON fournisseur');
        $this->addSql('ALTER TABLE fournisseur CHANGE id id INT NOT NULL, CHANGE matricule_fiscal matricule_fiscal VARCHAR(100) NOT NULL, CHANGE telephone telephone VARCHAR(20) NOT NULL, CHANGE franchise_id franchise_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fournisseur RENAME INDEX fk_fournisseur_franchise TO IDX_369ECA32523CAB89');
        $this->addSql('ALTER TABLE franchises CHANGE id id INT NOT NULL, CHANGE email email VARCHAR(100) NOT NULL, CHANGE telephone telephone VARCHAR(20) NOT NULL, CHANGE adresse adresse VARCHAR(200) NOT NULL, CHANGE date_creation date_creation DATETIME NOT NULL, CHANGE actif actif TINYINT NOT NULL, CHANGE solde_actuel solde_actuel DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE ligne_commande DROP FOREIGN KEY `fk_ligne_produit`');
        $this->addSql('ALTER TABLE ligne_commande CHANGE id id INT NOT NULL, CHANGE commande_id commande_id INT DEFAULT NULL, CHANGE produit_id produit_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ligne_commande ADD CONSTRAINT FK_3170B74BF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ligne_commande RENAME INDEX fk_ligne_commande TO IDX_3170B74B82EA2E54');
        $this->addSql('ALTER TABLE ligne_commande RENAME INDEX fk_ligne_produit TO IDX_3170B74BF347EFB');
        $this->addSql('ALTER TABLE mensualite CHANGE id id INT NOT NULL, CHANGE montant montant DOUBLE PRECISION NOT NULL, CHANGE est_paye est_paye TINYINT NOT NULL, CHANGE pret_id pret_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mensualite RENAME INDEX fk_mensualite_pret TO IDX_764608DC1B61704B');
        $this->addSql('ALTER TABLE pret CHANGE id id INT NOT NULL, CHANGE montant_demande montant_demande DOUBLE PRECISION NOT NULL, CHANGE taux taux VARCHAR(255) NOT NULL, CHANGE motif motif LONGTEXT NOT NULL, CHANGE date_demande date_demande DATETIME NOT NULL, CHANGE statut statut VARCHAR(255) NOT NULL, CHANGE franchise_id franchise_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pret RENAME INDEX fk_pret_franchise TO IDX_52ECE979523CAB89');
        $this->addSql('DROP INDEX reference ON produit');
        $this->addSql('ALTER TABLE produit CHANGE id id INT NOT NULL, CHANGE stock_dispo stock_dispo INT NOT NULL, CHANGE image image VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE reclamations CHANGE id id INT NOT NULL, CHANGE description description LONGTEXT NOT NULL, CHANGE statut statut VARCHAR(50) NOT NULL, CHANGE date_creation date_creation DATETIME NOT NULL, CHANGE franchise_id franchise_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamations RENAME INDEX fk_reclamations_franchise TO IDX_1CAD6B76523CAB89');
        $this->addSql('ALTER TABLE transaction CHANGE id id INT NOT NULL, CHANGE type type VARCHAR(255) NOT NULL, CHANGE description description VARCHAR(255) NOT NULL, CHANGE franchise_id franchise_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE transaction RENAME INDEX fk_transaction_franchise TO IDX_723705D1523CAB89');
        $this->addSql('DROP INDEX email ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur CHANGE id_user id_user INT NOT NULL, CHANGE prenom prenom VARCHAR(50) NOT NULL, CHANGE role role VARCHAR(255) NOT NULL, CHANGE actif actif TINYINT NOT NULL, CHANGE date_creation date_creation DATETIME NOT NULL, CHANGE face_token face_token VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE utilisateur RENAME INDEX fk_user_entreprise TO IDX_1D1C63B3E6C3720D');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE alerteias CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE message message TEXT NOT NULL, CHANGE score_gravite score_gravite FLOAT NOT NULL, CHANGE date_detection date_detection DATETIME DEFAULT CURRENT_TIMESTAMP, CHANGE franchise_id franchise_id INT NOT NULL');
        $this->addSql('ALTER TABLE alerteias RENAME INDEX idx_477730c4523cab89 TO fk_alerteias_franchise');
        $this->addSql('ALTER TABLE bilan CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE total_recettes total_recettes DOUBLE PRECISION DEFAULT \'0\', CHANGE total_charges total_charges DOUBLE PRECISION DEFAULT \'0\', CHANGE resultat_net resultat_net DOUBLE PRECISION DEFAULT \'0\', CHANGE franchise_id franchise_id INT NOT NULL');
        $this->addSql('ALTER TABLE bilan RENAME INDEX idx_f4df4f44523cab89 TO fk_bilan_franchise');
        $this->addSql('ALTER TABLE budget_previsionnel CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE type_budget type_budget ENUM(\'LIMITE_DEPENSE\', \'OBJECTIF_REVENU\') NOT NULL, CHANGE franchise_id franchise_id INT NOT NULL');
        $this->addSql('ALTER TABLE budget_previsionnel RENAME INDEX idx_55878442523cab89 TO fk_budget_franchise');
        $this->addSql('ALTER TABLE charge CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE montant montant NUMERIC(15, 2) NOT NULL, CHANGE type type ENUM(\'CHARGES_EXPLOITATIONS\', \'CHARGES_FINANCIERES\', \'CHARGES_EXCEPTIONNELLES\') NOT NULL, CHANGE preuve_image preuve_image VARCHAR(255) DEFAULT NULL, CHANGE status_validation status_validation ENUM(\'EN_ATTENTE\', \'VALIDE\', \'REJETTE\') DEFAULT \'EN_ATTENTE\', CHANGE franchise_id franchise_id INT NOT NULL');
        $this->addSql('ALTER TABLE charge RENAME INDEX idx_556ba434523cab89 TO franchise_id');
        $this->addSql('ALTER TABLE commande CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE date_creation date_creation DATETIME DEFAULT CURRENT_TIMESTAMP, CHANGE statut statut ENUM(\'EN_ATTENTE\', \'VALIDEE\', \'REFUSEE\') DEFAULT \'EN_ATTENTE\', CHANGE franchise_id franchise_id INT NOT NULL');
        $this->addSql('ALTER TABLE commande RENAME INDEX idx_6eeaa67d523cab89 TO fk_commande_franchise');
        $this->addSql('ALTER TABLE fournisseur CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE matricule_fiscal matricule_fiscal VARCHAR(100) DEFAULT NULL, CHANGE telephone telephone VARCHAR(20) DEFAULT NULL, CHANGE franchise_id franchise_id INT NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX matricule_fiscal ON fournisseur (matricule_fiscal)');
        $this->addSql('ALTER TABLE fournisseur RENAME INDEX idx_369eca32523cab89 TO fk_fournisseur_franchise');
        $this->addSql('ALTER TABLE franchises CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE email email VARCHAR(100) DEFAULT NULL, CHANGE telephone telephone VARCHAR(20) DEFAULT NULL, CHANGE adresse adresse VARCHAR(200) DEFAULT NULL, CHANGE date_creation date_creation DATETIME DEFAULT CURRENT_TIMESTAMP, CHANGE actif actif TINYINT DEFAULT 1, CHANGE solde_actuel solde_actuel DOUBLE PRECISION DEFAULT \'0\'');
        $this->addSql('ALTER TABLE ligne_commande DROP FOREIGN KEY FK_3170B74BF347EFB');
        $this->addSql('ALTER TABLE ligne_commande CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE commande_id commande_id INT NOT NULL, CHANGE produit_id produit_id INT NOT NULL');
        $this->addSql('ALTER TABLE ligne_commande ADD CONSTRAINT `fk_ligne_produit` FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE ligne_commande RENAME INDEX idx_3170b74b82ea2e54 TO fk_ligne_commande');
        $this->addSql('ALTER TABLE ligne_commande RENAME INDEX idx_3170b74bf347efb TO fk_ligne_produit');
        $this->addSql('ALTER TABLE mensualite CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE montant montant NUMERIC(10, 2) NOT NULL, CHANGE est_paye est_paye TINYINT DEFAULT 0, CHANGE pret_id pret_id INT NOT NULL');
        $this->addSql('ALTER TABLE mensualite RENAME INDEX idx_764608dc1b61704b TO fk_mensualite_pret');
        $this->addSql('ALTER TABLE pret CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE montant_demande montant_demande NUMERIC(12, 2) NOT NULL, CHANGE taux taux FLOAT NOT NULL, CHANGE motif motif TEXT NOT NULL, CHANGE date_demande date_demande DATETIME DEFAULT CURRENT_TIMESTAMP, CHANGE statut statut ENUM(\'EN_ATTENTE\', \'ACCORDE\', \'REFUSE\') DEFAULT \'EN_ATTENTE\', CHANGE franchise_id franchise_id INT NOT NULL');
        $this->addSql('ALTER TABLE pret RENAME INDEX idx_52ece979523cab89 TO fk_pret_franchise');
        $this->addSql('ALTER TABLE produit CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE stock_dispo stock_dispo INT DEFAULT 0, CHANGE image image VARCHAR(255) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX reference ON produit (reference)');
        $this->addSql('ALTER TABLE reclamations CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE description description TEXT NOT NULL, CHANGE statut statut VARCHAR(50) DEFAULT \'EN_ATTENTE\', CHANGE date_creation date_creation DATETIME DEFAULT CURRENT_TIMESTAMP, CHANGE franchise_id franchise_id INT NOT NULL');
        $this->addSql('ALTER TABLE reclamations RENAME INDEX idx_1cad6b76523cab89 TO fk_reclamations_franchise');
        $this->addSql('ALTER TABLE transaction CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE type type ENUM(\'RECETTE\', \'DEPENSE\') NOT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE franchise_id franchise_id INT NOT NULL');
        $this->addSql('ALTER TABLE transaction RENAME INDEX idx_723705d1523cab89 TO fk_transaction_franchise');
        $this->addSql('ALTER TABLE utilisateur CHANGE id_user id_user INT AUTO_INCREMENT NOT NULL, CHANGE prenom prenom VARCHAR(50) DEFAULT NULL, CHANGE role role ENUM(\'SIEGE\', \'ENTREPRISE\') NOT NULL, CHANGE actif actif TINYINT DEFAULT 1, CHANGE date_creation date_creation DATETIME DEFAULT CURRENT_TIMESTAMP, CHANGE face_token face_token VARCHAR(255) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX email ON utilisateur (email)');
        $this->addSql('ALTER TABLE utilisateur RENAME INDEX idx_1d1c63b3e6c3720d TO fk_user_entreprise');
    }
}
