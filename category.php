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
            'posts_per_page' => 10,
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
                  $url_thumb = get_template_directory_uri() . "/cat-img/thumbnaillogo.png";
               }else{
                 $url_thumb = $url_thumb[0];
               }

               
               
        ?>
               <li class="media">
                <a class="pull-left" href="<?php the_permalink(); ?>"><img class="media-object" src="<?php echo $url_thumb ?>" height="64" width="64"></a>
                <div class="media-body">
                  <h4 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <p class="data"><strong><?php the_date();?></strong></p>
                  <p align="justify"><?php echo the_excerpt('',FALSE,''); ?></p>
                  <p><a href="<?php the_permalink(); ?>">Leia mais</a></p>
                </div>
              </li><hr>

        <?php
            endwhile;
         }
        ?>
              
              
            </ul>
            <div >
            <ul class="pagination">
            
<?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>

            </ul>
            </div>
          </div>
          
<!--          
          <div class="col-md-4">
            <div class="box-orange-artigo">
              <h3>Publicações</h3>
            </div>
            <br>
            <div class="box-sidebar-publicacoes">
              <ul class="media-list">
                <li class="media">
                  <a><i class="fa fa-2x fa-fw text-muted fa-caret-right pull-left"></i></a>
                  <div class="media-body">
                    <h4 class="media-heading text-danger">
                      <a href="pagina.html">Monitoramento da Lei de Acesso à Informação Pública em 2014</a>
                    </h4>
                  </div>
                </li>
               
              </ul>
              <hr>
            </div>
            -->
         <div class="col-md-3 hidden-xs hidden-sm hidden-md">
		  <?php if (in_category('11')) { ?>
		  <?php }else { ?>
		  <div class="box-orange-sidebar">
			<h3>Últimas Notícias</h3>
		  </div>
		  
		  <br />
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
         
         <?php } ?>

         <!-- END SECTION ULTIMAS NOTICIAS -->
         <!-- BEGIN SECTION PUBLICACOES-->
		  <?php if (in_category('16')) { ?>
		  <?php }else { ?>

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
            <?php } ?>
            
		<hr /> 
		<?php dynamic_sidebar( 'banner-single-lateral2' ); ?>   
		<hr /> 
		<?php dynamic_sidebar( 'banner-lista-categoria-lateral1' ); ?>

        </div>
        </div>
      </div>
            </div>


<?php
get_footer();
