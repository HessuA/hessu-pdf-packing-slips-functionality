<?php
/**
 * Hooks
 *
 * @package hessu-pdf-packing-slips-functionality
 */
namespace Hessu_pdf_packing_slips_functionality;

add_action( 'wpo_wcpdf_before_shipping_address', __NAMESPACE__ . '\check_type', 10, 2 );
add_action( 'wpo_wcpdf_after_order_details', __NAMESPACE__ . '\custom_text', 10, 2 );
