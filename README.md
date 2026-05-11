# Documentation Technique - Projet Boussole (Symfony 6.4)

Ce document fournit l'ensemble des informations techniques nécessaires pour comprendre, configurer, développer et déployer le projet **Boussole** (Esprit-PIDEV-3A15-2526-Boussole).

---

## 1. Stack Technique & Environnement

- **Langage** : PHP 8.2+
- **Framework** : Symfony 6.4 (LTS)
- **Base de données** : MariaDB / MySQL via Doctrine ORM
- **Serveur Web** : Apache / Nginx ou Symfony Local Web Server
- **Gestionnaire de dépendances** : Composer 2.x
- **Outils d'Analyse et Tests** :
  - PHPUnit 12.5 (TDD, tests unitaires et fonctionnels)
  - PHPStan niveau 7 (`phpstan_level7.json`) pour l'analyse statique
  - Doctrine Doctor (optimisation et détection N+1)

## 2. Architecture de l'Application

L'application est structurée selon le modèle MVC de Symfony et suit les principes de conception orientée objet (SOLID, encapsulation métier via les Services).

### 2.1. Entités Principales (Couche Modèle)
Le domaine est divisé en plusieurs sous-systèmes, modélisés dans `src/Entity` :
- **Authentification & Droits** : `Utilisateur`, `Franchises`
- **Comptabilité & Finance** : `Transaction`, `Budget_previsionnel`, `Bilan`, `Charge`, `Fournisseur`, `Mensualite`, `Pret`
- **E-commerce & Marketplace** : `Produit`, `Commande`, `Ligne_commande`, `Coupon`
- **IA & Support** : `Alerteias`, `AlertReport`, `Reclamations`

### 2.2. Services Métiers (Couche Logique)
La logique métier est extraite des contrôleurs vers le dossier `src/Service` :
- **Intégrations IA & ML** :
  - `AiAssistantService` & `AiChatbotService` : Intégration de **Google Gemini** pour l'analyse financière textuelle et les chatbots.
  - `AiClusteringService` : Algorithmes de machine learning via **PHP-ML** pour le regroupement de données.
- **Sécurité & Authentification** :
  - `FacePlusPlusService` : Reconnaissance faciale (FaceAuth) et persistance des tokens biométriques.
- **Finance & Comptabilité** :
  - `FinancialRatingService` : Calcul de la santé financière des franchises.
  - `ClotureFinanciereService` : Opérations de clôture de fin de mois.
  - `CurrencyConverterService` : Conversion de devises pour le marketplace.
- **Notifications & Médias** :
  - `TelegramService` : Intégration de l'API Telegram pour les alertes de budget en temps réel.
  - `UploaderService` : Gestion asynchrone / distante des médias via **Cloudinary API**.
- **Gestionnaires (Managers)** : Encapsulation des opérations CRUD et TDD (`UtilisateurManager`, `TransactionManager`, `ChargeManager`, etc.).

### 2.3. Événements et Souscripteurs (Event Subscribers)
- `BudgetAlertSubscriber.php` : Écouteur d'événements de cycle de vie Doctrine (PostPersist / PostUpdate) sur les transactions pour déclencher automatiquement des alertes (`TelegramService`) si le budget prévisionnel de la franchise est dépassé ou si le solde devient négatif.

---

## 3. Bibliothèques et Dépendances Clés (composer.json)

- **Sécurité et APIs** :
  - `lexik/jwt-authentication-bundle` : Gestion de l'authentification par Token JWT pour les API.
  - `knpuniversity/oauth2-client-bundle` & `league/oauth2-google` : Connexion OAuth2 via Google.
- **Machine Learning & IA** :
  - `php-ai/php-ml` : Bibliothèque de Machine Learning en PHP natif.
  - `google-gemini-php/client` : SDK pour l'API Gemini.
  - `cloudinary/cloudinary_php` : Sauvegarde externe des fichiers médias.
- **Bureautique et Rapports** :
  - `dompdf/dompdf` : Génération des bilans et des rapports en PDF.
  - `phpoffice/phpspreadsheet` : Exportation Excel des historiques de transactions et rapports d'alertes.
- **Frontend & UI** :
  - `symfony/ux-chartjs` : Génération de graphiques dynamiques pour le tableau de bord financier.
  - `php-flasher/flasher-sweetalert-symfony` : Affichage de notifications SweetAlert 2 (Flash messages).
  - `symfony/stimulus-bundle` : Intégration Stimulus pour un JS structuré.

---

## 4. Configuration et Déploiement

### 4.1. Variables d'Environnement (.env.local)
Pour faire fonctionner le projet en local, un fichier `.env.local` est requis avec les clés suivantes configurées :
```dotenv
# Base de données
DATABASE_URL="mysql://user:password@127.0.0.1:3306/boussole_db?serverVersion=8.0.32&charset=utf8mb4"

# Clés d'APIs Tierces
CLOUDINARY_URL=cloudinary://API_KEY:API_SECRET@CLOUD_NAME
TELEGRAM_BOT_TOKEN=votre_token_telegram
TELEGRAM_CHAT_ID=votre_chat_id
GEMINI_API_KEY=votre_cle_gemini

# FaceAuth (Face++)
FACEPLUSPLUS_API_KEY=votre_cle_facepp
FACEPLUSPLUS_API_SECRET=votre_secret_facepp

# Google OAuth2
GOOGLE_CLIENT_ID=votre_google_client_id
GOOGLE_CLIENT_SECRET=votre_google_client_secret

# JWT Authentication
JWT_SECRET_KEY=%kernel.project_dir%/config/jwt/private.pem
JWT_PUBLIC_KEY=%kernel.project_dir%/config/jwt/public.pem
JWT_PASSPHRASE=votre_phrase_secrete
```

### 4.2. Génération des Clés JWT
```bash
php bin/console lexik:jwt:generate-keypair
```

### 4.3. Création et Alimentation de la Base
L'application contient un script SQL de données de départ pour le développement.
```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
# Optionnel : si des fixtures sont présentes
php bin/console doctrine:fixtures:load 
# Ou exécuter le dump SQL inclus "seed_project_data.sql"
```

---

## 5. Bonnes Pratiques Appliquées sur le Projet

1. **Test-Driven Development (TDD)** : Implémenté activement sur les managers comme `UtilisateurManager` pour valider les règles de gestion complexes des mots de passe, des rôles et des autorisations avant l'écriture des contrôleurs.
2. **Optimisation des Requêtes (Doctrine)** : Résolution ciblée des requêtes N+1 et utilisation des jointures sélectives (fetch mode EAGER, hydratation en tableaux ou DTOs quand les entités entières ne sont pas nécessaires), validées avec *Doctrine Doctor*.
3. **Séparation Vue/Logique (Ajax)** : Les tableaux de données (historique des transactions) utilisent Fetch API avec des appels asynchrones vers le backend pour la pagination, le tri et l'édition *inline*, allégeant ainsi le chargement initial de la page.
4. **Gestion de l'Encodage** : Tout le projet a été uniformisé en UTF-8 (élimination des problèmes de BOM et d'affichage de caractères spéciaux dans Twig).

---
*Ce document sert de référence technique principale pour tout contributeur au code source du projet Boussole.*
