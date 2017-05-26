<?php
/**
 * Rocker Radio Extras
 *
 * @package    RockerRadio
 * @subpackage RockerRadio\Includes
 * @since      0.1.0
 * @license    GPL-2.0+
 */


/**
 * Display Bands on Home
 *
 * @since 0.1.0
 *
 * @param {obj} $query
 * @return {obj} $query
 */
function rockerradio_get_posts( $query ) {

  if ( is_home() && $query->is_main_query() )
    $query->set( 'post_type', array( 'band' ) );

  return $query;
}
add_filter( 'pre_get_posts', 'rockerradio_get_posts' );

/**
 * Remove Parent Actions
 *
 * @since 0.1.0
 *
 * @uses zomer_footer_bottom action hook
 *
 * @return void
 */
function rockerradio_remove_parent_actions() {
  remove_action( 'zomer_footer_bottom', 'zomer_set_footer_credits' );
}
add_action( 'init', 'rockerradio_remove_parent_actions' );

/**
 * Add Copyright Widget to Footer
 *
 * @since 0.1.0
 *
 * @uses zomer_footer_bottom action hook
 *
 * @return void
 */
function rockerradio_copyright_footer() {
  if( is_active_sidebar( 'copyright' ) ) {
    dynamic_sidebar( 'copyright' );
  }
}
add_action( 'zomer_footer_bottom', 'rockerradio_copyright_footer' );
