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

get_header(); ?>

            <?php
            while ( have_posts() ) : the_post();
            ?>

            <div class="section">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 text-news">
                    <div class="text">
                      <h1>Fale conosco</h1>
                      <p>Conheça o trabalho da ARTIGO 19, receba nossas informações.</p>

                      <p>Envie uma mensagem para a ARTIGO 19.</p>
                      </div>

                        <?php 
                              
                            if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); }

                        ?>
                  </div>
                   <div class="col-md-3 hidden-xs hidden-sm hidden-md">
         <div class="box-orange-sidebar">
            <h3 class=""><a href="">Últimas Notícias</a></h3>
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

                    $url_thumb = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );
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
                  <a href="<?php the_permalink(); ?>">
                  <?php 
                    $resumo = substr( the_excerpt(), 150 );
                    echo $resumo;
                  ?>
                 </a>
                 </p>
              </li>
          <?php
            endwhile;
            wp_reset_query();
          ?>

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

                      $url_thumb = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );
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
            </ul>
            <hr>
         </div>
                </div>
              </div>
            </div>

            <?php 
            endwhile; // End of the loop.
            ?>


<?php
get_footer();
