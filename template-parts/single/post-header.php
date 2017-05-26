<?php
/**
 * Template part for displaying single post header.
 *
 * @package Zomer
 */

?>

<div id="primary-header" class="entry-header">
	<?php if ( has_post_thumbnail() ) : ?>
	<div class="featured-image has-background-cover" style="background-image: url(<?php echo esc_url( zomer_featured_image_url() ); ?>);"></div>
	<?php endif; ?>

	<div class="header-inner">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<?php if( 'station' === ( $post_type = get_post_type() ) || 'band' === $post_type ) : ?>

			<div class="entry-meta">
				<?php $post_id = get_the_id(); ?>
				<?php $twitter = get_post_meta( $post_id, 'twitter_name', true ); ?>
				<?php $website = get_post_meta( $post_id, 'website', true ); ?>
				<?php $address = get_post_meta( $post_id, 'address', true ); ?>

				<?php if( $twitter ) : ?>
					<div class="twitter">@<?php esc_attr_e( $twitter ); ?></div>
				<?php endif; ?>
				<?php if( $website ) : ?>
					<div class="website"><a href="<?php echo esc_url( $website ); ?>" target="_blank"><?php echo esc_url( $website ); ?></a></div>
				<?php endif; ?>
				<?php if( $address ) : ?>
					<div class="address"><?php esc_attr_e( $address['city'] ) ?> <?php esc_attr_e( $address['state'] ) ?></div>
				<?php endif; ?>
			</div>

		<?php endif; ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php zomer_posted_on_archive(); ?>

			<?php if (  ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
			<span class="comments-link has-icon">
				<?php get_template_part( 'template-parts/content/comments', 'link' ); ?>
			</span><!-- .comments-link -->
			<?php endif; ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</div><!-- .header-inner -->
</div><!-- .entry-header -->
