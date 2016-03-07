<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Article_19
 */

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
              </li><hr
