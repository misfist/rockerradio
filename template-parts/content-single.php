<?php
/**
 * Template part for displaying page content in single.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RockerRadio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
	  <?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
    <?php
        zomer_entry_footer();
        zomer_author_bio();
    ?>

		<?php if( 'band' === $post_type ) : ?>
			<div class="entry-author">
			<?php $twitter = get_post_meta( get_the_id(), 'twitter_name', true ); ?>
			<?php $website = get_post_meta( get_the_id(), 'website', true ); ?>

			<?php if( $twitter ) : ?>
				<div class="twitter">@<?php esc_attr_e( $twitter ); ?></div>
			<?php endif; ?>
			<?php if( $website ) : ?>
				<div class="website"><a href="<?php echo esc_url( $website ); ?>" target="_blank"><?php echo esc_url( $website ); ?></a></div>
			<?php endif; ?>

			</div>
		<?php endif; ?>

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
