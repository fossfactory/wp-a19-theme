<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Article_19
 */

get_header(); ?>

	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-9 text-news">
					<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', '' );
					endwhile; // End of the loop.
					?>
				</div>
<?php get_sidebar(); ?>

<?php
get_footer();
