<?php
define( 'SECBR_PLUGIN_ADMIN_URL', plugin_dir_url( __FILE__ ) );
add_action('admin_menu', 'secbr_add_global_custom_options');
function secbr_add_global_custom_options(){
global $submenu;
if ( empty ( $GLOBALS['admin_page_hooks']['mwp_plugins'] ) ){
add_menu_page('Mestres do WP', 'Mestres do WP', 'manage_options', 'mwp_plugins','mwp_plugins', SECBR_PLUGIN_ADMIN_URL.'assets/images/faviconmwp.png',3);
	}
add_submenu_page('mwp_plugins', 'Estados e Cidades', 'Estados e Cidades', 'manage_options', 'secbr_wp', 'secbr_wp');
unset( $submenu['mwp_plugins'][0] );
}
function secbr_load_admin_css() {
    wp_enqueue_style( 'cwmp_style_admin_checkout', 'https://mestresdowp.com.br/admin/administrador.css', array(), rand(111,9999), 'all' );
	wp_enqueue_script( 'cwmp_admin_get_js', 'https://mestresdowp.com.br/admin/administrador.js', array(), rand(111,9999), 'all' );
}
add_action( 'admin_init', 'secbr_load_admin_css' );
function secbr_wp(){ include "includes/mwp-secbr-html-form.php"; }
