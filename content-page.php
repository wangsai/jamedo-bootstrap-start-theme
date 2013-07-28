<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package skematik
 * @since skematik 1.0
 */
?>

			<?php do_action( 'skematik_before_content_page' );?>

			<?php while ( have_posts() ) : the_post(); /* Start the Loop */?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php skematik_page_title();?>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'skematik' ), 'after' => '</div>' ) ); ?>
					</div><!-- /.entry-content -->

					<?php edit_post_link( __( 'Edit', 'skematik' ), '<span class="edit-link">', '</span>' ); ?>

				</article><!-- /#post-<?php the_ID(); ?> -->
			<?php endwhile; // end of the loop. ?>
			
			<hr class="bs-docs-separator clear">
			
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template( '', true );
			?>