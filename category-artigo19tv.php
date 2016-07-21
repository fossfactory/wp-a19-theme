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
          <div class="col-md-9 text-news">
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
            		<?php if (function_exists("pagination")) {
			 pagination($additional_loop->max_num_pages);
		} ?>
            </ul>
          </div>

<?php
get_sidebar();
get_footer();
