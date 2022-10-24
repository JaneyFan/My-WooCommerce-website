<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION

// show onsale text on front page
function storefront_add_onsale_text_frontpage() {
    ?>   
    <h3 class="onsale-text"><?php the_field("on_sale_text") ?></h3>
    <?php
}
add_action( 'storefront_before_header', 'storefront_add_onsale_text_frontpage', 10 ); 


// show delivery time on product page

function libra_print_delivery_time() {
    ?>
    <span class="delivery_time_wrapper">Delivery time: <span class="delivery_time"><?php the_field("delivery_time") ?></span></span>
    <?php
}
add_action("woocommerce_product_meta_start", "libra_print_delivery_time");

