<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package retro-film-festival
 */

?>

<section class="film" row>
	<!-- film poster -->
	<aside class="film-poster" column="6">
		<img src="<?php the_field('film_poster'); ?>" alt="">
	</aside>

	<!-- film title + screening time/date -->
	<article class="film-major-details" column="7 +1">
		<h1><?php the_field('movie_title'); ?></h1>
		<h2><?php the_field('screening_date'); ?></h2>
		<h3><?php the_field('screening_time'); ?></h3>

		<!-- film description + minor details -->
		<div class="row" row>
			<p class="description" column="7"><?php the_field('description'); ?></p>
			<div class="film-minor-details" column="7">
				<h4>Starring</h4>
				<p class="small"><?php the_field('key_cast'); ?></p>
				<h4>Run Time</h4>
				<p class="small"><?php the_field('film_duration'); ?></p>
				<h4>Original Release</h4>
				<p class="small"><?php the_field('release_date'); ?></p>
			</div>
		</div>

		<!-- film trailer -->
		<div class="trailer" column="12">
			<iframe src="https://www.youtube.com/embed/<?php the_field('trailer'); ?>" frameborder="0" allowfullscreen></iframe>
			
		</div>
	</article>
</section>







	
</article><!-- #post-## -->
