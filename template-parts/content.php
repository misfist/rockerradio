<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RockerRadio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="hentry-inner">
		<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php echo esc_url( get_permalink() ); ?>" class="thumb-link">
			<span class="featured-image has-background-cover" style="background-image: url(<?php echo esc_url( zomer_featured_image_url() ); ?>);"></span>
		</a><!-- .thumb-link -->
		<?php endif; ?>

		<header class="entry-header clearfix">
			<?php
            if ( 'post' === ( $post_type = get_post_type() ) ) :
                zomer_entry_archive_categories();
            endif; ?>

			<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
			<span class="comments-link has-icon"> <?php get_template_part( 'template-parts/content/comments', 'link' ); ?></span> <!-- .comments-link -->
			<?php endif; ?>

			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
            <?php
							the_excerpt();
                // the_content( sprintf(
                //     /* translators: %s: Name of current post. */
                //     wp_kses( __( 'Continue Reading %s', 'zomer' ), array( 'span' => array( 'class' => array() ) ) ),
                //     the_title( '<span class="screen-reader-text">"', '"</span>', false )
                // ) );
            ?>
        </div><!-- .entry-content -->


		<footer class="entry-footer">
			<div class="entry-meta">
				<?php if ( 'post' === $post_type ) : ?>
					<?php zomer_posted_on_archive(); ?>
				<?php endif; ?>
				<?php if( 'band' === $post_type ) : ?>
					<?php $twitter = get_post_meta( get_the_id(), 'twitter_name', true ); ?>
					<?php $website = get_post_meta( get_the_id(), 'website', true ); ?>

					<?php if( $twitter ) : ?>
						<div class="twitter">@<?php esc_attr_e( $twitter ); ?></div>
					<?php endif; ?>
					<?php if( $website ) : ?>
						<div class="website"><a href="<?php echo esc_url( $website ); ?>" target="_blank"><?php echo esc_url( $website ); ?></a></div>
					<?php endif; ?>

				<?php endif; ?>
			</div> <!-- .entry-meta -->
		</footer><!-- .entry-footer -->

	</div><!-- .hentry-inner -->

</article><!-- #post-## -->
