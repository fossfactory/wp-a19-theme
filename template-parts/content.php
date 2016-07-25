<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Article_19
 */
$categories = get_the_category();
$categoria =  $categories[0]->name;
$categoria_slug = $categories[0]->slug;
$post_id = get_the_id();
?>

<script type='text/javascript' src='https://code.jquery.com/jquery-git.min.js'></script>
<script type='text/javascript'>
jQuery(document).ready(function ($) {
     $("img").removeAttr("height width");

});
</script>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-9 text-news">
					<header class="entry-header">
						<?php
							if ( is_single() ) {
								the_title( '<h1 class="entry-title">', '</h1>' );
							} else {
								the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
							}

						if ( 'post' === get_post_type() ) : ?>
						<div style="float:left; margin-right: 10px;" class="text-orange">
                                         <h4 class="text-orange text-danger"><?php the_date(); ?> - <b> <?php echo $categoria; ?></b></h4>
                                </div>

						<?php
						endif; ?>
					</header><!-- .entry-header -->

					<div style="float: right; margin-top:7px">
					  <a href="whatsapp://send?text=<?php the_title();?> - <?php echo wp_get_shortlink();?>" data-action="share/whatsapp/share"><i class="fa fa-1x fa-fw fa-lg fa-whatsapp text-danger"></i></a>
					  <a href="https://twitter.com/home/?status=<?php the_title();?> - <?php echo wp_get_shortlink();?>" title="Tweet!"><i class="fa fa-1x fa-fw fa-lg fa-twitter text-danger"></i></a>
					  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo wp_get_shortlink();?>" title="Compartilhe no Facebook!"><i class="fa fa-1x fa-fw fa-lg fa-facebook text-danger"></i></a>
					</div>
					
				<br />
                                <hr />

					<div class="materia-conteudo">
						  <?php the_content(); ?>
					</div>
					<hr />           
					<div style="float:right; margin-top:2px; margin-bottom:1px">
						<a href="whatsapp://send?text=<?php the_title();?> - <?php echo wp_get_shortlink();?>" data-action="share/whatsapp/share"><i class="fa fa-1x fa-fw fa-lg fa-whatsapp text-danger"></i></a>
						<a href="https://twitter.com/home/?status=<?php the_title();?> - <?php echo wp_get_shortlink();?>" title="Twitter!"><i class="fa fa-1x fa-fw fa-lg fa-twitter text-danger"></i></a>
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo wp_get_shortlink();?>" title="Compartilhe no Facebook!"><i class="fa fa-1x fa-fw fa-lg fa-facebook text-danger"></i></a>
					</div>


					
					<div style="float:left; margin-top:9px; margin-bottom:2px;">
						<b>LINK: </b><?php echo wp_get_shortlink(); ?>
					</div>
            
            

					<!-- INICIO Notícias Relacionadas -->
					<!-- <div class="title-box hidden-sm hidden-md">-->
					<div class="row">
					      <?php
					      $tags = wp_get_post_tags($post->ID);
					      if ($tags) {

					      $first_tag = $tags[0]->term_id;
					      $args=array(
					      'tag__in' => array($first_tag),
					      'post__not_in' => array($post->ID),
					      'posts_per_page'=>1,
					      'suppress_filters' => 0,
					      );
					      $my_query = new WP_Query($args);
					      if( $my_query->have_posts() ) {
					      while ($my_query->have_posts()) : $my_query->the_post(); 
					      
					      ?>
						    <div class="col-md-12">
						    <h4 class="hidden-sm hidden-xs hidden-md"><b>Notícias relacionadas</b></h4>
						    </div>
					      <?php
					      endwhile;
					      }
					      wp_reset_query();
					      }
					      ?>

					      <?php
					      $tags = wp_get_post_tags($post->ID);
					      if ($tags) {

					      $first_tag = $tags[0]->term_id;
					      $args=array(
					      'tag__in' => array($first_tag),
					      'post__not_in' => array($post->ID),
					      'posts_per_page'=>4,
					      'caller_get_posts'=>1,
					      'orderby'=>'rand',
					      'suppress_filters' => 0,
					      );
					      $my_query = new WP_Query($args);
					      if( $my_query->have_posts() ) {
					      while ($my_query->have_posts()) : $my_query->the_post(); 
					      $url_thumb = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );
					      
					      ?>

					      <div class="col-md-3 hidden-xs hidden-sm hidden-md">
							<a href="<?php the_permalink(); ?>"><img src="<?php echo $url_thumb ?>" class="img-responsive"></a>
							<h4 class="a-orange"><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h4>
					      </div>
		            
					      <?php
					      endwhile;
					      }
					      wp_reset_query();
					      }
					      ?>
					</div>
					
					<hr /> 
					
					      <!-- BEGIN NOTICIAS RELACIONADAS RESPONSIVE SECTION -->
					<div class="section hidden-lg hidden-md">
					  <div class="container">
					      <div class="row">
						<div class="col-md-3 title-box hidden-lg hidden-md">
						    <h3><b>Notícias relacionadas</b></h3>
						    <ul class="media-list">
							  <?php
							      $args = array(
								'post_type' => 'post',
								'post__not_in' => array( $post_id ) ,
								'posts_per_page' => 4,
								'category_name' => $categoria_slug

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
							      <li class="mhg">
								  <!-- <div class="media-body">-->
								  <a href="<?php the_permalink(); ?>"><img class="media_secondary_responsive" src="<?php echo $url_thumb; ?>"></a>
								  <a href="<?php the_permalink(); ?>"><span class="media-secondary-heading-h4 text-danger"><?php the_title( ); ?></span></a>
								  <p class="secondary_hg_responsive_date a-black"><?php the_date(); ?></p>
								  <!-- </div>-->
							      </li>
							  <hr />
								    <?php
								      endwhile;
								      wp_reset_query();
								    ?>
						    </ul>
						</div>
					      </div>
					  </div>
					</div>
					
					<!-- END NOTICIAS RELACIONADAS RESPONSIVE SECTION -->
      
					<!-- BEGIN COMMENTS SECTION -->
					<div class="comentario">
					<?php
							
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
					?>
					</div>
					<!-- end comments section -->
				</div>
				<!-- FIM Notícias Relacionadas -->
			</div>
		</div>
	</div>
</article><!-- #post-## -->
 
