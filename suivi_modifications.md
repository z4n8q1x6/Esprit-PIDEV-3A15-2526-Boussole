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
