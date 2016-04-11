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
				<h1 class="page-title"><?php printf( __( 'Resultado da busca por : %s', 'article-19' ), get_search_query() ); ?></h1>
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

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
	</ul>
			</div>


                <div class="col-md-3 hidden-xs hidden-sm hidden-md">
            <div class="box-orange-sidebar">
            <h3>Últimas Notícias</h3>
          </div>
         <br>
         <ul class="media-list">
          <?php

                    $args = array(
                      'post_type' => 'post',
                      'post__not_in' => array( $post_id ) ,
                      'posts_per_page' => 4,
                      'category_name' => $categoria_slug,
                    );
                    $loop_categoria = new WP_Query($args);
                    while ($loop_categoria->have_posts()) :$loop_categoria->the_post();
                     $url_thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
                     if( empty( $url_thumb ) ){
                        $url_thumb = get_template_directory_uri() . "/cat-img/thumbnaillogo.png";
                     }else{
                       $url_thumb = $url_thumb[0];
                     }
            ?>
                <li class="media">
                 <a class="pull-left" href="<?php the_permalink(); ?>"><img class="media-object" src="<?php echo $url_thumb; ?>" height="64" width="64"></a>
                 <div class="media-body">
                    <h4 class="media-heading a-orange">
                       <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h4>
                 </div>
                 <br/>
                 <p class="a-black">
                 <?php 
                    $resumo = substr( the_excerpt( '',FALSE,'' ), 150 );
                    echo $resumo;
                  ?>
                 
                 </p>
              </li>
          <?php
            endwhile;
            wp_reset_query();
          ?>
          <?php
              $category_id = get_cat_ID( 'noticias' );
              $category_link = get_category_link( $category_id );
          ?><li>
          <a href="<?php echo esc_url( $category_link ); ?>" title="noticias" class="a-orange">Notícias >></a>
         </li>
         </ul>
         <!-- END SECTION ULTIMAS NOTICIAS -->
         <!-- BEGIN SECTION PUBLICACOES-->
         <div class="box-orange-sidebar hidden-xs hidden-sm hidden-md">
            <h3>Publicações</h3>
         </div>
         <br>
         <div class="box-sidebar-publicacoes hidden-xs hidden-sm hidden-md">
            <ul class="media-list">
              <?php
                      $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 5,
                        'category_name' => 'publicacoes',
                      );
                      $loop_categoria = new WP_Query($args);
                      while ($loop_categoria->have_posts()) :$loop_categoria->the_post();
                      $url_thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
                       if( empty( $url_thumb ) ){
                          $url_thumb = get_template_directory_uri() . "/cat-img/thumbnaillogo.png";
                       }else{
                         $url_thumb = $url_thumb[0];
                       }
              ?>
                <li class="media">
                    <a><i class="fa fa-2x fa-fw text-muted fa-file-text pull-left"></i></a>
                    <div class="media-body">
                       <h4 class="media-heading text-danger">
                          <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                       </h4>
                    </div>
                 </li>
              <?php
                endwhile;
                wp_reset_query();
              ?>
              <?php
                  $category_id = get_cat_ID( 'publicacoes' );
                  $category_link = get_category_link( $category_id );
              ?>
              <li><a href="<?php echo esc_url( $category_link ); ?>" title="publicacoes" class="a-orange">Publicações >></a></li>
            </ul>
            <?php dynamic_sidebar( 'banner-lista-categoria-lateral1' ); ?>
                        <hr> 
            <?php dynamic_sidebar( 'banner-lista-categoria-lateral2' ); ?> 

        </div>
        </div>
</div>
</div>
</div>

<?php

get_footer();
