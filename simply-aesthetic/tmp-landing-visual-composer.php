<?php
/*
Template Name: Landing Page v2(wpBakery)
Template Post Type: page
*/


get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="entry-content">
					<?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'simply-aesthetic' ),
							'after'  => '</div>',
						)
					);
					?>
				</div><!-- .entry-content -->

			</article><!-- #post-<?php the_ID(); ?> -->
		
		<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();