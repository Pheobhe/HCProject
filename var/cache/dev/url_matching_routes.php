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
        '/medicamento' => [[['_route' => 'app_medicamento_index', '_controller' => 'App\\Controller\\MedicamentoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/medicamento/new' => [[['_route' => 'app_medicamento_new', '_controller' => 'App\\Controller\\MedicamentoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/medico' => [[['_route' => 'app_medico_index', '_controller' => 'App\\Controller\\MedicoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/medico/new' => [[['_route' => 'app_medico_new', '_controller' => 'App\\Controller\\MedicoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/paciente' => [[['_route' => 'app_paciente_index', '_controller' => 'App\\Controller\\PacienteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/paciente/new' => [[['_route' => 'app_paciente_new', '_controller' => 'App\\Controller\\PacienteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/medic(?'
                    .'|amento/([^/]++)(?'
                        .'|(*:196)'
                        .'|/edit(*:209)'
                        .'|(*:217)'
                    .')'
                    .'|o/([^/]++)(?'
                        .'|(*:239)'
                        .'|/edit(*:252)'
                        .'|(*:260)'
                    .')'
                .')'
                .'|/paciente/([^/]++)(?'
                    .'|(*:291)'
                    .'|/edit(*:304)'
                    .'|(*:312)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        196 => [[['_route' => 'app_medicamento_show', '_controller' => 'App\\Controller\\MedicamentoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        209 => [[['_route' => 'app_medicamento_edit', '_controller' => 'App\\Controller\\MedicamentoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        217 => [[['_route' => 'app_medicamento_delete', '_controller' => 'App\\Controller\\MedicamentoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        239 => [[['_route' => 'app_medico_show', '_controller' => 'App\\Controller\\MedicoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        252 => [[['_route' => 'app_medico_edit', '_controller' => 'App\\Controller\\MedicoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        260 => [[['_route' => 'app_medico_delete', '_controller' => 'App\\Controller\\MedicoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        291 => [[['_route' => 'app_paciente_show', '_controller' => 'App\\Controller\\PacienteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        304 => [[['_route' => 'app_paciente_edit', '_controller' => 'App\\Controller\\PacienteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        312 => [
            [['_route' => 'app_paciente_delete', '_controller' => 'App\\Controller\\PacienteController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
