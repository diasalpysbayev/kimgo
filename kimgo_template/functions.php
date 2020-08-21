<?php

function kimgo_scripts() {
    // <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
    // <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
    // <link rel="stylesheet" type="text/css" href="css/style.min.css">

    wp_enqueue_style( 
        'kimgo-reboot', 
        get_template_directory_uri() . '/libs/bootstrap-reboot.min.css' 
    );
    wp_enqueue_style( 
        'kimgo-grid', 
        get_template_directory_uri() . '/libs/bootstrap-grid.min.css' 
    );
    wp_enqueue_style( 
        'kimgo-main', 
        get_stylesheet_uri() 
    );
    wp_enqueue_style( 
        'kimgo-grid', 
        get_template_directory_uri() . '/libs/bootstrap-grid.min.css' 
    );
    wp_enqueue_script( 
        'kimgo-jquery',  
        'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', 
        array(), 
        '', 
        true 
    );
    wp_enqueue_script( 
        'kimgo-scroll', 
        get_template_directory_uri() . '/js/scroll.js', 
        array('jquery'), 
        '', 
        true 
    );
    wp_enqueue_script( 
        'kimgo-hamburger', 
        get_template_directory_uri() . '/js/hamburger.js', 
        array(), 
        '', 
        true 
    );

}
add_action( 'wp_enqueue_scripts', 'kimgo_scripts' );


add_filter( 'nav_menu_css_class', 'change_menu_item_css_classes', 10, 4 );
function change_menu_item_css_classes( $classes, $item, $args, $depth ) {
    if ( $args->theme_location === 'footer_left' ) {
        $classes = [ 'footer__item' ];
        if( $item->ID === 1021 && $args->theme_location === 'footer_left' ){
        $classes[] = 'hidden';
        }
        if( $item->ID === 1022 && $args->theme_location === 'footer_left' ){
            $classes[] = 'hidden';
        }
    }
    elseif ($args->theme_location === 'footer_right') {
         $classes = [ 'footer__item shown' ];
     } 
    return $classes;
}

function mytheme_add_woocommerce_support(){
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support');
add_action( 'wp_enqueue_scripts', 'kimgo_scripts' );

add_theme_support('custom-logo');

add_theme_support('menus');

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 7);
function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === 'Main') {
        $atts['class'] = 'subheader__item';
        $atts['class'] .= ' subheader__link';
    };
    return $atts;
}

function woocommerce_ajax_add_to_cart_js() {
        wp_enqueue_script('woocommerce-ajax-add-to-cart', get_bloginfo('template_directory') . '/js/ajax-add-to-cart.js', array('jquery'), '', true);
    
}
add_action('wp_enqueue_scripts', 'woocommerce_ajax_add_to_cart_js', 99);

add_action('wp_ajax_ql_woocommerce_ajax_add_to_cart', 'ql_woocommerce_ajax_add_to_cart'); 

add_action('wp_ajax_nopriv_ql_woocommerce_ajax_add_to_cart', 'ql_woocommerce_ajax_add_to_cart');          

function ql_woocommerce_ajax_add_to_cart() {  

    $product_id = apply_filters('ql_woocommerce_add_to_cart_product_id', absint($_POST['product_id']));

    $quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);

    $variation_id = absint($_POST['variation_id']);

    $passed_validation = apply_filters('ql_woocommerce_add_to_cart_validation', true, $product_id, $quantity);

    $product_status = get_post_status($product_id); 

    if ($passed_validation && WC()->cart->add_to_cart($product_id, $quantity, $variation_id) && 'publish' === $product_status) { 

        do_action('ql_woocommerce_ajax_added_to_cart', $product_id);

            if ('yes' === get_option('ql_woocommerce_cart_redirect_after_add')) { 

                wc_add_to_cart_message(array($product_id => $quantity), true); 

            } 

            WC_AJAX :: get_refreshed_fragments(); 

            } else { 

                $data = array( 

                    'error' => true,

                    'product_url' => apply_filters('ql_woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id));

                echo wp_send_json($data);

            }

            wp_die();

        }
?>

