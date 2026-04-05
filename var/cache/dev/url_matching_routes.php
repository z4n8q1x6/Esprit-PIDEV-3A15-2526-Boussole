<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/commandes' => [[['_route' => 'app_admin_commandes', '_controller' => 'App\\Controller\\AdminCommandeController::index'], null, null, null, true, false, null]],
        '/admin' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/marketplace' => [[['_route' => 'app_marketplace', '_controller' => 'App\\Controller\\MarketplaceController::index'], null, null, null, false, false, null]],
        '/mes-commandes' => [[['_route' => 'app_mes_commandes', '_controller' => 'App\\Controller\\MesCommandesController::index'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'app_panier', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, false, false, null]],
        '/panier/vider' => [[['_route' => 'app_panier_vider', '_controller' => 'App\\Controller\\PanierController::vider'], null, null, null, false, false, null]],
        '/panier/valider' => [[['_route' => 'app_panier_valider', '_controller' => 'App\\Controller\\PanierController::valider'], null, null, null, false, false, null]],
        '/admin/produits' => [[['_route' => 'app_produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/produits/new' => [[['_route' => 'app_produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                    .'|commandes/([^/]++)(?'
                        .'|/(?'
                            .'|valider(*:244)'
                            .'|refuser(*:259)'
                        .')'
                        .'|(*:268)'
                    .')'
                    .'|produits/([^/]++)(?'
                        .'|/edit(*:302)'
                        .'|(*:310)'
                    .')'
                .')'
                .'|/mes\\-commandes/([^/]++)(*:344)'
                .'|/panier/(?'
                    .'|ajouter/([^/]++)(*:379)'
                    .'|modifier(?'
                        .'|/([^/]++)/([^/]++)(*:416)'
                        .'|\\-ajax/([^/]++)/([^/]++)(*:448)'
                    .')'
                    .'|supprimer/([^/]++)(*:475)'
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
        244 => [[['_route' => 'app_admin_commande_valider', '_controller' => 'App\\Controller\\AdminCommandeController::valider'], ['id'], null, null, false, false, null]],
        259 => [[['_route' => 'app_admin_commande_refuser', '_controller' => 'App\\Controller\\AdminCommandeController::refuser'], ['id'], null, null, false, false, null]],
        268 => [[['_route' => 'app_admin_commande_detail', '_controller' => 'App\\Controller\\AdminCommandeController::detail'], ['id'], null, null, false, true, null]],
        302 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        310 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        344 => [[['_route' => 'app_mes_commandes_detail', '_controller' => 'App\\Controller\\MesCommandesController::detail'], ['id'], null, null, false, true, null]],
        379 => [[['_route' => 'app_panier_ajouter', '_controller' => 'App\\Controller\\PanierController::ajouter'], ['id'], null, null, false, true, null]],
        416 => [[['_route' => 'app_panier_modifier', '_controller' => 'App\\Controller\\PanierController::modifier'], ['id', 'quantite'], null, null, false, true, null]],
        448 => [[['_route' => 'app_panier_modifier_ajax', '_controller' => 'App\\Controller\\PanierController::modifierAjax'], ['id', 'quantite'], ['POST' => 0], null, false, true, null]],
        475 => [
            [['_route' => 'app_panier_supprimer', '_controller' => 'App\\Controller\\PanierController::supprimer'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
