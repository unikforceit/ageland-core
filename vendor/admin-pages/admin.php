<?php
function ageland_welcome_page(){
    require_once 'ageland-welcome.php';
}
function ae_demo_importer_function(){
    admin_url( 'admin.php?page=ae-demo-importer' );
}
add_action( 'admin_menu', 'ageland_admin_meu' );
function ageland_admin_meu() {
    // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
    add_menu_page( 'Ageland', 'Ageland', 'administrator', 'ageland-admin-menu', 'ageland_welcome_page', 'dashicons-smiley', 2 );
    add_submenu_page('ageland-admin-menu', 'Theme Options', 'Theme Options', 'manage_options', 'customize.php' );
    add_submenu_page( 'ageland-admin-menu', esc_html__( 'Demo Importer', 'ageland' ), esc_html__( 'Demo Importer', 'ageland' ), 'administrator', 'ae-demo-importer',  'ae_demo_importer_function');
}