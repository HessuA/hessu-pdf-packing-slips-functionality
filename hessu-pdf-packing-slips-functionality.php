<?php
/**
 * Plugin Name: Hessu Pdf Packing Slips Functionality
 * Description: Muutetaan toiminnalisuuksia WooCommerce Pdf Invoices and Packing Slips lisäosasta
 * Author: Heikki Anttonen
 * Version: 1.0.0
 * 
 * @package hessu-pdf-packing-slips-functionality
 */
namespace Hessu_pdf_packing_slips_functionality;

if ( ! defined( 'ABSPATH' ) ) {
  exit();
}

add_action( 'init', function() {
  require_once plugin_dir_path( __FILE__ ) . '/inc/hooks.php';
  require_once plugin_dir_path( __FILE__ ) . '/inc/custom-text.php';
  require_once plugin_dir_path( __FILE__ ) . '/inc/change-address.php';
} );
