<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/reclamation' => [[['_route' => 'app_admin_reclamation', '_controller' => 'App\\Controller\\AdminReclamationController::index'], null, null, null, false, false, null]],
        '/afficher_back_charge' => [[['_route' => 'app_afficher_back_charge', '_controller' => 'App\\Controller\\AfficherBackChargeController::index'], null, null, null, false, false, null]],
        '/afficher_back_fournisseur' => [[['_route' => 'app_afficher_back_fournisseur', '_controller' => 'App\\Controller\\AfficherBackFournisseurController::index'], null, null, null, false, false, null]],
        '/afficher_front_charge' => [[['_route' => 'app_afficher_front_charge', '_controller' => 'App\\Controller\\AfficherFrontChargeController::index'], null, null, null, false, false, null]],
        '/afficher_front_fournisseur' => [[['_route' => 'app_afficher_front_fournisseur', '_controller' => 'App\\Controller\\AfficherFrontFournisseurController::index'], null, null, null, false, false, null]],
        '/ajouter_charge' => [[['_route' => 'app_ajouter_charge', '_controller' => 'App\\Controller\\AjouterChargeController::index'], null, null, null, false, false, null]],
        '/ajouter_fournisseur' => [[['_route' => 'app_ajouter_fournisseur', '_controller' => 'App\\Controller\\AjouterFournisseurController::index'], null, null, null, false, false, null]],
        '/reclamations' => [[['_route' => 'reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamations/new' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/afficher_back_(?'
                    .'|charge/(?'
                        .'|delete/([^/]++)(*:85)'
                        .'|edit/([^/]++)(*:105)'
                    .')'
                    .'|fournisseur/(?'
                        .'|edit/([^/]++)(*:142)'
                        .'|delete/([^/]++)(*:165)'
                    .')'
                .')'
                .'|/charge/delete/([^/]++)(*:198)'
                .'|/fournisseur/delete/([^/]++)(*:234)'
                .'|/modifier_(?'
                    .'|charge/([^/]++)(*:270)'
                    .'|fournisseur/([^/]++)(*:298)'
                .')'
                .'|/reclamations/([^/]++)/delete(*:336)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        85 => [[['_route' => 'app_afficher_back_charge_delete', '_controller' => 'App\\Controller\\AfficherBackChargeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        105 => [[['_route' => 'app_afficher_back_charge_edit', '_controller' => 'App\\Controller\\AfficherBackChargeController::inlineEdit'], ['id'], ['POST' => 0], null, false, true, null]],
        142 => [[['_route' => 'app_afficher_back_fournisseur_edit', '_controller' => 'App\\Controller\\AfficherBackFournisseurController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        165 => [[['_route' => 'app_afficher_back_fournisseur_delete', '_controller' => 'App\\Controller\\AfficherBackFournisseurController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        198 => [[['_route' => 'app_charge_delete', '_controller' => 'App\\Controller\\AfficherFrontChargeController::delete'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        234 => [[['_route' => 'app_fournisseur_delete', '_controller' => 'App\\Controller\\AfficherFrontFournisseurController::delete'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        270 => [[['_route' => 'app_modifier_charge', '_controller' => 'App\\Controller\\AjouterChargeController::modifier'], ['id'], null, null, false, true, null]],
        298 => [[['_route' => 'app_modifier_fournisseur', '_controller' => 'App\\Controller\\AjouterFournisseurController::modifier'], ['id'], null, null, false, true, null]],
        336 => [
            [['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
