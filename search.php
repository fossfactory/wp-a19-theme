<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Article_19
 */

get_header(); ?>

<div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-news">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Resultado da busca por : %s', 'article-19' ), '<span>' . esc_html ( get_search_query() ) . '</span>' ); ?></h1>
			</header><!-- .page-header -->
		<ul>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */

				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation( array (
				'prev_text'		=> __( 'Página anterior', 'article-19'),
				'next_text'		=> __( 'Próxima página', 'article-19'),
				'before_page_number'	=> '<span class="meta-nav">' . __( 'Page', 'article-19') . ' </span>',
				) );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; 
		?>
		
		<ul class="pagination" style="text-align:center;width:100%">
		<?php if (function_exists("pagination")) {
			 pagination($additional_loop->max_num_pages);
		} ?>
		</ul>

	</ul>
			</div>

<?php get_sidebar(); ?>
</div>
</div>


<?php

get_footer();
