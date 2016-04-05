<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package retro-film-festival
 */

get_header(); ?>

	<!-- MAIN -->
	<main>
		<div class="wrapper" container>
			
			

			<?php
			while ( have_posts() ) : the_post();
				
			
				get_template_part( 'template-parts/content', 'page' );


			endwhile; // End of the loop.
			?>


		</div><!-- end of div.wrapper -->
	</main><!-- end of main -->

	<!-- SLIDER -->
	<?php include 'template-parts/content-slider.php'; ?>
	
	<!-- BUTTON -->
	<section class="button">
		<div class="wrapper">
			<div class="buy-tickets-button">
				<p>Click For Tix!</p>
			</div>
		</div>
	</section>

<?php

get_footer();
