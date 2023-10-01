<?php
/**
 * Custom text to packing slips
 *
 * @package hessu-pdf-packing-slips-functionality
 */
namespace Hessu_pdf_packing_slips_functionality;

/**
 * Add custom text to packing slips
 * 
 * @param string $type Document type
 * @param object $order WooCommerce order object
 * @return void
 */
function custom_text( $type, $order ) {

  if ( 'packing-slip' !== $type ) {
    return;
  }

  ?>
  <div>
    <p>Olet saanut kirjanpitoa varten laskun/kuitin sähköpostiisi tilauksen valmistumisesta kertovan sähköpostin liitteenä. Jos viestiä ei löydy, tarkastathan myös roskapostikansiosi.</p>
  </div>
  <?php
}
