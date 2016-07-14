<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Article_19
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div  id="top" class="section-danger2">
    <div class="container">
        <div class="row">
        <div class="col-md-8 hidden-xs text-right space-correction2">
                <a target="_blank" href="https://www.instagram.com/artigo19/"><i class="fa fa-2x fa-fw fa-instagram text-inverse"></i></a>
                <a target="_blank" href="http://twitter.com/artigo19"><i class="fa fa-2x fa-fw fa-twitter text-inverse"></i></a>
                <a target="_blank" href="https://www.facebook.com/artigo19brasil?_rdr=p"><i class="fa fa-2x fa-facebook fa-fw text-inverse"></i></a>
                <a target="_blank" href="<?php bloginfo('rss2_url'); ?>"><i class="fa fa-2x fa-fw fa-rss-square text-inverse"></i></a>
            </div>
            <div class="col-md-4 hidden-xs hidden-sm hidden-md text-right space-correction">
             <form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" role="search" >
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-btn">

                                <label for="s" class="assistive-text"></label>
                                <input type="text" class="field form-control" name="s" placeholder="Digite um termo de busca" value="" id="s" />
                                <input type="submit" class="submit btn btn-warning" name="submit" id="searchsubmit" value="buscar" />
                             
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--- end row -->
    </div>
</div>
<div  class="navbar navbar-default navbar-static-top">
    <div class="container correction-nav">
        <div class="navbar-header">
                <a href="/">
                  <span class="hidden-xs hidden-sm navbar-logo-desktop"></span>
                  <span class="hidden-lg hidden-md navbar-logo"></span>
                </a>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">

        <?php

            $defaults = array(
                'theme_location'  => '',
                'menu'            => 'menu-1',
                'container'       => 'div',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav navbar-right">%3$s</ul>',
                'depth'           => 0,
                'walker'          => new My_Sub_Menu()
            );

            wp_nav_menu( $defaults );

        ?>
		
	

            
        </div>
    </div>
</div>

