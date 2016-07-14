<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Article_19
 */

get_header(); ?>


<!-- INICIO carrossel para DESKTOP -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="carroussel-a19" data-interval="3000" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'category_name' => 'destaque',
                            );

                        $loop_carrousel = new WP_Query($args);
                        $count_banner = 0;


                        while ($loop_carrousel->have_posts()) :$loop_carrousel->the_post();
                        $count_banner++;

                        $url_thumb = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );
                        if( $count_banner == 1){
                            $active = "active";
                        }else{
                            $active = " ";
                        }
                        ?>
                        <div class="item <?php echo $active ?>">
                           <a href="<?php the_permalink() ?>"><img src="<?php echo $url_thumb ?>"></a>

                            <div class="carousel-text-banner hidden-sm hidden-xs">
                                <div class="carousel-caption">
                                    <h2 class="text-center"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                                </div>
                            </div>
                            <!-- BEGIN carrossel RESPONSIVE -->
                            <div class="box-carrossel-responsivo hidden-lg hidden-md">
                                <div class="carousel-caption-responsivo">
                                 <h4 class="text-center"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                             </div>
                         </div>
                         <!-- END carrossel RESPONSIVE -->
                     </div>

                     <?php
                     endwhile;
                     wp_reset_query();
                     ?>  
                     <!-- BEGIN Indicators -->
                     <ol class="carousel-indicators hidden-sm hidden-xs">
                        <?php 
                        for ($i = 0; $i < $count_banner; $i++) {
                            ?>
                            <li data-target="#carroussel-a19" data-slide-to="<?php echo $i ?>"></li>
                            <?php
                        }
                        ?>
                    </ol>
                    <a class="left carousel-control" href="#carroussel-a19" data-slide="prev"><i class="icon-prev fa fa-5x fa-angle-left"></i></a>
                    <a class="right carousel-control" href="#carroussel-a19" data-slide="next"><i class="icon-next fa fa-5x fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
</BR>
<!-- FIM carrossel para DESKTOP -->
<!-- BEGIN SECONDARY HIGHLIGHTS DESKTOP SECTION -->
<div class="section hidden-xs">
    <div class="container">
        <div class="row destaque2">

            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'category_name' => 'secundario',
                );

            $loop_carrousel = new WP_Query($args);
            $count_banner = 0;


            while ($loop_carrousel->have_posts()) :$loop_carrousel->the_post();
            $count_banner++;

            $url_thumb = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );
            ?>
            <div class="col-md-4">
                <a href="<?php the_permalink(); ?>"><img src="<?php echo $url_thumb ?>" class="img-responsive"></a>
                <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                </h3>
                <div class="a-black">
                    <p class="a-black"><a href="<?php the_permalink() ?>"><?php the_excerpt(); ?></a></p>
                </div>
                <div class="date-news"><?php echo get_the_date( 'd-m-Y'  ,$post->ID); ?></div>
            </div>
            <?php
            endwhile;
            wp_reset_query();
            ?> 

        </div>
    </div>
</div>
<!-- END SECONDARY HIGHLIGHT DESKTOP SECTION -->
<!-- BEGIN SECONDARY HIGHLIGHT RESPONSIVE SECTION -->
 <div class="section hidden-lg hidden-md">
              <div class="container">
                  <div class="row">
                        <div class="col-md-3 title-box">
                           <ul class="media-list">
              <?php
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'category_name' => 'secundario',
                );

              $loop_carrousel = new WP_Query($args);
              $count_banner = 0;


              while ($loop_carrousel->have_posts()) :$loop_carrousel->the_post();
              $count_banner++;

              $url_thumb = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );
              ?>
              <li>
                  <!-- <div class="media-body">-->
                  <a href="<?php the_permalink() ?>"><img class="media_secondary_responsive" src="<?php echo $url_thumb ?>"></a>

                  <a href="<?php the_permalink() ?>"><span class="media-secondary-heading-h4 text-danger"><?php the_title(); ?></a>

                  <p class="secondary_hg_responsive_date a-black"><?php echo get_the_date( 'd-m-Y'  ,$post->ID); ?></p>
                  <p class="secondary_hg_responsive a-black"><?php the_excerpt(); ?></p>
                  <!-- </div>-->
              </li>
              <hr></hr>
              <?php
              endwhile;
              wp_reset_query();
              ?> 
          </ul>
      </div>
  </div>
</div>
</div>  
<div class="section hidden-xs">
   <div class="container">
        <div class="row">
            <div class="col-md-12">
              <?php dynamic_sidebar( 'banner-home1' ); ?>
            </div>
        </div>
    </div>
</div>



<!-- FIM Destaque eventual para DESKTOP -->
<!-- INICIO Destaque eventual para responsivo -->
<div class="section hidden-lg hidden-md hidden-sm">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php dynamic_sidebar( 'banner-home1-respon' ); ?>      
      </div>
    </div>
  </div>
</div>
<!-- FIM Destaque eventual para responsivo -->
<!-- INICIO sessão VIDEOS -->
    <div class="section">
      <div class="container">
        <div class="row">

          <div class="col-md-12 box-orange-artigo">
            <a href="blog/category/artigo19tv"><img style="width:250px;" src="<?php bloginfo('template_url'); ?>/cat-img/4.svg" title="Artigo 19 na TV" alt="img"/></a>
          </div>

          <div class="col-md-12">
            <p></p>
          </div>

           <?php
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'category_name' => 'artigo19tv',
              );

              $loop_tv = new WP_Query($args);
              $primeiro_item = 1;

              while ($loop_tv->have_posts()) :$loop_tv->the_post();

              $url_thumb = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );
              ?>
              <?php

                if($primeiro_item == 1){
               ?>
                  <div class="col-md-8">
                       <div class="embed-responsive embed-responsive-16by9">
                           <?php  the_content(); ?>
                        </div>
                </div>

              <div class="col-md-4">
               <?php
                $primeiro_item = 2;
               
                } else{

               ?>
                <div class="embed-responsive embed-responsive-16by9 hidden-sm hidden-xs">
                  <?php  the_content(); ?>
                </div>
                <p></p>

              <?php
              } 
              endwhile;
              wp_reset_query();
              ?>
	           </div>

        </div>
      </div>
    </div>

<!--- FIM sessão VIDEOS --->
<!-- BEGIN Publicacoes SECTION -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 title-box">
                <h3>
                    <b>
                        <a href="blog/category/publicacoes">PUBLICAÇÕES</a>
                    </b>
                </h3>
                <div class="box-publicacoes">
                    <ul class="media-list">
                      <?php
                        $args = array(
                          'post_type' => 'post',
                          'posts_per_page' => 5,
                          'category_name' => 'publicacoes',
                        );

                        $loop_publicacoes = new WP_Query($args);

                        while ($loop_publicacoes->have_posts()) :$loop_publicacoes->the_post();
                        ?>
                        <li class="media">
                            <a><i class="fa fa-2x fa-fw text-muted fa-file-text pull-left"></i></a>
                            <div class="media-body">
                                <h3 class="media-heading text-danger">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                            </div>
                        </li>
                        <?php
                        endwhile;
                        wp_reset_query();
                        ?>
                    </ul>
                </div>
            </div>
            <!-- END PUBLICACOES SECTION -->
            <!-- BEGIN IMPRENSA SECTION -->
            <div class="col-md-3 title-box">
                <h3>
                    <b>
                        <a href="blog/category/artigo19namidia">NA MÍDIA</a>
                    </b>
                </h3>
                <ul class="media-list">
                  <?php
                        $args = array(
                          'post_type' => 'post',
                          'posts_per_page' => 4,
                          'category_name' => 'artigo19namidia',
                        );

                        $loop_namidia = new WP_Query($args);

                        while ($loop_namidia->have_posts()) :$loop_namidia->the_post();

                        $url_thumb = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );
                  ?>
                  <li class="media">
                        <a class="pull-left" href="<?php the_permalink(); ?>">
                          <img class="media-object" src="<?php echo $url_thumb; ?>" height="64" width="64"></a>
                        <div class="media-body">
                            <a href="<?php the_permalink(); ?>"><h4 class="media-heading text-danger">
                               <?php the_title(); ?>
                            </h4></a>
                        </div>
                    </li>
                  <?php
                    endwhile;
                    wp_reset_query();
                  ?>
                    </ul>
                </div>
                <!--END IMPRENSA SECTION -->
                <!-- BEGIN FORMS SECTION -->
                <div class="col-md-3">
                    <h3><br> </h3>
                    <?php dynamic_sidebar( 'banner-home-lateral1' ); ?>
                    <br>  
                    <?php dynamic_sidebar( 'banner-home-lateral2' ); ?>   
               </div>
            </div>
        </div>
    </div>
    <!-- END FORMS SECTION -->
<!-- INICIO sessão PROJETO -->
    <div class="section">
      <div class="container">
         <div class="row">
           <div class="col-md-12 title-box">
             <h3><b><a href="blog/category/areas">PROJETOS</a></b></h3>
	   </div>
          
	<div class="col-md-12 title-box"> 
        <?php
                        $args = array(
                          'post_type' => 'post',
                          'posts_per_page' => 4,
                          'category_name' => 'areas',
                        );

                        $loop_projetos = new WP_Query($args);

                        while ($loop_projetos->have_posts()) :$loop_projetos->the_post();

                        $url_thumb = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );
                  ?>
                  <div class="col-md-3-projetos">
                      <div class="min-3md-box-home">
                        <?php 
                            $link = get_post_meta($post->ID, 'link', true);
                        ?>
                        <a href="<?php  echo $link  ?>" target="_blank" >
                           <img src="<?php echo $url_thumb ?>" class="img-responsive">
                              <p class="title areas"><b><?php the_title(); ?></b></p>
                              <BR>
                              <p class="corpo-areas"><?php the_excerpt(); ?></p>
                        </a>
			               </div>
                  </div>
                  <?php
                    endwhile;
                    wp_reset_query();
                  ?>
	</div>
	
        </div>
      </div>
    </div>
    <!-- END PROJETO SECTION -->
    <?php
    get_footer();
