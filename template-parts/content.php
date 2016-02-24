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
				</div><!-- .entry-meta -->
				<?php
				endif; ?>
			</header><!-- .entry-header -->

            <div style="float: right; margin-top:7px;">
               <a href="whatsapp://send?text=Compartilhe a Artigo 19!" data-action="share/whatsapp/share"><i class="fa fa-1x fa-fw fa-lg fa-whatsapp text-danger"></i></a>
               <a target="_blank" href="http://twitter.com/artigo19"><i class="fa fa-1x fa-fw fa-lg fa-twitter text-danger"></i></a>
               <a target="_blank" href="https://www.facebook.com/artigo19brasil"><i class="fa fa-1x fa-facebook fa-fw fa-lg text-danger"></i></a>
               <a href="#"><i class="fa fa-1x fa-fw fa-google-plus-square fa-lg hub text-danger"></i></a>
            </div>
            <br>
            <hr>
            </hr>
           		<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-float' ) ); ?>
           		<?php the_content( ); ?>
            <hr>
            <div style="float:right; margin-top:2px; margin-bottom:1px;">
               <a href="whatsapp://send?text=Compartilhe a Artigo 19!" data-action="share/whatsapp/share"><i class="fa fa-1x fa-fw fa-lg fa-whatsapp text-danger"></i></a>
               <a target="_blank" href="http://twitter.com/artigo19"><i class="fa fa-1x fa-fw fa-lg fa-twitter text-danger"></i></a>
               <a target="_blank" href="https://www.facebook.com/artigo19brasil"><i class="fa fa-1x fa-facebook fa-fw fa-lg text-danger"></i></a>
               <a href="#"><i class="fa fa-1x fa-fw fa-google-plus-square fa-lg hub text-danger"></i></a>
      
            </div>
            <div style:"float:left; margin-top:9px; margin-bottom:2px;"><?php echo wp_get_shortlink(); ?></div>
         <hr>
         <!-- INICIO Notícias Relacionadas -->
         <!-- <div class="title-box hidden-sm hidden-md">-->
         <div class="row">
            <div class="col-md-12">
               <h4 class="hidden-sm hidden-xs hidden-md"><b>Notícias relacionadas</b></h4>
            </div>
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
                  <div class="col-md-3 hidden-xs hidden-sm hidden-md">
		               <a href="<?php the_permalink(); ?>"><img src="<?php echo $url_thumb ?>" class="img-responsive"></a>
		               <h4 class="a-orange"><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h4>
		            </div>
          <?php
            endwhile;
            wp_reset_query();
          ?>
	    </div>
       <hr /> 
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
	                      'category_name' => $categoria_slug,
	                      
	                    );

	                    $loop_categoria = new WP_Query($args);

	                    while ($loop_categoria->have_posts()) :$loop_categoria->the_post();

	                    $url_thumb = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );
			        ?>
			            <li>
	                        <!-- <div class="media-body">-->
	                        <a href="<?php the_permalink(); ?>"><img class="media_secondary_responsive" src="<?php echo $thumbnail; ?>"></a>
	                        <a href="<?php the_permalink(); ?>"><span class="media-secondary-heading-h4 text-danger"><?php the_title( ); ?></span></a>
	                        <p class="secondary_hg_responsive_date a-black"><?php the_date(); ?></p>
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
      <!-- END NOTICIAS RELACIONADAS RESPONSIVE SECTION -->
      <!-- BEGIN SECTION ULTIMAS NOTICIAS -->
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
         <!--                    <a href="#"><img src="imagens_posts/banner.png" class="img-responsive"></a>-->
         <div class="hidden-xs hidden-sm hidden-md">
         	<?php dynamic_sidebar( 'banner-single-lateral1' ); ?>
            <br>  
            <?php dynamic_sidebar( 'banner-single-lateral2' ); ?>   
         </div>
         <hr>
         <!--<a href="#"><img src="imagens_posts/artigo19-tv_banner.png" class="img-responsive"></a>-->
      </div>
   </div>
</div>
</div>

</article><!-- #post-## -->
