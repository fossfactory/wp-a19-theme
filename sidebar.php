<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Article_19
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

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
				<div align="center">
					<h4><a href="<?php echo esc_url( $category_link ); ?>" title="noticias" class="text-orange"><img src="<?php bloginfo('template_url'); ?>/images/mais.jpg">Veja mais</a></h4>
				</div>
			</li>
         
		      <?php } ?>

		      <!-- END SECTION ULTIMAS NOTICIAS -->
		      <!-- BEGIN SECTION PUBLICACOES-->
		      <?php if (in_category('16')) { ?>
		      <?php }else { ?>

		<div class="box-orange-sidebar hidden-xs hidden-sm hidden-md">
			<h3>Publicações</h3>
		</div>
		
		<br />
		
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
					<div align="center">
						 <h4><a href="<?php echo esc_url( $category_link ); ?>" title="publicacoes" class="text-orange"><img src="<?php bloginfo('template_url'); ?>/images/mais.jpg">Veja mais</a></h4>
					</div>
				</li>
			  <?php } ?>

			  <hr /> 
			  <?php dynamic_sidebar( 'banner-single-lateral2' ); ?>   
			  <hr /> 
		      
		      <?php if (in_category('6')) { ?>

		      <?php }else { ?>
			    <?php dynamic_sidebar( 'banner-lista-categoria-lateral1' ); ?>
		      <?php } ?>
		      
		</div>
	</div>

</div></div></div>
