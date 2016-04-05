
	<section class="slider">
		<div class="wrapper">

			<h4>Festival Film Schedule</h4>

			<?php $filmSlider = new WP_Query(array(
			  'posts_per_page'=> -1,
			  'post_type'=> 'feature-films'
			)); ?>
			<?php if ($filmSlider-> have_posts()): ?>
			  <?php while ($filmSlider-> have_posts()): ?>
			    <?php $filmSlider-> the_post(); ?>
					
					<p><?php the_field('screening_date'); ?></p>

					<div class="image-container">
						<img src="<?php the_field('film_poster'); ?>" alt="">
						<div class="overlay">
							<p><?php the_field('movie_title'); ?></p>
						</div>
					</div>
					
			  <?php endwhile; ?>
			  <?php wp_reset_postdata(); ?>
			<?php endif; ?>
			
		</div><!-- end of div.wrapper -->
	</section> <!-- end of section.slider -->