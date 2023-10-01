<?php
/**
 * Change address
 * 
 * @package hessu-pdf-packing-slips-functionality
 */
namespace Hessu_pdf_packing_slips_functionality;

/**
 * Check document type and run change_address function
 * 
 * @param string $type Document type
 * @param object $order WooCommerce object
 * @return void
 */
function check_type( $type, $order ) {
  if ( 'packing-slip' === $type ) {
    add_filter( 'wpo_wcpdf_shipping_address', __NAMESPACE__ . '\change_address' );
  }
}

/**
 * Filter that changes the address in incvoice/packing slip
 * 
 * @param string $address WooCommerce formatted shipping address
 * @return string $address Modified shipping address, only first and last name returned
 */
function change_address( $address ) {
  
  // Return only first and last name
  $address = array_shift( explode( '<br/>', $address ) );

  return $address;
}
