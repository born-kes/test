<?php
     /*
    Plugin Name: Print Shop Order by KES
    Description: Print Shop Order by production gastronomy
    Author: Łukasz Martyn
    Version: 1.0.0
    */
define( 'PSO_KES_VERSION', '1.0.1' );

    if ( ! defined( 'ABSPATH' ) ) {
        die( '-1' );
    }

if ($_GET['post_type']=='shop_order') {

    define( 'PSO_KES_URL', plugin_dir_url( __FILE__) );
    define( 'PSO_KES_JS', PSO_KES_URL . 'js/main.js' );
    define( 'PSO_KES_CSS', PSO_KES_URL . 'css/main.css' );

    wp_register_script( 'main.js', PSO_KES_JS , array( 'jquery'), PSO_KES_VERSION, true );
    wp_enqueue_script( 'main.js' );

    wp_register_style( 'main.css',  PSO_KES_CSS, array(), PSO_KES_VERSION );
    wp_enqueue_style( 'main.css' );
    require('woocommerce_print_order.php');

}