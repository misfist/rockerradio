<?php
/**
 * Rocker Radio Set-up
 *
 * @package    RockerRadio
 * @subpackage RockerRadio\Includes
 * @since      0.1.0
 * @license    GPL-2.0+
 */

 /**
  * Register widget area.
  *
  * @since 0.1.0
  *
  * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
  */
 function rockerradio_widgets_init() {
 	register_sidebar( array(
 		'name'          => esc_html__( 'Copyright/Credits', 'rockerradio' ),
 		'description'   => esc_html__( 'Appears in the footer area of the site.', 'rockerradio' ),
 		'id'            => 'copyright',
 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
 		'after_widget'  => '</section>',
 		'before_title'  => '<h3 class="widget-title screen-reader-text">',
 		'after_title'   => '</h3>',
 	) );
 }
 add_action( 'widgets_init', 'rockerradio_widgets_init' );
