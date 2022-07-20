<?php

/**
 * Plugin Name: Dolar Venezuela
 * Plugin URI: 
 * Description: Plugin que permite crear un Widgets del precio del dolar en venezuela.
 * Version: 1.0.0
 * Author: Delvis Tovar
 * Text Domain: dolarvenezuela
 * Author URI: https://github.com/DelvisTovar
 * Tags: elemetor, widget, dolar, paralelo, dolar today
 */

namespace WidgetsDolarVenezuela;

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
	require_once('main.php');
	$redo_object = new WidgetsDolarVenezuelaMAin();

defined( 'DOLARVENEZUELA_BASEPATH' ) || define( 'DOLARVENEZUELA_BASEPATH', plugin_dir_path( __FILE__ ) );
defined( 'DOLARVENEZUELA_BASEURI' ) || define( 'DOLARVENEZUELA_BASEURI', plugin_dir_url( __FILE__ ) );

/** Enqueue plugin scripts */
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_script( 'w-dt.js',DOLARVENEZUELA_BASEURI.'public/js/w-dt.js', array('jquery'), generarCodigo(3), true );
} );

/** Enqueue plugin styles */
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'w-dt.css',DOLARVENEZUELA_BASEURI.'public/css/w-dt.css', array(), generarCodigo(3));
}, 50);

function generarCodigo($length) {
	$rand_string = '';
	for($i = 0; $i < $length; $i++) {
		$number = random_int(0, 36);
		//$character = base_convert($number, 10, 36);
		$rand_string .= $number;
	}
	return $rand_string;
}
