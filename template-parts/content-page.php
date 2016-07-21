<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Article_19
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-top:-20px">
	    <h1 class="entry-title"><?php the_title(); ?></h1>

            <hr />
           		<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-float' ) ); ?>
           		<?php the_content( ); ?>
            <hr />
</article><!-- #post-## -->


