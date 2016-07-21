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
                              
                            if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 6 ); }

                        ?>
                  </div>
                  
	  <?php get_sidebar(); ?>
              </div>
            </div>

            <?php 
            endwhile; // End of the loop.
            ?>


<?php
get_footer();
