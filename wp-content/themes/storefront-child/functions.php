<?php
/**
 * Proper ob_end_flush() for all levels
 *
 * This replaces the WordPress `wp_ob_end_flush_all()` function
 * with a replacement that doesn't cause PHP notices.
 */
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', function() {
   while ( @ob_end_flush() );
} );





remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);

add_action('woocommerce_after_shop_loop_item', 'skrivInfo');




function skrivInfo(){
    echo ' Klicka på bilden för mer info';
}




/*  */

add_action('skrivUthej_storefront', 'skrivHej',1);
add_action('skrivUthej_storefront', 'skrivHej',2);
add_action('skrivUthej_storefront', 'skrivHej',3);
add_action('skrivUthej_storefront', 'skrivHej',4);

function skrivHej(){
    echo ' Häst ';
}

?>