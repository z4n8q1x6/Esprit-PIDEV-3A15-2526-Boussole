# Suivi des Modifications du Projet Boussole

Ce fichier répertorie toutes les modifications apportées au code source, organisées par tâches.

---

## Tâche 1 : [Bundle] Ajout de la fonctionnalité d'export PDF pour les bilans
**Date** : 13 Avril 2026

* **Fichier créé** : 	emplates/bilan/bilan_pdf.html.twig
  * **Lignes exactes** : Lignes 1 - 82
  * **Description** : Création du template de base "Papier A4" pour l'exportation PDF.
* **Fichier modifié** : src/Controller/BilanController.php
  * **Lignes exactes** : Lignes 11-12 (Imports) et 165-190 (Méthode exportPdf)
  * **Description** : Ajout de l'action exportPdf et de la route #[Route('/pdf/{id}', name: 'export_pdf')] pour générer et télécharger le PDF via Dompdf.

---

## Tâche 2 : [Métier Avancé] Sélection multiple et suppression de bilans
**Date** : 13 Avril 2026

* **Fichier modifié** : 	emplates/bilan/bilan.html.twig
  * **Lignes exactes** : Lignes 70-75 (Checkboxes) et 250-290 (Script JS)
  * **Description** : Ajout d'une colonne de Checkboxes dans le tableau HTML. Ajout d'un bouton rouge "Supprimer la sélection" et d'un script JavaScript gérant la sélection multiple et l'appel AJAX de suppression.
* **Fichier modifié** : src/Controller/BilanController.php
  * **Lignes exactes** : Lignes 85-105
  * **Description** : Ajout de la méthode deleteBatchAjax avec la route #[Route('/delete-batch-ajax')] pour supprimer plusieurs bilans en une seule action (Boucle de emove() + lush()).

---

## Tâche 3 : [Correction] Correction de la liaison du bouton PDF et des bugs d'export
**Date** : 13 Avril 2026

* **Fichier modifié** : 	emplates/bilan/bilan.html.twig
  * **Lignes exactes** : Lignes 150-165
  * **Description** : Ajout d'un écouteur d'évènement sur le clic d'une ligne du tableau pour lier son ID au bouton "Exporter PDF".
* **Fichier modifié** : src/Controller/BilanController.php
  * **Lignes exactes** : Lignes 170-185
  * **Description** : Remplacement de $dompdf->stream() par $dompdf->output() pour injecter le PDF généré directement dans une Response HTTP Symfony.
* **Fichier modifié** : 	emplates/bilan/bilan_pdf.html.twig
  * **Lignes exactes** : Lignes 90-95
  * **Description** : Remplacement du filtre PHP str_pad par le formatage natif Twig {{ "%02d"|format() }}. Ajout de conditions pour éviter l'erreur sur le bilan du Siège.

---

## Tâche 4 : [UI/UX] Personnalisation visuelle du PDF (Thème Boussole)
**Date** : 13 Avril 2026

* **Fichier modifié** : 	emplates/bilan/bilan_pdf.html.twig
  * **Lignes exactes** : Lignes 1 - 150 (Refonte intégrale)
  * **Description** : Refonte HTML/CSS complète. Ajout des couleurs officielles (Bleu Nuit #0b0f19, Cyan #00d4ff), des blocs d'informations restructurés et coloration automatique du résultat net.

---

## Tâche 5 : [Bundle] Implémentation du Graphique Interactif (Chart.js via Symfony UX)
**Date** : 13 Avril 2026

* **Installation Requise** : Lancement de composer require symfony/ux-chartjs.
* **Fichier modifié** : src/Controller/DashboardSiegeController.php
  * **Lignes exactes** : Lignes 8-15 (Imports) et Lignes 86-121 (Données graphique)
  * **Description** : Injection de ChartBuilderInterface dans la méthode index(). Création d'un graphique 'bar' interactif côté PHP configuré avec deux jeux de données (Réel en cyan, Budget en orange).
* **Fichier modifié** : 	emplates/dashboard_siege/index.html.twig
  * **Lignes exactes** : Lignes 64-66 (Contenu HTML) et Lignes 80-160 (Script JS enlevé)
  * **Description** : Remplacement de l'initialisation JavaScript native statique volumineuse par l'instruction concise {{ render_chart(chart) }} de Symfony UX.

<!-- **Modèle pour les futures tâches :**
## Tâche X : [Titre de la tâche]
**Date** : DD/MM/YYYY
* **Fichier modifié** : chemin/du/fichier
  * **Lignes exactes** : Lignes X - Y
  * **Description** : [Ce qui a changé]
-->---

## Tâche 6 : [Correction] Correction de l'Affichage de Chart.js sans AssetMapper
**Date** : 13 Avril 2026

* **Fichier modifié** : 	emplates/dashboard_siege/index.html.twig
  * **Lignes exactes** : Lignes 85 - 105
  * **Description** : Le bundle symfony/ux-chartjs nécessite AssetMapper (Stimulus) par défaut pour s'auto-initialiser. Puisque le code base HTML n'intègre pas ce gestionnaire moderne, j'ai implémenté un extracteur JavaScript "Vanilla" dans le bloc javascripts. Ce script lit à la volée le JSON contenu dans l'attribut data-view généré par {{ render_chart(chart) }} et le lie directement à la librairie CDN de Chart.js.
    * **Lignes exactes** : Lignes modifiées dans 	emplates/dashboard_siege/index.html.twig pour corriger l'attribut data-* cible de Chart.js sans Webpack

* **Fichier** : src/Controller/DashboardSiegeController.php
    * **Action** : Refonte de la logique du graphique interactif ()
    * **Raison** : Le graphique ignorait les budgets de type LIMITE_DEPENSE. Ajout de datasets sÃ©parÃ©s : Revenus RÃ©els, Budget Revenus, DÃ©penses RÃ©elles et Limite DÃ©penses de maniÃ¨re rÃ©troactive sur 3 mois.

---

## Tâche 7 : [UI/UX] Personnalisation PDF et application dynamique des couleurs
**Date** : 13/04/2026
* **Fichier modifié** : templates/bilan/bilan_pdf.html.twig
  * **Lignes exactes** : Lignes 1 - 213 (Refonte complète)
  * **Description** : Refonte intégrale en HTML/CSS du design du modèle PDF pour correspondre à 100% à la maquette graphique fournie (en-tête bleu nuit, encart d'infos formaté). Pour pallier aux limites du parseur CSS de l'outil de génération DOMPDF, intégration de balises `style="..."` inline pour attribuer de manière robuste et dynamique et inconditionnelle les couleurs vert `#10ac84` pour les rentrées d'argent, strictes rouge `#ff4757` pour les dépenses selon les contraintes demandées.

---

## Tâche 8 : [Correction] Correction de la synchronisation Charge → Transaction (Dashboard & Historique)
**Date** : 13/04/2026

* **Fichier modifié** : src/Controller/AjouterChargeController.php
  * **Lignes exactes** : Lignes 34 - 35
  * **Description** : Correction du type de transaction : le type est défini sur `'DEPENSE'` (au lieu d'une valeur incorrecte). La description est passée de `'Charge : ' . titre` à `'Charge ' . titre` pour supprimer le caractère `:` qui violait la contrainte Regex de l'entité Transaction (`/^[A-Za-zÀ-ÿ\s]+$/` — lettres et espaces uniquement).
* **Fichier modifié** : src/Controller/AjouterChargeController.php
  * **Lignes exactes** : Lignes 37 - 41
  * **Description** : Correction critique de l'association `franchise_id`. Avant : la transaction utilisait la franchise sélectionnée dans le formulaire de charge (ex: ID 6). Mais le Dashboard (`/transaction`) et l'Historique (`/transaction/historique`) filtrent par `findOneBy([])` (= franchise ID 1). Résultat : les transactions existaient en BDD mais n'apparaissaient jamais. Fix : la transaction utilise désormais toujours la même première franchise que le Dashboard/Historique via `findOneBy([])`.

---

## Tâche 9 : [Bundle] Bundle Faible n°1 – Graphiques Statistiques (Chart.js)
**Date** : 13/04/2026

* **Installation Requise** : `composer require symfony/ux-chartjs` (Bundle Symfony UX Chartjs)
* **Fichier modifié** : src/Controller/DashboardSiegeController.php
  * **Lignes exactes** : Lignes 11 - 12 (Imports)
  * **Description** : Ajout des imports `Symfony\UX\Chartjs\Builder\ChartBuilderInterface` et `Symfony\UX\Chartjs\Model\Chart` pour l'injection du service de construction de graphiques.
* **Fichier modifié** : src/Controller/DashboardSiegeController.php
  * **Lignes exactes** : Lignes 17 (Signature) et Lignes 53 - 166 (Logique graphique)
  * **Description** : Injection de `ChartBuilderInterface` dans la méthode `index()`. Construction d'un graphique de type `BAR` comparant « Réel (Transactions) » vs « Budget Prévu » sur les 3 derniers mois. La logique calcule pour chaque mois : les revenus réels (somme des transactions RECETTE), l'objectif de revenu et la limite de dépenses (depuis `Budget_previsionnel`). Le budget prévu = Objectif Revenu − Limite Dépenses. Datasets configurés avec couleurs Cyan (`#00d4ff`) et Orange (`#ff9800`), axes personnalisés et légende en bas.
* **Fichier modifié** : templates/dashboard_siege/index.html.twig
  * **Lignes exactes** : Lignes 86 - 96 (Conteneur graphique)
  * **Description** : Intégration du graphique via `{{ render_chart(chart) }}` dans un onglet « Statistiques Globales » avec un conteneur de hauteur fixe (350px). Un second onglet « Radar de Performance » est prévu en placeholder.
* **Fichier modifié** : templates/dashboard_siege/index.html.twig
  * **Lignes exactes** : Lignes 109 - 157 (Script JavaScript)
  * **Description** : Chargement de Chart.js via CDN (`cdn.jsdelivr.net/npm/chart.js`). Script Vanilla JS qui extrait le JSON de l'attribut `data-symfony--ux-chartjs--chart-view-value` généré par `render_chart()` et initialise le graphique directement — contournement nécessaire car le projet n'utilise pas AssetMapper/Stimulus. Gestion visuelle des onglets (couleur cyan active `#00e5ff` avec soulignement).

---

## Tâche 10 : [Bundle] Bundle Faible n°2 – Génération de QR Code (Signature Numérique)
**Date** : 13/04/2026

* **Installation Requise** : `composer require endroid/qr-code-bundle`
* **Fichier modifié** : src/Controller/BilanController.php
  * **Lignes exactes** : Lignes 217 - 239
  * **Description** : Injection de `\Endroid\QrCode\Builder\BuilderInterface` dans l'action `exportPdf()`. Génération d'une entité QR Code contenant les données financières du bilan (ID, Franchise, Solde Net, Statut) en format chaîne de caractères. Personnalisation esthétique du QR Code aux couleurs de Boussole (cyan `#00d4ff` et fond bleu nuit `#1a1f2c`). Utilisation des paramètres nommés de PHP 8 (`size: 150`, `data: $qrData`, etc.) pour la méthode `build()` selon la nouvelle syntaxe Endroid (les appels chaînés style `->size()` n'étant plus valides). Conversion de l'image générée en Data URI (Base64) puis transmise à Twig via la variable `qr_code_uri`.
* **Fichier modifié** : templates/bilan/bilan_pdf.html.twig
  * **Lignes exactes** : Lignes 217 - 223
  * **Description** : Intégration de la balise HTML `<img>` lisant la variable `{{ qr_code_uri }}` avec un conteneur stylisé pour afficher la signature numérique (QR code) sous la zone de résultat financier du PDF.

---

## Tâche 11 : [Bundle] Bundle Faible n°3 – Flash Bundle (Notifications & UX)
**Date** : 14/04/2026

* **Installation Requise** : `composer require php-flasher/flasher-sweetalert-symfony`
* **Fichier créé** : `config/packages/flasher.yaml`
  * **Description** : Création du fichier de configuration du bundle PHP Flasher. Définition de `default: sweetalert` pour forcer l'utilisation de l'adaptateur SweetAlert2 au lieu du renderer basique. Configuration du `flash_bag` mapping (success, error, warning, info).
* **Fichiers modifiés (Templates base)** : `templates/back_base.html.twig`, `templates/front_base.html.twig`
  * **Description** : Suppression des anciennes boucles Twig `{% for label, messages in app.flashes %}` (alertes Bootstrap vertes). Ajout de `{{ flasher_render() }}` avant `</body>` pour injecter automatiquement les pop-ups SweetAlert2 du bundle PHP Flasher.
* **Fichiers modifiés (Contrôleurs)** : `BudgetController`, `AjouterChargeController`, `TransactionController`, `ReclamationController`, `AlerteIAController`, `AjouterFournisseurController`, `AdminReclamationController`, `AfficherFrontChargeController`, `AfficherFrontFournisseurController`
  * **Description** : Remplacement de `$this->addFlash('success', ...)` par `sweetalert()->success('Message', 'Titre')` pour les actions classiques avec redirection (ajout, suppression via formulaire).
* **Pages où la notification SweetAlert2 fonctionne (Back-Office)** :
  * Gestion des Budgets (`budget/budget.html.twig`) — ajout, suppression AJAX, édition inline
  * Reporting Financier / Bilan (`bilan/bilan.html.twig`) — suppression, suppression multiple
  * Gestion des Charges (`afficher_back_charge/index.html.twig`) — suppression AJAX, édition inline
  * Gestion des Fournisseurs (`afficher_back_fournisseur/index.html.twig`) — suppression AJAX, édition inline
* **Pages où la notification SweetAlert2 fonctionne (Front-Office)** :
  * Dashboard Entreprise (`franchise/dashboard.html.twig`) — ajout de transaction, édition inline, suppression
  * Historique des Transactions (`franchise/historique.html.twig`) — édition inline, suppression
* **Remarque** : Les pages qui utilisent des opérations AJAX (`fetch()` + `JsonResponse`) embarquent la librairie SweetAlert2 via CDN et appellent `Swal.mixin()` directement en JavaScript. Les redirections HTTP classiques bénéficient de la boucle native Twig SweetAlert injectée dans les templates de base.

---

## Tâche 12 : [API] API 1 - Envoi d'Emails avec Graphique Statique (Mailing Automatisé)
**Date** : 14/04/2026
* **Installation Requise** : `composer require symfony/mailer symfony/google-mailer`
* **Fichier modifié** : `.env`
  * **Lignes exactes** : 46
  * **Description** : Modification de la variable `MAILER_DSN` pour intégrer le protocole officiel de Google Mailer (`gmail://`). Le DSN a été paramétré avec l'email et le mot de passe d'application de l'utilisateur (`gmail://siwar.raouafi1:mon_mot_de_passe_app@default`) pour outrepasser les règles de blocage SMTP standards de Google.
* **Fichier créé** : `templates/email/bilan_mensuel.html.twig`
  * **Lignes exactes** : Fichier complet
  * **Description** : Création du template Twig HTML de l'email contenant le logo boussole, les statistiques de résultat, et l'intégration asynchrone dynamique de l'API externe QuickChart.io. L'URL construite en concaténant les données financières génère un "Pie Chart" statique directement encapsulé dans la balise `<img>` de l'e-mail.
* **Fichier modifié** : `src/Controller/BilanController.php`
  * **Lignes exactes** : 273 - 336
  * **Description** : Ajout de l'action `sendEmail` (route `app_bilan_email`). Cette fonction récupère les données de Bilan, ré-exécute le générateur DomPDF + Endroid QrCode, injecte un objet `TemplatedEmail` configuré avec le template Twig et les variables (recettes, charges). Le PDF est joint via la méthode `$email->attach($pdfOutput, ...)` en mode binaire avant de déclencher l'envoi au franchisé.
* **Fichier modifié** : `templates/bilan/bilan.html.twig`
  * **Lignes exactes** : 409 - 422
  * **Description** : Écouteur de clic JavaScript sur le bouton "Envoyer par Email" (`.btn-email`). Action de redirection dynamique vers l'endpoint `/admin/bilan/email/${selectedRowId}` avec protection empêchant le déclenchement en l'absence de `selectedRowId`.

---

## Tâche 13 : [API] API 2 – Taux de Change en Temps Réel (Finance Internationale)
**Date** : 15/04/2026

* **Installation Requise** : `composer require symfony/http-client`
* **Fichier modifié** : `.env`
  * **Lignes exactes** : Lignes 54 - 56
  * **Description** : Ajout de la variable d'environnement `EXCHANGE_RATE_API_KEY=YOUR_API_KEY_HERE` dans un bloc dédié `###> exchangerate-api ###`. Cette clé est obtenue gratuitement sur https://www.exchangerate-api.com/ et permet l'authentification auprès de l'API de taux de change.
* **Fichier créé** : `src/Service/CurrencyConverterService.php`
  * **Lignes exactes** : Fichier complet (1 - 73)
  * **Description** : Création du service métier de conversion de devises. Injection de `HttpClientInterface` dans le constructeur. Méthode `convertirDepuisTND(float $montantTND)` qui effectue une requête HTTP GET vers `https://v6.exchangerate-api.com/v6/{API_KEY}/latest/TND`, décode la réponse JSON, extrait les taux EUR et USD simultanément, et retourne un tableau `['EUR' => ['montant', 'taux'], 'USD' => ['montant', 'taux']]`. Retourne `null` en cas d'erreur.
* **Fichier modifié** : `config/services.yaml`
  * **Lignes exactes** : Lignes 25 - 27
  * **Description** : Déclaration explicite du service `App\Service\CurrencyConverterService` avec injection de l'argument `$exchangeRateApiKey` lié à la variable d'environnement `%env(EXCHANGE_RATE_API_KEY)%`.
* **Fichier modifié** : `src/Controller/TransactionController.php`
  * **Lignes exactes** : Lignes 14 (Import), 26 (Signature), 84 - 85 (Appel service), 93 (Variable Twig)
  * **Description** : Import et injection de `CurrencyConverterService` dans la méthode `index()` du Dashboard Franchise. Appel à `$currencyConverter->convertirDepuisTND($solde)` pour récupérer les équivalents EUR et USD. Passage de la variable `conversion` à la vue Twig.
* **Fichier modifié** : `src/Controller/DashboardSiegeController.php`
  * **Lignes exactes** : Lignes 7 (Import), 18 (Signature), 168 - 169 (Appel service), 176 (Variable Twig)
  * **Description** : Import et injection de `CurrencyConverterService` dans la méthode `index()` du Dashboard Siège. Même logique de conversion TND → EUR + USD appliquée au solde total du réseau.
* **Fichier modifié** : `templates/franchise/dashboard.html.twig`
  * **Lignes exactes** : Lignes 28 - 46
  * **Description** : Dans la carte "SOLDE DISPONIBLE", affichage conditionnel sous le montant TND : icône `bi-currency-exchange` (jaune) + « soit ≈ X XXX,XX € » en cyan, et icône `bi-currency-dollar` (vert) + « soit ≈ X XXX,XX $ » en vert. Tooltip sur chaque ligne affichant le taux du jour. Fallback « Conversion EUR/USD indisponible » si l'API échoue.
* **Fichier modifié** : `templates/dashboard_siege/index.html.twig`
  * **Lignes exactes** : Lignes 25 - 44
  * **Description** : Dans la carte "SOLDE TOTAL" du Dashboard Siège, même affichage conditionnel EUR + USD que sur le Dashboard Franchise. Style adapté au thème clair du back-office (texte `#6c757d`).

## Tâche 14 : [IA] Algorithme K-Means (Clustering Financier)
**Date** : 15/04/2026
* **Fichier modifié** : `composer.json`
  * **Lignes exactes** : N/A (ajouté via terminal)
  * **Description** : Installation de la librairie d'Intelligence Artificielle `php-ai/php-ml` pour le clustering K-Means.
* **Fichier modifié** : `src/Repository/TransactionRepository.php`
  * **Lignes exactes** : Lignes 80 - 110
  * **Description** : Ajout de la méthode `getFinancialDataForClustering()` qui agrège et retourne le total des recettes et le total des dépenses par franchise pour l'analyse IA.
* **Fichier créé** : `src/Service/AiClusteringService.php`
  * **Lignes exactes** : Complet (Lignes 1 - 90)
  * **Description** : Création du service IA. Prends les données financières, exécute l'algorithme K-Means paramétré sur 3 clusters, analyse les centroids, et labellise intelligemment les clusters en "Performants", "Équilibrés", et "À risque" selon le bénéfice moyen de chaque cluster. Formatage des données en DataSet pour ChartJS.
* **Fichier modifié** : `src/Controller/DashboardSiegeController.php`
  * **Lignes exactes** : Lignes 8, 17, 170 - 220
  * **Description** : Import et utilisation du `AiClusteringService`. Récupération des données depuis le repository, génération du clustering complet, et création dynamique d'un `Chart::TYPE_SCATTER` (Nuage de points) envoyé par la suite à la vue Twig sous la variable `scatterChart`.
* **Fichier modifié** : `src/Service/AiClusteringService.php`
  * **Lignes exactes** : Lignes 100 - 105
  * **Description** : Ajout de la taille des bulles (`pointRadius: 6` et `pointHoverRadius: 8`) pour le Scatter Chart afin d'améliorer la visibilité des données.
* **Fichier modifié** : `templates/dashboard_siege/index.html.twig`
  * **Lignes exactes** : Lignes 153 - 183
  * **Description** : Ajout d'un script Javascript interceptant l'événement `chartjs:pre-connect` de Symfony UX pour personnaliser avec du style et des données dynamiques les tooltips (infobulles) du nuage de points (Affichage du nom de la franchise, ses recettes et ses dépenses au survol).

## Tâche 15 : [Métier Avancé] Recherche et Tri Multicritères avec AJAX (Historique Transactions)
**Date** : 15/04/2026
* **Fichier créé** : `templates/franchise/_transactions_list.html.twig`
  * **Lignes exactes** : Lignes 1 - 88
  * **Description** : Création du template partiel contenant les 4 KPIs (Nombre, Recettes, Charges, Solde) et le tableau des transactions. Ce fichier est renvoyé en tant que fragment HTML par le contrôleur lors des requêtes AJAX, évitant tout rechargement complet de page.
* **Fichier modifié** : `src/Controller/TransactionController.php`
  * **Lignes exactes** : Lignes 170 - 192
  * **Description** : Ajout de la détection AJAX (`X-Requested-With: XMLHttpRequest`). Si la requête est AJAX, seul le partiel `_transactions_list.html.twig` est renvoyé via `renderView()` au lieu de la page complète.
* **Fichier modifié** : `templates/franchise/historique.html.twig`
  * **Lignes exactes** : Lignes 79 - 84 (Partiel), 167 - 460 (JavaScript)
  * **Description** : Remplacement du tableau inline et des KPIs par un `<div id="transactions-container">` incluant le partiel. Réécriture complète du JavaScript : remplacement de tous les `form.submit()` par des appels `fetch()` avec `URLSearchParams`. Ajout d'un système de debounce (300ms) sur la recherche textuelle. Les en-têtes de colonnes déclenchent le tri via AJAX. Les fonctions `bindSortHeaders()`, `bindEditableCells()` et `bindDeleteIcons()` sont ré-attachées dynamiquement après chaque rechargement du contenu.

### Localisation du code de Recherche (Recherche Multicritères AJAX)

| Couche | Fichier | Lignes | Rôle |
|--------|---------|--------|------|
| **Repository** | `src/Repository/TransactionRepository.php` | L30-L33 | Clause `LIKE` sur `description` et `montant` via QueryBuilder |
| **Contrôleur** | `src/Controller/TransactionController.php` | L130 | Récupération du paramètre GET `search` via `$request->query->get('search')` |
| **Contrôleur** | `src/Controller/TransactionController.php` | L183-L188 | Détection AJAX (`X-Requested-With`) et renvoi du partiel `_transactions_list.html.twig` |
| **Vue HTML** | `templates/franchise/historique.html.twig` | L65-L68 | Champ `<input type="text" name="search">` avec icône loupe |
| **Vue Partiel** | `templates/franchise/_transactions_list.html.twig` | L1-L108 | Fragment HTML renvoyé (KPIs + Tableau) rechargé dynamiquement |
| **JS Fetch** | `templates/franchise/historique.html.twig` | L176 | Lecture de la valeur : `document.querySelector('input[name="search"]')` |
| **JS Fetch** | `templates/franchise/historique.html.twig` | L180-L185 | Construction des `URLSearchParams` et appel `fetch()` avec header `X-Requested-With` |
| **JS Fetch** | `templates/franchise/historique.html.twig` | L220-L225 | `EventListener('input')` avec `debounce(updateTable, 300)` pour recherche instantanée |

### Localisation Complète de l'Interactivité 100% AJAX (UX/UI Avancée)

| Fonctionnalité | Fichier | Lignes | Mécanisme JavaScript & Backend |
|--------|---------|--------|------|
| **Recherche Multicritères & Debounce** | `templates/franchise/historique.html.twig` | L216-L235 | `addEventListener('input')` avec Timeout de 300ms pour éviter de spammer le serveur + `updateTable()` (Fetch AJAX). |
| **Tri Dynamique** | `templates/franchise/historique.html.twig` | L319-L335 | Fonction `bindSortHeaders()`. Modifie `currentSort` et relance la vue partielle. |
| **Édition sur place (Inline)** | `templates/franchise/historique.html.twig` | L355-L414 | Fonction `bindEditableCells()`. Remplacement dynamique par `<input>` au double-clic, écoute de la touche 'Entrée', payload POST via fetch sur la route `/transaction/{id}/edit`. |
| **Actions en masse / Suppression** | `templates/franchise/historique.html.twig` | L416-L450 | Liaisons `bindDeleteIcons()` et modal Bootstrap. Envoi d'une requête DELETE invisible et relance instantanée du `updateTable()`. |
| **Contrôleur (Réponses AJAX)** | `src/Controller/TransactionController.php` | L170-L240 | Traitement des appels asynchrones : renvoi soit de JSON (`['success' => true]`), soit du fichier fragmentaire `_transactions_list` si la requête contient `XMLHttpRequest`. |

## Tâche 16 : [Métier Avancé] Consolidation Financière & Clôture Mensuelle
**Date** : 16/04/2026
* **Fichier modifié** : `src/Entity/Transaction.php`
  * **Lignes exactes** : Lignes 47 - 48, 106 - 120
  * **Description** : Ajout du champ booléen `est_cloture` (par défaut `false`) avec ses getters et setters pour gérer l'état d'archivage d'une transaction.
* **Fichier modifié** : `src/Controller/TransactionController.php`
  * **Lignes exactes** : Lignes 212 - 214, 289 - 291
  * **Description** : Ajout d'une vérification de sécurité dans les méthodes `edit` et `delete` du CRUD : si `isEstCloture()` est vrai, l'opération est refusée avec une erreur 403 (Transaction archivée).
* **Fichier créé** : `src/Service/ClotureFinanciereService.php`
  * **Lignes exactes** : Lignes 1 - 66
  * **Description** : Création du service d'algorithme contenant `cloturerMois()`. Cette méthode compile les transactions non clôturées, additionne les recettes/dépenses, calcule le résultat net, instancie une nouvelle entité `Bilan`, passe les transactions à `est_cloture = true`, et execute un unique `flush` transactionnel.
* **Fichier modifié** : `src/Repository/TransactionRepository.php`
  * **Lignes exactes** : Lignes 107 - 125
  * **Description** : Ajout de la méthode `findTransactionsNonClotureesPourMois()` pour le QueryBuilder afin d'alimenter le service d'algorithme.
* **Fichier modifié** : `src/Controller/BilanController.php`
  * **Lignes exactes** : Lignes 341 - 369
  * **Description** : Création de la route `/admin/bilan/cloturer` (`app_cloturer_mois`) déclenchant le service via un appel POST avec redirection et message Flash de validation.
* **Fichier modifié** : `src/Controller/BilanController.php`
  * **Lignes exactes** : Lignes 44 - 57 (méthode `editAjax`)
  * **Description** : Ajout d'un verrou de clôture automatique dans l'édition inline des bilans. Avant toute modification, le système compare le mois et l'année du bilan avec la date actuelle (`DateTime`). Si le bilan appartient à un mois **déjà écoulé** (ex: Mars alors qu'on est en Avril), le serveur refuse la modification avec une **erreur HTTP 403** et le message : *"Interdit : Ce bilan est clôturé (mois passé). Les données financières archivées ne peuvent plus être modifiées."*. Seuls les bilans du mois en cours restent modifiables.

---

## Tâche 17 : [Bundle] Bundle Consistant – Export Excel Personnalisé de l'Historique
**Date** : 16/04/2026
* **Installation Requise** : `composer require phpoffice/phpspreadsheet`
* **Fichier modifié** : `src/Controller/TransactionController.php`
  * **Description** : Ajout de l'action `exportExcel()` sur la route `#[Route('/historique/export', name: 'app_export_excel')]`. Cette fonction s'appuie sur la même logique de filtrage multicritères que l'attribut AJAX (paramètres récupérés de l'URL) pour n'avoir à exporter **que ce que l'utilisateur voit à l'écran**.
  * **Implémentation Excel** : Initialisation d'une instance `\PhpOffice\PhpSpreadsheet\Spreadsheet()`. Dessin des en-têtes avec personnalisation du font (Gras, Titre fusionné), création d'un fond gris-charbon sur la ligne 3 pour les colonnes.
  * **Traitement Dynamique** : Itération sur le tableau des transactions filtrées. Gestion intelligente des couleurs : si type `'DEPENSE'`, l'API colore le texte de la cellule Montant de la ligne D en rouge. Sinon, en vert. Calcul du vrai Solde et affichage d'une ligne de résumé final « SOLDE TOTAL » en bas de la feuille.
  * **Response** : Instanciation de `StreamedResponse` injectant le format de base `Xlsx` dans le buffer I/O natif via `php://output`, déclenchant un téléchargement instantané du fichier _historique_transactions.xlsx_ pour l'utilisateur.
* **Fichier modifié** : `templates/franchise/historique.html.twig`
  * **Description** : Transformation du bouton statique "Exporter..." en lien dynamique de téléchargement avec une icône de tableau (`bi-file-earmark-excel`). Ajout d'une mise à jour asynchrone dans le script JS : lors du déclenchement des filtres JavaScript, le paramètre `href` de ce bouton `a#btn-export-excel` se synchronise avec les paramètres URL de manière réactive.

---

## Tâche 18 : [Métier Avancé] Notification Préventive de "Rupture de Budget" (Événements Symfony)
**Date** : 16/04/2026
* **Installation Requise** : Aucune (utilisation des Événements natifs de Symfony / Doctrine).
* **Fichier créé** : `src/EventSubscriber/BudgetAlertSubscriber.php`
  * **Lignes exactes** : Fichier complet (1 - 130)
  * **Description** : Création d'un Listener Doctrine déclaré avec l'attribut `#[AsDoctrineListener(event: Events::postPersist)]`. Ce subscriber est automatiquement invoqué par Symfony après chaque insertion d'entité en base de données, sans aucun appel explicite dans les contrôleurs.
  * **Algorithme Mathématique** :
    1. L'événement `postPersist` se déclenche → vérifie si l'entité est une `Transaction` de type `'DEPENSE'`.
    2. Calcule via QueryBuilder `SUM(t.montant)` de toutes les dépenses du mois en cours pour la franchise concernée.
    3. Récupère l'entité `Budget_previsionnel` correspondante (type `'LIMITE_DEPENSE'`, même mois, même franchise).
    4. Applique la formule : `pourcentage = (totalDepenses / limiteBudget) * 100`.
    5. Si `pourcentage >= 90%` → Injecte un message Flash `warning` via `RequestStack` : *"⚠️ Attention : Vous avez consommé X% de votre budget autorisé ce mois"*.
    6. Si `pourcentage >= 100%` → Injecte un message Flash `error` : *"🚨 DÉPASSEMENT DE BUDGET !"*.
  * **Mécanisme de notification** : Utilise `$request->getSession()->getFlashBag()->add()` pour stocker le message dans la session. Ce message est ensuite rendu automatiquement par le bundle PHP Flasher (SweetAlert2) déjà intégré via `{{ flasher_render() }}` dans les templates de base.

---

## Tâche 19 : [Métier Avancé] Algorithme d'Évaluation (Rating) Financier
**Date** : 16/04/2026
* **Installation Requise** : Aucune (Logique PHP pure, Mathématique et Service).
* **Fichier créé** : `src/Service/FinancialRatingService.php`
  * **Description** : Création du service métier de notation selon les règles métier exigées par la direction financière. La méthode `evaluateFranchise` récupère toutes les transactions du mois pour une franchise, calcule son résultat net, et le compare aux différents budgets alloués.
  * **Traitement Mathématique** :
    1. Score initial = 0
    2. Règle 1 : `(Recettes - Dépenses) > 0` ➔ +40 points
    3. Règle 2 : `Recettes >= Objectif Revenu` ➔ +30 points
    4. Règle 3 : `Dépenses <= Limite Dépense` ➔ +30 points
  * **Attribution logique** : Retourne strictement `A` (100%), `B` (>=70%), `C` (>=40%), ou `D` (<40%).
* **Fichier modifié** : `src/Controller/DashboardSiegeController.php`
  * **Lignes exactes** : Signature `index()` modifiée.
  * **Description** : Injection de dépendance de `FinancialRatingService`. Boucle sur toutes les entreprises pour récupérer leur chiffre d'affaires et leur assigner une note financière en temps réel calculée sur le comportement du mois en cours. Création du tableau `$franchisesToRank` transmis à Twig.
* **Fichier modifié** : `templates/dashboard_siege/index.html.twig`
  * **Description** : Création d'un tout nouvel onglet ("Classement Financier") qui vient s'ajouter aux statistiques globales. Développement d'un tableau d'analyse "Top/Flop", trié par Résultat Net, affichant les recettes, dépenses et intégrant la fameuse colonne **"Rating"**. Affichage des badges visuels aux couleurs strictes (Vert pour A, Jaune pour B, Orange pour C, Rouge pour D), centralisant l'expérience pour le Directeur Financier au sein de *son* module.

---

## Tâche 20 : [API / Métier Avancé] Intégration de Telegram Bot (Alerte Mobile de Budget)
**Date** : 17/04/2026
* **Installation Requise** : `composer require symfony/http-client`
* **Configuration (.env & services.yaml)** : Ajout des variables d'environnement `TELEGRAM_BOT_TOKEN` et `TELEGRAM_CHAT_ID`. Configuration de l'autowiring dans `config/services.yaml` pour injecter ces variables secrètes dans le constructeur du service Telegram.
* **Fichier créé** : `src/Service/TelegramService.php`
  * **Description** : Création d'un Service dédié encapsulant le HttpClient de Symfony. La méthode `envoyerAlerteBudget($message)` gère l'envoi d'un message d'alerte rouge sur le téléphone du gérant via l'API Telegram, avec formatage HTML pour mettre en gras les chiffres critiques (Solde). Sécurisation avec un Logger en cas d'indisponibilité réseau ou de token manquant.
* **Fichier modifié** : `src/Controller/TransactionController.php`
  * **Lignes exactes** : Autour des lignes 55-85 (après la validation du formulaire de transaction).
  * **Description** : Immédiatement après l'ajout en base d'une nouvelle transaction, recalcule dynamiquement le solde réel de la franchise et la somme mensuelle de ses dépenses. Si le nouveau solde est en découvert (`< 0`) OU si la `Limite_Dépense` est dépassée, le script déclenche automatiquement le `TelegramService` vers le mobile et génère une alerte Flash *SweetAlert*.
