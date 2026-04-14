# Suivi des Modifications du Projet Boussole

Ce fichier répertorie toutes les modifications apportées au code source, organisées par tâches.

---

## Tâche 1 : Ajout de la fonctionnalité d'export PDF pour les bilans
**Date** : 13 Avril 2026

* **Fichier créé** : 	emplates/bilan/bilan_pdf.html.twig
  * **Lignes exactes** : Lignes 1 - 82
  * **Description** : Création du template de base "Papier A4" pour l'exportation PDF.
* **Fichier modifié** : src/Controller/BilanController.php
  * **Lignes exactes** : Lignes 11-12 (Imports) et 165-190 (Méthode exportPdf)
  * **Description** : Ajout de l'action exportPdf et de la route #[Route('/pdf/{id}', name: 'export_pdf')] pour générer et télécharger le PDF via Dompdf.

---

## Tâche 2 : Sélection multiple et suppression de bilans
**Date** : 13 Avril 2026

* **Fichier modifié** : 	emplates/bilan/bilan.html.twig
  * **Lignes exactes** : Lignes 70-75 (Checkboxes) et 250-290 (Script JS)
  * **Description** : Ajout d'une colonne de Checkboxes dans le tableau HTML. Ajout d'un bouton rouge "Supprimer la sélection" et d'un script JavaScript gérant la sélection multiple et l'appel AJAX de suppression.
* **Fichier modifié** : src/Controller/BilanController.php
  * **Lignes exactes** : Lignes 85-105
  * **Description** : Ajout de la méthode deleteBatchAjax avec la route #[Route('/delete-batch-ajax')] pour supprimer plusieurs bilans en une seule action (Boucle de emove() + lush()).

---

## Tâche 3 : Correction de la liaison du bouton PDF et des bugs d'export
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

## Tâche 4 : Personnalisation visuelle du PDF (Thème Boussole)
**Date** : 13 Avril 2026

* **Fichier modifié** : 	emplates/bilan/bilan_pdf.html.twig
  * **Lignes exactes** : Lignes 1 - 150 (Refonte intégrale)
  * **Description** : Refonte HTML/CSS complète. Ajout des couleurs officielles (Bleu Nuit #0b0f19, Cyan #00d4ff), des blocs d'informations restructurés et coloration automatique du résultat net.

---

## Tâche 5 : Implémentation du Graphique Interactif (Chart.js via Symfony UX)
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

## Tâche 6 : Correction de l'Affichage de Chart.js sans AssetMapper
**Date** : 13 Avril 2026

* **Fichier modifié** : 	emplates/dashboard_siege/index.html.twig
  * **Lignes exactes** : Lignes 85 - 105
  * **Description** : Le bundle symfony/ux-chartjs nécessite AssetMapper (Stimulus) par défaut pour s'auto-initialiser. Puisque le code base HTML n'intègre pas ce gestionnaire moderne, j'ai implémenté un extracteur JavaScript "Vanilla" dans le bloc javascripts. Ce script lit à la volée le JSON contenu dans l'attribut data-view généré par {{ render_chart(chart) }} et le lie directement à la librairie CDN de Chart.js.
    * **Lignes exactes** : Lignes modifiées dans 	emplates/dashboard_siege/index.html.twig pour corriger l'attribut data-* cible de Chart.js sans Webpack

* **Fichier** : src/Controller/DashboardSiegeController.php
    * **Action** : Refonte de la logique du graphique interactif ()
    * **Raison** : Le graphique ignorait les budgets de type LIMITE_DEPENSE. Ajout de datasets sÃ©parÃ©s : Revenus RÃ©els, Budget Revenus, DÃ©penses RÃ©elles et Limite DÃ©penses de maniÃ¨re rÃ©troactive sur 3 mois.

---

## Tâche 7 : Personnalisation PDF et application dynamique des couleurs
**Date** : 13/04/2026
* **Fichier modifié** : templates/bilan/bilan_pdf.html.twig
  * **Lignes exactes** : Lignes 1 - 213 (Refonte complète)
  * **Description** : Refonte intégrale en HTML/CSS du design du modèle PDF pour correspondre à 100% à la maquette graphique fournie (en-tête bleu nuit, encart d'infos formaté). Pour pallier aux limites du parseur CSS de l'outil de génération DOMPDF, intégration de balises `style="..."` inline pour attribuer de manière robuste et dynamique et inconditionnelle les couleurs vert `#10ac84` pour les rentrées d'argent, strictes rouge `#ff4757` pour les dépenses selon les contraintes demandées.

---

## Tâche 8 : Correction de la synchronisation Charge → Transaction (Dashboard & Historique)
**Date** : 13/04/2026

* **Fichier modifié** : src/Controller/AjouterChargeController.php
  * **Lignes exactes** : Lignes 34 - 35
  * **Description** : Correction du type de transaction : le type est défini sur `'DEPENSE'` (au lieu d'une valeur incorrecte). La description est passée de `'Charge : ' . titre` à `'Charge ' . titre` pour supprimer le caractère `:` qui violait la contrainte Regex de l'entité Transaction (`/^[A-Za-zÀ-ÿ\s]+$/` — lettres et espaces uniquement).
* **Fichier modifié** : src/Controller/AjouterChargeController.php
  * **Lignes exactes** : Lignes 37 - 41
  * **Description** : Correction critique de l'association `franchise_id`. Avant : la transaction utilisait la franchise sélectionnée dans le formulaire de charge (ex: ID 6). Mais le Dashboard (`/transaction`) et l'Historique (`/transaction/historique`) filtrent par `findOneBy([])` (= franchise ID 1). Résultat : les transactions existaient en BDD mais n'apparaissaient jamais. Fix : la transaction utilise désormais toujours la même première franchise que le Dashboard/Historique via `findOneBy([])`.

---

## Tâche 9 : Bundle Faible n°1 – Graphiques Statistiques (Chart.js)
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

## Tâche 10 : Bundle Faible n°2 – Génération de QR Code (Signature Numérique)
**Date** : 13/04/2026

* **Installation Requise** : `composer require endroid/qr-code-bundle`
* **Fichier modifié** : src/Controller/BilanController.php
  * **Lignes exactes** : Lignes 217 - 239
  * **Description** : Injection de `\Endroid\QrCode\Builder\BuilderInterface` dans l'action `exportPdf()`. Génération d'une entité QR Code contenant les données financières du bilan (ID, Franchise, Solde Net, Statut) en format chaîne de caractères. Personnalisation esthétique du QR Code aux couleurs de Boussole (cyan `#00d4ff` et fond bleu nuit `#1a1f2c`). Utilisation des paramètres nommés de PHP 8 (`size: 150`, `data: $qrData`, etc.) pour la méthode `build()` selon la nouvelle syntaxe Endroid (les appels chaînés style `->size()` n'étant plus valides). Conversion de l'image générée en Data URI (Base64) puis transmise à Twig via la variable `qr_code_uri`.
* **Fichier modifié** : templates/bilan/bilan_pdf.html.twig
  * **Lignes exactes** : Lignes 217 - 223
  * **Description** : Intégration de la balise HTML `<img>` lisant la variable `{{ qr_code_uri }}` avec un conteneur stylisé pour afficher la signature numérique (QR code) sous la zone de résultat financier du PDF.

---

## Tâche 11 : Bundle Faible n°3 – Flash Bundle (Notifications & UX)
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

## Tâche 12 : API 1 - Envoi d'Emails avec Graphique Statique (Mailing Automatisé)
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
