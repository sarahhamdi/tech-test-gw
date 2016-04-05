<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package retro-film-festival
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="hero" style="background: url(<?php echo trff_get_thumbnail_url($post) ?> ) fixed no-repeat; background-size: contain;background-position: 50% 0;">
		<h1>
			<span class="top">Toronto</span>
			<span class="skewed">RETRO</span>
			<span class="bottom">Film Festival</span>
		</h1>
		<h2>July 17<sup>th</sup> - July 23<sup>rd</sup></h2>
	</div>

	<div class="festival-blurb" row>
		<div column="10 +1">
		<?php
			the_content();



			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'retro-film-festival' ),
				'after'  => '</div>',
			) );
		?>

		
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
