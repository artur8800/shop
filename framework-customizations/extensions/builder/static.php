<?php if (!defined('FW')) die('Forbidden');

if (!is_admin()) {
    wp_register_style(
        'fw-ext-builder-frontend-grid',
        get_stylesheet_directory_uri() .'/assets/css/main.css',
        array(),
        fw()->theme->manifest->get_version()
    );
}