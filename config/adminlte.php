<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => '',
    'title_prefix' => 'Arapa Telecomunicaciones ',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => true,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>Arapa<br/> &nbspTelecomunicaciones</b>',
    // 'logo' => '<b>Arapa</n> &nbsp &nbsp &nbsp &nbspTelecomunicaciones</b>',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-1',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'AdminLTE',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => true,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => 'd-none',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-light-primary bg-gradient elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'admin/dashboard',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'searcha',
            'topnav_right' => false,
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        ['header' => ' '],
        ['header' => ' '],

        // ['header' => 'GESTIONAR RECURSOS'],
        // [
        //     'text' => 'Usuarios',
        //     'route'  => 'admin.usuarios',
        //     'icon' => 'fas fa-user',
        // ],
        [
            'text' => 'Usuarios',
            'route'  => 'admin.usuarios',
            'icon' => 'fas fa-user',
            'can'  => 'admin.usuarios',
        ],
        [
            'text' => 'Clientes',
            'route'  => 'admin.clientes',
            'icon' => 'fas fa-user-tag',
            'can'  => 'admin.clientes',
        ],

        [
            'text' => 'Pago de Servicio',
            'route'  => 'admin.pagos',
            'icon' => 'fas fa-hand-holding-usd',
            'can'  => 'admin.pagos',

        ],
        // [
        //     'text' => 'Herramientas',
        //     'route'  => 'admin.herramienta',
        //     'icon' => 'fas fa-meteor',
        // ],
        [
            'text' => 'Gestionar Incidencias',
            'icon'    => 'fas fa-fw fa-share',
            'can' => 'admin.gestionarincidencias',
            'submenu' => [
                [
                    'text' => 'Agenda de Incidencias',
                    'route'  => 'admin.gestionarincidencias.agendaincidencias',
                    'icon' => 'fas fa-fw fa-user',
                    'can' => 'admin.gestionarincidencias.agendaincidencias',
                ],
                [
                    'text' => 'Historial de Incidencias',
                    'route'  => 'admin.gestionarincidencias.historialincidencias',
                    'icon' => 'fas fa-fw fa-lock',
                    'can' => 'admin.gestionarincidencias.historialincidencias',
                ]
            ]
        ],
        [
            'text' => 'Recursos Antena',
            'icon'    => 'fas fa-fw fa-share',
            'can' => 'admin.recursosantena',
            'submenu' => [
                [
                    'text' => 'Servidor',
                    'route'  => 'admin.recursosantena.servidores',
                    'icon' => 'fas fa-server',
                    'can' => 'admin.recursosantena.servidores',
                ],
                [
                    'text' => 'Torre',
                    'route'  => 'admin.recursosantena.torres',
                    'icon' => 'fas fa-broadcast-tower',
                    'can' => 'admin.recursosantena.torres',
                ],
                [
                    'text' => 'Antena',
                    'route'  => 'admin.recursosantena.antenas',
                    'icon' => 'fas fa-satellite-dish',
                    'can' => 'admin.recursosantena.antenas',
                ],
            ]
        ],

        [
            'text' => 'Recursos Fibra Optica',
            'icon'    => 'fas fa-fw fa-share',
            'can' => 'admin.recursosfibra',
            'submenu' => [
                [
                    'text' => 'Data Center',
                    'route'  => 'admin.recursosfibra.datacenters',
                    'icon' => 'fas fa-warehouse',
                    'can' => 'admin.recursosfibra.datacenters',
                ],
                [
                    'text' => 'OLT',
                    'route'  => 'admin.recursosfibra.olts',
                    'icon' => 'fas fa-digital-tachograph',
                    'can'  => 'admin.recursosfibra.olts',
                ],
                [
                    'text' => 'Tarjeta',
                    'route'  => 'admin.recursosfibra.tarjetas',
                    'icon' => 'fas fa-boxes',
                    'can'  => 'admin.recursosfibra.tarjetas',
                ],
                [
                    'text' => 'Gpon',
                    'route'  => 'admin.recursosfibra.gpons',
                    'icon' => 'fas fa-calendar-alt',
                    'can'  => 'admin.recursosfibra.gpons',
                ],
                [
                    'text' => 'Cajas Nap',
                    'route'  => 'admin.recursosfibra.naps',
                    'icon' => 'fas fa-inbox',
                    'can'  => 'admin.recursosfibra.naps',
                ]
            ]
        ],
        [
            'text' => 'Gestionar Reportes',
            'icon'    => 'fas fa-fw fa-share',
            'can'  => 'admin.gestionreportes',
            'submenu' => [
                [
                    'text' => 'Pago cliente',
                    'route'  => 'admin.gestionreportes.pagoscliente',
                    'icon' => 'fas fa-fw fa-user',
                    'can'  => 'admin.gestionreportes.pagoscliente',
                ],
            ]
        ],
        [
            'text' => 'Gestionar Servicio',
            'icon'    => 'fas fa-fw fa-share',
            'can'  => 'admin.gestionarservicios',
            'submenu' => [
                [
                    'text' => 'Cortar Servicio',
                    'icon'    => 'fas fa-eye-dropper',
                    'route'  => 'admin.gestionarservicios.cortarservicios',
                    'can'  => 'admin.gestionarservicios.cortarservicios',
                ],
                [
                    'text' => 'Deshabilitar Habilitar Cliente',
                    'icon'    => 'fas fa-igloo',
                    'route'  => 'admin.gestionarservicios.habilitarservicios',
                    'can'  => 'admin.gestionarservicios.habilitarservicios',
                ],
                [
                    'text' => 'Congelar Servicio',
                    'icon'    => 'fas fa-igloo',
                    'route'  => 'admin.gestionarservicios.congelarservicios',
                    'can'  => 'admin.gestionarservicios.congelarservicios',
                ],
                [
                    'text' => 'Descongelar Servicio',
                    'icon'    => 'fas fa-fire',
                    'route'  => 'admin.gestionarservicios.descongelarservicios',
                    'can'  => 'admin.gestionarservicios.descongelarservicios',
                ],
                [
                    'text' => 'Regresar a Corte sin Ejecutar',
                    'icon'    => 'fas fa-undo-alt',
                    'route'  => 'admin.gestionarservicios.regresarcorte',
                    'can'  => 'admin.gestionarservicios.regresarcorte',
                ],
            ]
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    */

    'livewire' => false,
];
