START TRANSACTION;

SET FOREIGN_KEY_CHECKS = 0;

DELETE FROM ligne_commande;
DELETE FROM commande;
DELETE FROM mensualite;
DELETE FROM pret;
DELETE FROM alert_report;
DELETE FROM alerteias;
DELETE FROM reclamations;
DELETE FROM transaction;
DELETE FROM charge;
DELETE FROM budget_previsionnel;
DELETE FROM bilan;
DELETE FROM fournisseur;
DELETE FROM coupon;
DELETE FROM utilisateur;
DELETE FROM produit;
DELETE FROM franchises;

ALTER TABLE alert_report AUTO_INCREMENT = 1;
ALTER TABLE alerteias AUTO_INCREMENT = 1;
ALTER TABLE bilan AUTO_INCREMENT = 1;
ALTER TABLE budget_previsionnel AUTO_INCREMENT = 1;
ALTER TABLE commande AUTO_INCREMENT = 1;
ALTER TABLE coupon AUTO_INCREMENT = 1;
ALTER TABLE franchises AUTO_INCREMENT = 1;
ALTER TABLE ligne_commande AUTO_INCREMENT = 1;
ALTER TABLE pret AUTO_INCREMENT = 1;
ALTER TABLE produit AUTO_INCREMENT = 1;
ALTER TABLE reclamations AUTO_INCREMENT = 1;
ALTER TABLE transaction AUTO_INCREMENT = 1;
ALTER TABLE utilisateur AUTO_INCREMENT = 1;

SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO franchises (id, nom, email, telephone, adresse, date_creation, actif, solde_actuel, points_fidelite) VALUES
(1, 'SIEGE_PRINCIPAL', 'contact@boussole.tn', '+21670000000', 'Avenue Habib Bourguiba, Tunis', '2026-01-05 09:00:00', 1, 0.00, 0),
(2, 'Franchise Tunis Centre', 'tunis.centre@boussole.tn', '+21671111222', 'Rue de Marseille, Tunis', '2026-01-10 09:30:00', 1, 18450.75, 145),
(3, 'Franchise Sfax Sud', 'sfax.sud@boussole.tn', '+21674444555', 'Route de Gremda, Sfax', '2026-01-12 10:00:00', 1, 14220.40, 90),
(4, 'Franchise Sousse Corniche', 'sousse.corniche@boussole.tn', '+21673333666', 'Boulevard 14 Janvier, Sousse', '2026-01-15 11:00:00', 1, 22110.95, 150),
(5, 'Franchise Nabeul Lac', 'nabeul.lac@boussole.tn', '+21672222777', 'Avenue de l Environnement, Nabeul', '2026-01-20 08:45:00', 1, 9650.30, 72);

INSERT INTO utilisateur (id_user, nom, prenom, email, mot_de_passe, role, actif, date_creation, id_franchise, face_token, google_id, google_access_token) VALUES
(1, 'Admin', 'System', 'admin@gmail.com', '$2y$12$uk7S3UO0TFP0bRJaEgtuK.CryE.PSqMMKwJiBhdHfhh/yGwUxn63u', 'SIEGE', 1, '2026-01-05 09:15:00', NULL, NULL, NULL, NULL),
(2, 'Direction', 'Centrale', 'direction@boussole.tn', '$2y$12$uk7S3UO0TFP0bRJaEgtuK.CryE.PSqMMKwJiBhdHfhh/yGwUxn63u', 'SIEGE', 1, '2026-01-05 09:20:00', 1, NULL, NULL, NULL),
(3, 'Manager', 'Tunis', 'tunis.manager@boussole.tn', '$2y$12$uk7S3UO0TFP0bRJaEgtuK.CryE.PSqMMKwJiBhdHfhh/yGwUxn63u', 'ENTREPRISE', 1, '2026-01-10 10:00:00', 2, NULL, NULL, NULL),
(4, 'Manager', 'Sfax', 'sfax.manager@boussole.tn', '$2y$12$uk7S3UO0TFP0bRJaEgtuK.CryE.PSqMMKwJiBhdHfhh/yGwUxn63u', 'ENTREPRISE', 1, '2026-01-12 10:30:00', 3, NULL, NULL, NULL),
(5, 'Manager', 'Sousse', 'sousse.manager@boussole.tn', '$2y$12$uk7S3UO0TFP0bRJaEgtuK.CryE.PSqMMKwJiBhdHfhh/yGwUxn63u', 'ENTREPRISE', 1, '2026-01-15 11:30:00', 4, NULL, NULL, NULL),
(6, 'Manager', 'Nabeul', 'nabeul.manager@boussole.tn', '$2y$12$uk7S3UO0TFP0bRJaEgtuK.CryE.PSqMMKwJiBhdHfhh/yGwUxn63u', 'ENTREPRISE', 1, '2026-01-20 09:15:00', 5, NULL, NULL, NULL),
(7, 'Demo', 'Franchise', 'franchise.demo@boussole.tn', '$2y$12$uk7S3UO0TFP0bRJaEgtuK.CryE.PSqMMKwJiBhdHfhh/yGwUxn63u', 'ENTREPRISE', 1, '2026-02-01 08:00:00', 2, NULL, NULL, NULL);

INSERT INTO fournisseur (id, nom, matricule_fiscal, telephone, franchise_id) VALUES
(1, 'Cafe Import Tunisie', 'MF-TUN-2026-001', '+21671110001', 2),
(2, 'Materiel Pro Sfax', 'MF-SFX-2026-002', '+21674440002', 3),
(3, 'Packaging Sahel', 'MF-SUS-2026-003', '+21673330003', 4),
(4, 'Services Nabeul', 'MF-NAB-2026-004', '+21672220004', 5);

INSERT INTO produit (id, nom, reference, prix_achat, stock_dispo, image, pourcentage_reduction) VALUES
(1, 'Machine Espresso Pro', 'ESP-001', 3200.00, 8, 'uploads/produits/machine-espresso-pro.jpg', 10),
(2, 'Moulin Cafe Precision', 'MLN-002', 850.00, 15, 'uploads/produits/moulin-cafe-precision.jpg', 5),
(3, 'Pack Gobelets 50cl', 'GBL-003', 18.00, 250, 'uploads/produits/pack-gobelets-50cl.jpg', 0),
(4, 'Sirop Vanille Premium', 'SRP-004', 25.00, 120, 'uploads/produits/sirop-vanille-premium.jpg', 15),
(5, 'Caisse Enregistreuse Smart', 'CAS-005', 1450.00, 6, 'uploads/produits/caisse-enregistreuse-smart.jpg', 8);

INSERT INTO coupon (id, code, valeur, is_used, date_creation) VALUES
(1, 'WLCM10', 10.00, 1, '2026-04-01 09:00:00'),
(2, 'PRINT5', 10.00, 1, '2026-04-02 09:00:00'),
(3, 'SAVE20', 10.00, 0, '2026-04-03 09:00:00');

INSERT INTO commande (id, date_creation, montant_total, statut, franchise_id, points_utilises, points_gagnes, coupon_code, remise_coupon) VALUES
(1, '2026-04-10 10:15:00', 3225.00, 'Validée', 2, 50, 322, 'WLCM10', 10.00),
(2, '2026-04-12 14:20:00', 1827.50, 'En attente', 3, 0, 182, NULL, NULL),
(3, '2026-04-14 16:40:00', 1864.00, 'Refusée', 4, 100, 0, NULL, NULL),
(4, '2026-04-16 11:05:00', 1218.00, 'Validée', 5, 20, 121, 'PRINT5', 10.00);

INSERT INTO ligne_commande (id, quantite, prix_unitaire, commande_id, produit_id) VALUES
(1, 1, 2880.00, 1, 1),
(2, 20, 18.00, 1, 3),
(3, 2, 807.50, 2, 2),
(4, 10, 21.25, 2, 4),
(5, 1, 1334.00, 3, 5),
(6, 30, 18.00, 3, 3),
(7, 24, 21.25, 4, 4),
(8, 40, 18.00, 4, 3);

INSERT INTO pret (id, montant_demande, duree_mois, taux, motif, date_demande, statut, franchise_id) VALUES
(1, 12000.00, 24, '6.5%', 'Renouvellement du materiel de preparation.', '2026-03-15 09:30:00', 'VALIDE', 2),
(2, 8000.00, 18, '5.8%', 'Renforcement de la tresorerie avant la saison estivale.', '2026-04-02 11:00:00', 'EN_ATTENTE', 3),
(3, 5000.00, 12, '6.2%', 'Amenagement du point de vente et signaletique.', '2026-04-05 15:20:00', 'REJETTE', 5);

INSERT INTO mensualite (id, date_echeance, montant, est_paye, pret_id) VALUES
(1, '2026-04-15', 540.00, 1, 1),
(2, '2026-05-15', 540.00, 1, 1),
(3, '2026-06-15', 540.00, 0, 1),
(4, '2026-07-15', 540.00, 0, 1);

INSERT INTO charge (id, titre, montant, date_charge, type, preuve_image, status_validation, franchise_id) VALUES
(1, 'Loyer avril Tunis', 2800.00, '2026-04-01', 'CHARGES_EXPLOITATIONS', 'loyer_tunis_avril.pdf', 'VALIDE', 2),
(2, 'Electricite avril Tunis', 620.00, '2026-04-03', 'CHARGES_EXPLOITATIONS', 'electricite_tunis_avril.pdf', 'VALIDE', 2),
(3, 'Maintenance machine Tunis', 450.00, '2026-04-07', 'CHARGES_EXPLOITATIONS', 'maintenance_tunis_avril.pdf', 'EN_ATTENTE', 2),
(4, 'Loyer avril Sfax', 2400.00, '2026-04-01', 'CHARGES_EXPLOITATIONS', 'loyer_sfax_avril.pdf', 'VALIDE', 3),
(5, 'Internet avril Sfax', 190.00, '2026-04-04', 'CHARGES_EXPLOITATIONS', 'internet_sfax_avril.pdf', 'VALIDE', 3),
(6, 'Publicite locale Sfax', 300.00, '2026-04-09', 'CHARGES_EXPLOITATIONS', 'publicite_sfax_avril.pdf', 'REJETTE', 3),
(7, 'Loyer avril Sousse', 2600.00, '2026-04-01', 'CHARGES_EXPLOITATIONS', 'loyer_sousse_avril.pdf', 'VALIDE', 4),
(8, 'Eau avril Sousse', 210.00, '2026-04-05', 'CHARGES_EXPLOITATIONS', 'eau_sousse_avril.pdf', 'VALIDE', 4),
(9, 'Formation equipe Sousse', 520.00, '2026-04-11', 'CHARGES_PERSONNEL', 'formation_sousse_avril.pdf', 'EN_ATTENTE', 4),
(10, 'Loyer avril Nabeul', 2100.00, '2026-04-01', 'CHARGES_EXPLOITATIONS', 'loyer_nabeul_avril.pdf', 'VALIDE', 5),
(11, 'Electricite avril Nabeul', 480.00, '2026-04-06', 'CHARGES_EXPLOITATIONS', 'electricite_nabeul_avril.pdf', 'VALIDE', 5),
(12, 'Assurance local Nabeul', 390.00, '2026-04-10', 'CHARGES_FINANCIERES', 'assurance_nabeul_avril.pdf', 'VALIDE', 5);

INSERT INTO transaction (id, date, montant, type, description, franchise_id, est_cloture) VALUES
(1, '2026-04-03', 8500.00, 'RECETTE', 'Ventes comptoir semaine 1 Tunis', 2, 0),
(2, '2026-04-16', 6200.00, 'RECETTE', 'Ventes entreprise semaine 3 Tunis', 2, 0),
(3, '2026-04-05', 2800.00, 'DEPENSE', 'Reglement loyer Tunis', 2, 1),
(4, '2026-04-07', 620.00, 'DEPENSE', 'Reglement electricite Tunis', 2, 1),
(5, '2026-04-04', 7200.00, 'RECETTE', 'Ventes comptoir semaine 1 Sfax', 3, 0),
(6, '2026-04-18', 5400.00, 'RECETTE', 'Ventes evenement local Sfax', 3, 0),
(7, '2026-04-05', 2400.00, 'DEPENSE', 'Reglement loyer Sfax', 3, 1),
(8, '2026-04-06', 190.00, 'DEPENSE', 'Reglement internet Sfax', 3, 1),
(9, '2026-04-02', 9600.00, 'RECETTE', 'Ventes comptoir semaine 1 Sousse', 4, 0),
(10, '2026-04-20', 7100.00, 'RECETTE', 'Ventes weekend Corniche', 4, 0),
(11, '2026-04-03', 2600.00, 'DEPENSE', 'Reglement loyer Sousse', 4, 1),
(12, '2026-04-06', 210.00, 'DEPENSE', 'Reglement eau Sousse', 4, 1),
(13, '2026-04-12', 520.00, 'DEPENSE', 'Formation equipe Sousse', 4, 0),
(14, '2026-04-04', 5800.00, 'RECETTE', 'Ventes comptoir semaine 1 Nabeul', 5, 0),
(15, '2026-04-19', 4100.00, 'RECETTE', 'Ventes partenariats locaux Nabeul', 5, 0),
(16, '2026-04-03', 2100.00, 'DEPENSE', 'Reglement loyer Nabeul', 5, 1),
(17, '2026-04-07', 480.00, 'DEPENSE', 'Reglement electricite Nabeul', 5, 1),
(18, '2026-04-11', 390.00, 'DEPENSE', 'Prime assurance Nabeul', 5, 1);

INSERT INTO budget_previsionnel (id, mois, annee, montant_cible, type_budget, categorie, franchise_id) VALUES
(1, 4, 2026, 15000.00, 'OBJECTIF_REVENU', 'CHIFFRE_AFFAIRES', 2),
(2, 4, 2026, 4000.00, 'LIMITE_DEPENSE', 'CHARGES_EXPLOITATIONS', 2),
(3, 4, 2026, 13000.00, 'OBJECTIF_REVENU', 'CHIFFRE_AFFAIRES', 3),
(4, 4, 2026, 3200.00, 'LIMITE_DEPENSE', 'CHARGES_EXPLOITATIONS', 3),
(5, 4, 2026, 17000.00, 'OBJECTIF_REVENU', 'CHIFFRE_AFFAIRES', 4),
(6, 4, 2026, 3800.00, 'LIMITE_DEPENSE', 'CHARGES_EXPLOITATIONS', 4),
(7, 4, 2026, 11000.00, 'OBJECTIF_REVENU', 'CHIFFRE_AFFAIRES', 5),
(8, 4, 2026, 3100.00, 'LIMITE_DEPENSE', 'CHARGES_EXPLOITATIONS', 5);

INSERT INTO bilan (id, mois, annee, total_recettes, total_charges, resultat_net, franchise_id) VALUES
(1, 4, 2026, 14700.00, 3420.00, 11280.00, 2),
(2, 4, 2026, 12600.00, 2590.00, 10010.00, 3),
(3, 4, 2026, 16700.00, 3330.00, 13370.00, 4),
(4, 4, 2026, 9900.00, 2970.00, 6930.00, 5);

INSERT INTO reclamations (id, sujet, description, statut, date_creation, franchise_id) VALUES
(1, 'Retard livraison accessoires', 'La livraison du pack gobelets a pris plus de cinq jours ouvrables.', 'EN_ATTENTE', '2026-04-09 09:10:00', 2),
(2, 'Probleme facturation internet', 'Le montant facture ne correspond pas au contrat mensuel.', 'EN_COURS', '2026-04-11 14:20:00', 3),
(3, 'Besoin maintenance caisse', 'La caisse enregistreuse redemarre plusieurs fois pendant le service.', 'RESOLU', '2026-04-13 12:00:00', 4),
(4, 'Demande support ouverture', 'La franchise souhaite un accompagnement pour une campagne locale.', 'EN_ATTENTE', '2026-04-15 17:45:00', 5);

INSERT INTO alerteias (id, type_alerte, message, score_gravite, date_detection, franchise_id) VALUES
(1, 'ALERTE_BUDGET', 'Les depenses de Tunis approchent la limite budgetaire du mois en cours.', 7.20, '2026-04-17 08:30:00', 2),
(2, 'ALERTE_TRESORERIE', 'La franchise de Sfax presente un besoin de tresorerie a surveiller avant validation du pret.', 8.10, '2026-04-18 09:15:00', 3),
(3, 'ALERTE_OPERATIONNELLE', 'La franchise de Sousse affiche plusieurs charges en attente de validation et un risque de derive.', 6.80, '2026-04-18 11:00:00', 4),
(4, 'ALERTE_PERFORMANCE', 'La franchise de Nabeul reste rentable mais les ventes hebdomadaires sont sous l objectif cible.', 5.90, '2026-04-18 16:45:00', 5);

INSERT INTO alert_report (id, url, generated_at, alert_count) VALUES
(1, 'https://res.cloudinary.com/dmwloqwuy/raw/upload/v1776619048/boussole/reports/report-avril-tunis.pdf', '2026-04-18 18:10:00', 2),
(2, 'https://res.cloudinary.com/dmwloqwuy/raw/upload/v1776619052/boussole/reports/report-avril-national.pdf', '2026-04-18 18:25:00', 4);

COMMIT;
