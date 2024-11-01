<?php
/* +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

Plugin Name: WP Backpack
Plugin URI: https://christophkleinschmidt.de/wordpress-plugin-wp-backpack/
Description: Eine Sammlung von wichtigen Optionen und Funktionen.
Version: 2.1
Author: Christoph Kleinschmidt
Author URI: https://www.christophkleinschmidt.de
Text Domain: wp-backpack
Domain Path: /languages
License: GPL2

WP Backpack is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
WP Backpack is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with WP Backpack. If not, see http://www.gnu.de/documents/gpl-2.0.de.html.

+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ */

if ( ! function_exists( 'add_filter' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

if ( ! defined( 'WP-Backpack_File' ) ) {
	define( 'WP-Backpack_File', __FILE__ );
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# WP Backpack Plugin Version
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if (! defined( 'WP_Backpack_Version' ) )
    define( 'WP_Backpack_Version', '2.1' );

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Plugin Optionen Seite
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

# Actions
if ( is_admin() ){
	add_action( 'admin_menu', 'wp_backpack_menu' );
	add_action( 'admin_menu', 'wp_backpack_menu_about_link' );
	add_action( 'admin_menu', 'wp_backpack_menu_help_link' );
	add_action( 'admin_head', 'wp_backpack_about_link_skript_add_jquery' );
	add_action( 'admin_head', 'wp_backpack_help_link_skript_add_jquery' );
	add_action( 'admin_init', 'wp_backpack_register_settings' );
}

# Menü Haupteintrag 'WP-Backpack'
function wp_backpack_menu() {
 	add_menu_page( 'WP Backpack', 'WP Backpack', 'manage_options', 'informationen', 'wp_backpack_options_info', plugin_dir_url( __FILE__ ).'/pictures/menu_icon.png' );
	add_submenu_page( 'informationen', 'WP Backpack - Informationen', 'Informationen', 'manage_options', 'informationen', 'wp_backpack_options_info' );
	add_submenu_page( 'informationen', 'WP Backpack - Optik', 'Optik', 'manage_options', 'optik', 'wp_backpack_optik' );
	add_submenu_page( 'informationen', 'WP Backpack - Technik', 'Technik', 'manage_options', 'technik', 'wp_backpack_technik' );
	add_submenu_page( 'informationen', 'WP Backpack - Ähnliche Beiträge', 'Ähnliche Beiträge', 'manage_options', 'beitrag', 'wp_backpack_beitrag' );
	add_submenu_page( 'informationen', 'WP Backpack - WP Plugin Tipps', 'WP Plugin Tipps', 'manage_options', 'tipps', 'wp_backpack_tipps' );
}

# Menü Untereintrag 'Über das Plugin' 
function wp_backpack_menu_about_link() {
    global $submenu;
    $submenu['informationen'][5] = array( '<div id="wp_backpack_about_link_skript">Über das Plugin</div>', 'manage_options', 'https://christophkleinschmidt.de/wordpress-plugin-wp-backpack/' );
}

# Menü Untereintrag 'Dokumentation'
function wp_backpack_menu_help_link() {
    global $submenu;
    $submenu['informationen'][6] = array( '<div id="wp_backpack_help_link_skript">Dokumentation</div>', 'manage_options', 'https://christophkleinschmidt.de/wordpress-plugin-wp-backpack/' );
}

# Menüeinträge in neuem Tab öffnen
function wp_backpack_about_link_skript_add_jquery() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready( function($) {   
            $('#wp_backpack_about_link_skript').parent().attr('target','_blank');  
        });
    </script>
    <?php
}

function wp_backpack_help_link_skript_add_jquery() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready( function($) {   
            $('#wp_backpack_help_link_skript').parent().attr('target','_blank');  
        });
    </script>
    <?php
}

# Menüeinträge in der Plugin-Übersicht
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'my_plugin_action_links' );

function my_plugin_action_links( $links ) {
    $links[] = '<a href="'. esc_url( get_admin_url(null, 'admin.php?page=informationen') ) .'">Einstellungen</a>';
    $links[] = '<a href="https://christophkleinschmidt.de/wordpress-plugin-wp-backpack/" target="_blank">zur Plugin-Website</a>';
    return $links;
}

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Funktionen des Plugins laden
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

require_once dirname( __FILE__ ) .'/wp-backpack-functions.php';

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Optionenseiten des Plugins laden
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function wp_backpack_options_info() {
    include 'wp-backpack-info.php';
}

function wp_backpack_optik() {
    include 'wp-backpack-optik.php';
}

function wp_backpack_technik() {
    include 'wp-backpack-technik.php';
}

function wp_backpack_beitrag() {
    include 'wp-backpack-beitrag.php';
}

function wp_backpack_tipps() {
    include 'wp-backpack-tipps.php';
}
	
?>