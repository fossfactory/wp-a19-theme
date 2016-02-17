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
            'order'         => 'asc',
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

               $url_thumb = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );

               $content =  the_excerpt();
        ?>
               <li class="media">
                <a class="pull-left" href="<?php the_permalink(); ?>"><img class="media-object" src="<?php echo $url_thumb ?>" height="64" width="64"></a>
                <div class="media-body">
                  <h4 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <p><a href="<?php the_permalink(); ?>"><?php echo substr( $content, 50); ?></a></p>
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
            <?php dynamic_sidebar( 'banner-lista-categoria-lateral1' ); ?>
                        <hr> 
            <?php dynamic_sidebar( 'banner-lista-categoria-lateral2' ); ?> 

        </div>
        </div>
      </div>
    </div>




<?php
get_footer();