<?php
/*
Template Name: Article Page v2
Template Post Type: page
*/


get_header();

?>
	<main class="single-tmp">

		<nav class="breadcrumb">
			<ul class="breadcrumb__body">
				<?php get_breadcrumb(); ?>
			</ul>
		</nav>
		
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
		
		</main>

<script>
	window.addEventListener("load", function (e) {
		if (window.matchMedia('(min-width:767px)').matches) {
			$('.make-fixed > .vc_column-inner').scrollFix({
				side: 'top',
				topPosition: 50, 
			});
		}
    });
</script>

<?php
get_footer();
?>

