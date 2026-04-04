<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/entreprise' => [[['_route' => 'app_admin_entreprise', '_controller' => 'App\\Controller\\AdminEntrepriseController::index'], null, null, null, false, false, null]],
        '/admin/reclamation' => [[['_route' => 'app_admin_reclamation', '_controller' => 'App\\Controller\\AdminReclamationController::index'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_admin_user', '_controller' => 'App\\Controller\\AdminUserController::index'], null, null, null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'app_admin_user_new', '_controller' => 'App\\Controller\\AdminUserController::new'], null, null, null, false, false, null]],
        '/reclamations' => [[['_route' => 'reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamations/new' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/forgot-password' => [[['_route' => 'app_forgot_password', '_controller' => 'App\\Controller\\SecurityController::forgotPassword'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/reclamations/([^/]++)/delete(*:71)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        71 => [
            [['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
