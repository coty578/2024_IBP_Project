<?php

return [

/*
|--------------------------------------------------------------------------
| Title
|--------------------------------------------------------------------------
|
| Here you can change the default title of your admin panel.
|
*/

'title' => 'AdminLTE 3',
'title_prefix' => '',
'title_postfix' => '',

/*
|--------------------------------------------------------------------------
| Favicon
|--------------------------------------------------------------------------
|
| Here you can activate the favicon.
|
*/

'use_ico_only' => false,
'use_full_favicon' => false,

/*
|--------------------------------------------------------------------------
| Google Fonts
|--------------------------------------------------------------------------
|
| Here you can allow or not the use of external google fonts.
|
*/

'google_fonts' => [
    'allowed' => true,
],

/*
|--------------------------------------------------------------------------
| Admin Panel Logo
|--------------------------------------------------------------------------
|
| Here you can change the logo of your admin panel.
|
*/

'logo' => '<b>Admin</b>LTE',
'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
'logo_img_class' => 'brand-image img-circle elevation-3',
'logo_img_xl' => null,
'logo_img_xl_class' => 'brand-image-xs',
'logo_img_alt' => 'Admin Logo',

/*
|--------------------------------------------------------------------------
| Authentication Logo
|--------------------------------------------------------------------------
|
| Here you can setup an alternative logo to use on your login and register
| screens.
|
*/

'auth_logo' => [
    'enabled' => false,
    'img' => [
        'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
        'alt' => 'Auth Logo',
        'class' => '',
        'width' => 50,
        'height' => 50,
    ],
],

/*
|--------------------------------------------------------------------------
| Preloader Animation
|--------------------------------------------------------------------------
|
| Here you can change the preloader animation configuration.
|
*/

'preloader' => [
    'enabled' => true,
    'mode' => 'fullscreen',
    'img' => [
        'path' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
        'alt' => 'AdminLTE Preloader Image',
        'effect' => 'animation__shake',
        'width' => 60,
        'height' => 60,
    ],
],

/*
|--------------------------------------------------------------------------
| User Menu
|--------------------------------------------------------------------------
|
| Here you can activate and change the user menu.
|
*/

'usermenu_enabled' => true,
'usermenu_header' => false,
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
*/

'layout_topnav' => null,
'layout_boxed' => null,
'layout_fixed_sidebar' => null,
'layout_fixed_navbar' => null,
'layout_fixed_footer' => null,
'layout_dark_mode' => null,

/*
|--------------------------------------------------------------------------
| Authentication Views Classes
|--------------------------------------------------------------------------
|
| Here you can change the look and behavior of the authentication views.
|
*/

'classes_auth_card' => 'card-outline card-primary',
'classes_auth_header' => '',
'classes_auth_body' => '',
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
*/

'classes_body' => '',
'classes_brand' => '',
'classes_brand_text' => '',
'classes_content_wrapper' => '',
'classes_content_header' => '',
'classes_content' => '',
'classes_sidebar' => 'sidebar-dark-primary elevation-4',
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
*/

'use_route_url' => false,
'dashboard_url' => 'home',
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
*/

'menu' => [
    // Navbar items:
    [
        'type' => 'navbar-search',
        'text' => 'search',
        'topnav_right' => true,
    ],
    [
        'type' => 'fullscreen-widget',
        'topnav_right' => true,
    ],

    // Sidebar items:
    [
        'type' => 'sidebar-menu-search',
        'text' => 'search',
    ],
    [
        'text' => 'Admin Dashboard',
        'url' => 'admin/dashboard',
        'icon' => 'fas fa-fw fa-tachometer-alt',
        'can' => 'admin',
    ],
    
    [
        'text' => 'User Management',
        'icon' => 'fas fa-fw fa-users',
        'can'  => 'admin',
        'submenu' => [
            [
                'text' => 'List Users',
                'url' => 'admin/users',
                'can'  => 'admin',
            ],
            [
                'text' => 'Register User',
                'url' => 'admin/users/create',
                'can'  => 'admin',
            ],
        ],
    ],
    
    [
        'text' => 'Message Management',
        'icon' => 'fas fa-fw fa-envelope',
        'can'  => 'admin',
        'submenu' => [
            [
                'text' => 'Inbox',
                'url' => 'admin/messages/inbox',
                'icon' => 'fas fa-fw fa-inbox',
                'can'  => 'admin',
            ],
            [
                'text' => 'Outbox',
                'url' => 'admin/messages/outbox',
                'icon' => 'fas fa-fw fa-paper-plane',
                'can'  => 'admin',
            ],
            [
                'text' => 'All Messages',
                'url' => 'admin/messages',
                'icon' => 'fas fa-fw fa-envelope-open-text',
                'can'  => 'admin',
            ],
            [
                'text' => 'Create New Message',
                'url' => 'admin/messages/create',
                'icon' => 'fas fa-fw fa-edit',
                'can'  => 'admin',
            ],
        ],
    ],
    [
        'text' => 'Product Management',
        'icon' => 'fas fa-fw fa-box',
        'can'  => 'admin',
        'submenu' => [
            [
                'text' => 'All Products',
                'url' => 'admin/products',
                'icon' => 'fas fa-fw fa-boxes',
                'can'  => 'admin',
            ],
            [
                'text' => 'Create New Product',
                'url' => 'admin/products/create',
                'icon' => 'fas fa-fw fa-plus',
                'can'  => 'admin',
            ],
        ],
    ],
    [
        'text' => 'Announcements Management',
        'icon' => 'fas fa-fw fa-bullhorn',
        'can'  => 'admin',
        'submenu' => [
            [
                'text' => 'All Announcements',
                'url' => 'admin/announcements',
                'icon' => 'fas fa-fw fa-list',
                'can'  => 'admin',
            ],
            [
                'text' => 'Create New Announcement',
                'url' => 'admin/announcements/create',
                'icon' => 'fas fa-fw fa-plus',
                'can'  => 'admin',
            ],
        ],
    ],
    [
        'text' => 'User Dashboard',
        'url' => 'user/dashboard',
        'icon' => 'fas fa-fw fa-tachometer-alt',
        'can' => 'user',
    ],
    [
        'text' => 'Announcements',
        'url'  => '/user/announcements',
        'icon' => 'fas fa-fw fa-bullhorn',
        'can'  => 'user',
    ],
    [
        'text' => 'Products',
        'url'  => '/user/products',
        'icon' => 'fas fa-fw fa-box',
        'can'  => 'user',
    ],
    [
        'text' => 'Messages',
        'icon' => 'fas fa-fw fa-envelope',
        'can'  => 'user',
        'submenu' => [
            [
                'text' => 'Inbox',
                'url'  => '/user/messages/inbox',
                'can'  => 'user',
            ],
            [
                'text' => 'Sent',
                'url'  => '/user/messages/sent',
                'can'  => 'user',
            ],
            [
                'text' => 'Compose',
                'url'  => '/user/messages/compose',
                'can'  => 'user',
            ],
        ],
    ],
    [
        'text' => 'Profile',
        'url'  => '/user/profile',
        'icon' => 'fas fa-fw fa-user',
        'can'  => 'user',
    ],
    
    ['header' => 'labels'],
    [
        'text' => 'important',
        'icon_color' => 'red',
        'url' => '#',
    ],
    [
        'text' => 'warning',
        'icon_color' => 'yellow',
        'url' => '#',
    ],
    [
        'text' => 'information',
        'icon_color' => 'cyan',
        'url' => '#',
    ],
],

/*
|--------------------------------------------------------------------------
| Menu Filters
|--------------------------------------------------------------------------
|
| Here we can modify the menu filters of the admin panel.
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
        'active' => false,
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
        'active' => false,
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
| IFrame
|--------------------------------------------------------------------------
|
| Here we change the IFrame mode configuration.
|
*/

'iframe' => [
    'default_tab' => [
        'url' => null,
        'title' => null,
    ],
    'buttons' => [
        'close' => true,
        'close_all' => true,
        'close_all_other' => true,
        'scroll_left' => true,
        'scroll_right' => true,
        'fullscreen' => true,
    ],
    'options' => [
        'loading_screen' => 1000,
        'auto_show_new_tab' => true,
        'use_navbar_items' => true,
    ],
],

/*
|--------------------------------------------------------------------------
| Livewire
|--------------------------------------------------------------------------
|
| Here we can enable the Livewire support.
|
*/

'livewire' => false,
];
