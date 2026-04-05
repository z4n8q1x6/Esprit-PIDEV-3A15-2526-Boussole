<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/alertes' => [[['_route' => 'admin_alerte_index', '_controller' => 'App\\Controller\\AdminAlerteIAController::index'], null, null, null, false, false, null]],
        '/admin/pdf' => [[['_route' => 'admin_alerte_pdf', '_controller' => 'App\\Controller\\AdminAlerteIAController::pdf'], null, null, null, false, false, null]],
        '/admin/reclamations' => [[['_route' => 'admin_reclamation_index', '_controller' => 'App\\Controller\\AdminReclamationController::index'], null, null, null, false, false, null]],
        '/admin/afficher_back_charge' => [[['_route' => 'app_afficher_back_charge', '_controller' => 'App\\Controller\\AfficherBackChargeController::index'], null, null, null, false, false, null]],
        '/admin/afficher_back_fournisseur' => [[['_route' => 'app_afficher_back_fournisseur', '_controller' => 'App\\Controller\\AfficherBackFournisseurController::index'], null, null, null, false, false, null]],
        '/afficher_front_charge' => [[['_route' => 'app_afficher_front_charge', '_controller' => 'App\\Controller\\AfficherFrontChargeController::index'], null, null, null, false, false, null]],
        '/afficher_front_fournisseur' => [[['_route' => 'app_afficher_front_fournisseur', '_controller' => 'App\\Controller\\AfficherFrontFournisseurController::index'], null, null, null, false, false, null]],
        '/ajouter_charge' => [[['_route' => 'app_ajouter_charge', '_controller' => 'App\\Controller\\AjouterChargeController::index'], null, null, null, false, false, null]],
        '/ajouter_fournisseur' => [[['_route' => 'app_ajouter_fournisseur', '_controller' => 'App\\Controller\\AjouterFournisseurController::index'], null, null, null, false, false, null]],
        '/alertes' => [[['_route' => 'alerte_index', '_controller' => 'App\\Controller\\AlerteIAController::index'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'alerte_new', '_controller' => 'App\\Controller\\AlerteIAController::new'], null, null, null, false, false, null]],
        '/admin/bilan' => [[['_route' => 'app_bilan_index', '_controller' => 'App\\Controller\\BilanController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/bilan/generate-ajax' => [[['_route' => 'app_bilan_generate_ajax', '_controller' => 'App\\Controller\\BilanController::generateAjax'], null, ['POST' => 0], null, false, false, null]],
        '/admin/budget' => [[['_route' => 'app_budget_index', '_controller' => 'App\\Controller\\BudgetController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/admin/dashboard' => [[['_route' => 'app_siege_dashboard', '_controller' => 'App\\Controller\\DashboardSiegeController::index'], null, null, null, false, false, null]],
        '/reclamations' => [[['_route' => 'reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamations/new' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/transaction' => [[['_route' => 'app_transaction_index', '_controller' => 'App\\Controller\\TransactionController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/transaction/new' => [[['_route' => 'app_transaction_new', '_controller' => 'App\\Controller\\TransactionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/transaction/historique' => [[['_route' => 'app_transaction_historique', '_controller' => 'App\\Controller\\TransactionController::historique'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|([^/]++)/(?'
                        .'|delete(?'
                            .'|(*:233)'
                        .')'
                        .'|edit(*:246)'
                    .')'
                    .'|afficher_back_(?'
                        .'|charge/(?'
                            .'|delete/([^/]++)(*:297)'
                            .'|edit/([^/]++)(*:318)'
                        .')'
                        .'|fournisseur/(?'
                            .'|edit/([^/]++)(*:355)'
                            .'|delete/([^/]++)(*:378)'
                        .')'
                    .')'
                .')'
                .'|/charge/delete/([^/]++)(*:412)'
                .'|/fournisseur/delete/([^/]++)(*:448)'
                .'|/modifier_(?'
                    .'|charge/([^/]++)(*:484)'
                    .'|fournisseur/([^/]++)(*:512)'
                .')'
                .'|/([^/]++)/delete(*:537)'
                .'|/admin/b(?'
                    .'|ilan/([^/]++)/(?'
                        .'|edit\\-ajax(*:583)'
                        .'|delete\\-ajax(*:603)'
                    .')'
                    .'|udget/([^/]++)/(?'
                        .'|edit\\-ajax(*:640)'
                        .'|delete\\-ajax(*:660)'
                    .')'
                .')'
                .'|/reclamations/([^/]++)/delete(*:699)'
                .'|/transaction/([^/]++)(?'
                    .'|(*:731)'
                    .'|/edit(*:744)'
                    .'|(*:752)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        233 => [
            [['_route' => 'admin_alerte_delete', '_controller' => 'App\\Controller\\AdminAlerteIAController::delete'], ['id'], null, null, false, false, null],
            [['_route' => 'admin_reclamation_delete', '_controller' => 'App\\Controller\\AdminReclamationController::delete'], ['id'], ['POST' => 0], null, false, false, null],
        ],
        246 => [[['_route' => 'admin_reclamation_edit', '_controller' => 'App\\Controller\\AdminReclamationController::edit'], ['id'], ['POST' => 0], null, false, false, null]],
        297 => [[['_route' => 'app_afficher_back_charge_delete', '_controller' => 'App\\Controller\\AfficherBackChargeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        318 => [[['_route' => 'app_afficher_back_charge_edit', '_controller' => 'App\\Controller\\AfficherBackChargeController::inlineEdit'], ['id'], ['POST' => 0], null, false, true, null]],
        355 => [[['_route' => 'app_afficher_back_fournisseur_edit', '_controller' => 'App\\Controller\\AfficherBackFournisseurController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        378 => [[['_route' => 'app_afficher_back_fournisseur_delete', '_controller' => 'App\\Controller\\AfficherBackFournisseurController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        412 => [[['_route' => 'app_charge_delete', '_controller' => 'App\\Controller\\AfficherFrontChargeController::delete'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        448 => [[['_route' => 'app_fournisseur_delete', '_controller' => 'App\\Controller\\AfficherFrontFournisseurController::delete'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        484 => [[['_route' => 'app_modifier_charge', '_controller' => 'App\\Controller\\AjouterChargeController::modifier'], ['id'], null, null, false, true, null]],
        512 => [[['_route' => 'app_modifier_fournisseur', '_controller' => 'App\\Controller\\AjouterFournisseurController::modifier'], ['id'], null, null, false, true, null]],
        537 => [[['_route' => 'alerte_delete', '_controller' => 'App\\Controller\\AlerteIAController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        583 => [[['_route' => 'app_bilan_edit_ajax', '_controller' => 'App\\Controller\\BilanController::editAjax'], ['id'], ['POST' => 0], null, false, false, null]],
        603 => [[['_route' => 'app_bilan_delete_ajax', '_controller' => 'App\\Controller\\BilanController::deleteAjax'], ['id'], ['POST' => 0], null, false, false, null]],
        640 => [[['_route' => 'app_budget_edit_ajax', '_controller' => 'App\\Controller\\BudgetController::editAjax'], ['id'], ['POST' => 0], null, false, false, null]],
        660 => [[['_route' => 'app_budget_delete_ajax', '_controller' => 'App\\Controller\\BudgetController::deleteAjax'], ['id'], ['POST' => 0], null, false, false, null]],
        699 => [[['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        731 => [[['_route' => 'app_transaction_show', '_controller' => 'App\\Controller\\TransactionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        744 => [[['_route' => 'app_transaction_edit', '_controller' => 'App\\Controller\\TransactionController::edit'], ['id'], ['POST' => 0], null, false, false, null]],
        752 => [
            [['_route' => 'app_transaction_delete', '_controller' => 'App\\Controller\\TransactionController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
