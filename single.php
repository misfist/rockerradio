<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package RockerRadio
 */

get_header(); ?>

<div class="container">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/single/post', 'header' ); ?>

	<div id="primary" class="content-area row">
		<main id="main" class="site-main <?php echo esc_attr( zomer_get_blog_primary_class() ); ?>" role="main">

		<?php

			get_template_part( 'template-parts/content', 'single' );

			the_post_navigation( array(
				'next_text' => '<span class="meta-title has-icon">' . esc_html__( 'Next', 'zomer' ) . '</span> ' .
					'<span class="post-title secondary-font">%title</span>',
				'prev_text' => '<span class="meta-title has-icon">' . esc_html__( 'Previous', 'zomer' ) . '</span> ' .
					'<span class="post-title secondary-font">%title</span>',
			) );

			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>

	<?php endwhile; ?>

		</main><!-- #main -->

		<?php if ( ! zomer_is_hidden_sidebar() && 'band' !== ( $post_type = get_post_type() ) ) : ?>

			<div class="col-lg-4 col-md-4 sidebar-section">
				<?php get_sidebar(); ?>
			</div><!-- .sidebar-section -->

		<?php elseif( 'band' === $post_type ) : ?>

			<div class="col-lg-4 col-md-4 sidebar-section">
				<div class="request-box">

					<h3 class="widget-title"><?php _e( 'Request This Band' ); ?></h3>

					<p><?php _e( '1) Enter Your State' ); ?></p>

					<p><?php _e( '2) Select Station to Tweet Request' ); ?></p>

				</div>

				<?php get_sidebar(); ?>
			</div><!-- .sidebar-section -->

		<?php endif; ?>

	</div><!-- #primary -->
</div><!-- .container -->
<?php
get_footer();
