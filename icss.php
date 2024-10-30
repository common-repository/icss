<?php 
/* Plugin Name:  iCSS - Popup Image Styles and Effects 
Description: This plugin allows you to add on every image, popups, style, hover style, borders and hover borders. (easy to use) soon this plugin will add effects and other styles. iCSS 100% Free.
Plugin URI: https://ingolin.com/icss/
Version: 1.1.2
Author: inGolin.com
Author URI: https://ingolin.com/
Text Domain: icss
Domain Path: languages
*/

if ( ! defined( 'ABSPATH' ) ){
	exit; // Exit if accessed this file directly
} 
function main_icss_scripts() {
wp_register_script('icss_main_js', plugins_url('js/icss.js', __FILE__), array('jquery'),'1.1', true);
wp_enqueue_script('icss_main_js');
}
add_action( 'wp_enqueue_scripts', 'main_icss_scripts' );

function main_icss_stylesheet() {
    wp_register_style( 'newstyle', plugins_url( '/css/style.css', __FILE__ ) );
    wp_enqueue_style( 'newstyle' );

    wp_register_style( 'border', plugins_url( '/css/border.css', __FILE__ ) );
    wp_enqueue_style( 'border' );
    
    wp_register_style( 'icssrot', plugins_url( '/css/icssrot.css', __FILE__ ) );
    wp_enqueue_style( 'icssrot' );
    
    wp_register_style( 'icssmor', plugins_url( '/css/icssmor.css', __FILE__ ) );
    wp_enqueue_style( 'icssmor' );
    
    wp_register_style( 'icsshover', plugins_url( '/css/icsshover.css', __FILE__ ) );
    wp_enqueue_style( 'icsshover' ); 
    
    wp_register_style( 'hoverzoom', plugins_url( '/css/hoverzoom.css', __FILE__ ) );
    wp_enqueue_style( 'hoverzoom' ); 
}
add_action( 'wp_enqueue_scripts', 'main_icss_stylesheet' );

?>