<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package retro-film-festival
 */

get_header(); ?>
	
	<!-- MAIN -->
	<main>
		<div class="wrapper">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

			endwhile; // End of the loop.
			?>
		</div><!-- end of div.wrapper -->
	</main><!-- #main -->

	<!-- SLIDER -->
	<?php include 'template-parts/content-slider.php'; ?>	

<?php
get_footer(); 
