<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package retro-film-festival
 */

?>

<section class="film">
	<!-- film poster -->
	<aside class="film-poster">
		<img src="<?php the_field('film_poster'); ?>" alt="">
	</aside>

	<!-- film title + screening time/date -->
	<article class="film-major-details">
		<h1><?php the_field('movie_title'); ?></h1>
		<h2><?php the_field('screening_date'); ?></h2>
		<h3><?php the_field('screening_time'); ?></h3>

		<!-- film description + minor details -->
		<div class="flex">
			<p class="description"><?php the_field('description'); ?></p>
			<div class="film-minor-details">
				<h4>Starring</h4>
				<p class="small"><?php the_field('key_cast'); ?></p>
				<h4>Run Time</h4>
				<p class="small"><?php the_field('film_duration'); ?></p>
				<h4>Original Release</h4>
				<p class="small"><?php the_field('release_date'); ?></p>
			</div>
		</div>

		<!-- film trailer -->
		<div class="trailer">
			<iframe src="https://www.youtube.com/embed/<?php the_field('trailer'); ?>" frameborder="0" allowfullscreen></iframe>
			
		</div>
	</article>
</section>







	<footer class="entry-footer">

		<?php retro_film_festival_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
