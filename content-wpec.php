<?php
/**
 * @package skematik
 * @since skematik 1.0
 */
global $wp_query;
?>

			<?php do_action( 'skematik_before_wpec_products' );?>

			<?php while ( have_posts() ) : the_post(); /* Start the Loop */?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php skematik_page_title();?>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'skematik' ), 'after' => '</div>' ) ); ?>
					</div><!-- /.entry-content -->
				</article><!-- /#post-<?php the_ID(); ?> -->
			<?php endwhile; // end of the loop. ?>