<?php
/*
*Plugin Name: wp_flexgrid
*Plugin URI: http://icloudage.com/
*Description: Grid display of text or images using flexbox
*Version: 1.0
*Author: Suyash
*Author URI: http://icloudage.com/
*License: GPL2
*/

$plugin_url = WP_PLUGIN_URL.'/wpflexgrid';

/* ADD A LINK TO PLUGIN IN THE ADMIN MENU UNDER 'SETTINGS>flexgrid*/
function wp_flexgrid_menu()
{
  /*add_options_page( $page_title, $menu_title, $capability, $menu_slug, $function);
 IT ADDS MENU UNDER SETTINGS LINK IN ADMIN
 */ 
 
 add_options_page('wp_flexgrid Plugin', 
 'WP Flex Grid', 
 'manage_options' , 
 'wp_flex_grid', 
 'wpflex_options_page' );
}

add_action('admin_menu','wp_flexgrid_menu'); // this will call function and 
//function will execute above code to add menu option under settings

function wpflex_options_page()
{
 		 if(!current_user_can('manage_options'))/*CHECK PERMISSIONS*/
 		 {
  		  		wp_die('do not have permission to access page');
 		 }
		 
		 echo "Welcome to page<br />";
		 require('inc/flexgrid_options.php');
}

function wpflexgrid_styles()
{
 		 wp_register_style( 'wpflexgrid', plugins_url('wpflexgrid/wpflexgrid.css'));
		 wp_enqueue_style('wpflexgrid');
}

add_action('admin_head', 'wpflexgrid_styles');
add_action('wp_enqueue_scripts', 'wpflexgrid_styles');


?>