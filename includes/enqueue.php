<?php
/**
 * Rocker Radio Enqueue
 *
 * @package    RockerRadio
 * @subpackage RockerRadio\Includes
 * @since      0.1.0
 * @license    GPL-2.0+
 */

function zomer_parent_theme_enqueue_styles() {
  wp_enqueue_style( 'zomer-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'rockerradio-style',
    get_stylesheet_directory_uri() . '/style.css',
    array( 'zomer-style' )
  );

}
add_action( 'wp_enqueue_scripts', 'zomer_parent_theme_enqueue_styles' );
