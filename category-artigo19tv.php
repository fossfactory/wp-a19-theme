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
 * @package Article_19
 */

get_header();

   $current_page = get_queried_object();
    $category     = $current_page->slug;
    $category_name =  $current_page->name; 

    $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
    $query = new WP_Query( 
        array(
            'paged'         => $paged, 
            'category_name' => $category,
            'order'         => 'desc',
            'post_type'     => 'post',
            'post_status'   => 'publish',
            'posts_per_page' => 8,
        )
    );



 ?>
<div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-news">
            <h1><?php echo $category_name ?></h1>
            <hr>
            <ul class="media-list text-black-category">
            <?php

        if ($query->have_posts()) {
               while ($query->have_posts()): $query->the_post(); 

               
               $url_thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
               if( empty( $url_thumb ) ){
                  $url_thumb = get_template_directory_uri() . "/images/logo.png";
               }else{
                 $url_thumb = $url_thumb[0];
               }

               
               
        ?>
               <li class="media">
                <a class="pull-left" href="<?php the_permalink(); ?>"><img class="media-object" src="<?php echo $url_thumb ?>" height="64" width="64"></a>
                <div class="media-body">
                  <h4 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <p class="data"><?php the_date();?></p>
                  <p><a href="<?php the_permalink(); ?>"><?php echo the_excerpt(); ?></a></p>
                </div>
              </li><hr>

        <?php
            endwhile;
         }
        ?>
              
              
            </ul>
            <ul class="pagination">
            <?php
            
            $big = 999999999; // need an unlikely integer

            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $query->max_num_pages
            ) );

             ?>
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
                    $resumo = substr( the_excerpt(), 150 );
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
          ?>
         <li class="media a-orange">
              <div align="center"><h4><a href="<?php echo esc_url( $category_link ); ?>" title="noticias" class="text-orange">Veja mais</a></h4></div>
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
          <li class="media a-orange">
           <div align="center"><h4><a href="<?php echo esc_url( $category_link ); ?>" title="publicacoes" class="text-orange">Veja mais</a></h4></div>
         </li>
            </ul>
		<?php dynamic_sidebar( 'banner-single-lateral1' ); ?>
		<hr /> 
		<?php dynamic_sidebar( 'banner-single-lateral2' ); ?>   
		<hr /> 
        </div>
        </div>
      </div>
    </div>



<?php
get_footer();
