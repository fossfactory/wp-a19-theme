<?php
/**
 * Article 19 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Article_19
 */

if ( ! function_exists( 'article_19_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function article_19_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Article 19, use a find and replace
	 * to change 'article-19' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'article-19', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 64, 64);
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'article-19' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'article_19_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // article_19_setup
add_action( 'after_setup_theme', 'article_19_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function article_19_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'article_19_content_width', 640 );
}
add_action( 'after_setup_theme', 'article_19_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function article_19_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'article-19' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'article_19_widgets_init' );


/**
*
* Banner home 1
*/
function article_19_widgets_home() {
	register_sidebar( array(
		'name'          => esc_html__( 'Banner Home1', 'article-19' ),
		'id'            => 'banner-home1',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Banner Home1 Responsivo', 'article-19' ),
		'id'            => 'banner-home1-respon',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'article_19_widgets_home' );








/**
*
* Banner home Lateral 1
*/
function article_19_widgets_bannher_l1() {
	register_sidebar( array(
		'name'          => esc_html__( 'Banner Home Lateral1', 'article-19' ),
		'id'            => 'banner-home-lateral1',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'article_19_widgets_bannher_l1' );

/**
*
* Banner home Lateral 1
*/
function article_19_widgets_bannher_l2() {
	register_sidebar( array(
		'name'          => esc_html__( 'Banner Home Lateral2', 'article-19' ),
		'id'            => 'banner-home-lateral2',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'article_19_widgets_bannher_l2' );


/**
*
* Banner Single Lateral 1
*/
function article_19_widgets_bannher_single_l1() {
	register_sidebar( array(
		'name'          => esc_html__( 'Banner Single Lateral1', 'article-19' ),
		'id'            => 'banner-single-lateral1',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'article_19_widgets_bannher_single_l1' );

/**
*
* Banner home Lateral 1
*/
function article_19_widgets_bannher_single_l2() {
	register_sidebar( array(
		'name'          => esc_html__( 'Banner Single Lateral2', 'article-19' ),
		'id'            => 'banner-single-lateral2',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'article_19_widgets_bannher_single_l2' );


/**
*
* Banner Single Lateral 1
*/
function article_19_widgets_lista_categoria_single_l1() {
	register_sidebar( array(
		'name'          => esc_html__( 'Banner Lista Categoria Lateral1', 'article-19' ),
		'id'            => 'banner-lista-categoria-lateral1',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'article_19_widgets_lista_categoria_single_l1' );

/**
*
* Banner home Lateral 1
*/
function article_19_widgets_lista_categoria_single_l2() {
	register_sidebar( array(
		'name'          => esc_html__( 'Banner Lista Categoria Lateral2', 'article-19' ),
		'id'            => 'banner-lista-categoria-lateral2',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'article_19_widgets_lista_categoria_single_l2' );




/**
 * Enqueue scripts and styles.
 */
function article_19_scripts() {
	wp_enqueue_style( 'article-19-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'article-19-fonts', 'http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css' );	

	wp_enqueue_style( 'article-19-main',  get_template_directory_uri() . '/css/main.css' );	

	wp_enqueue_script( 'article-19-jquery', 'http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js', array(), '20151212', true );

	wp_enqueue_script( 'article-19-boostrap', 'http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array(), '20151212', true );
	
	wp_enqueue_script( 'data-scroll', get_template_directory_uri() . '/js/smooth-scroll.js' );

	/*
	 * Undescore.me
	 */
	wp_enqueue_script( 'article-19-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'article-19-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'article_19_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/*
* Includes Congelado: PostTypes, MetaBoxes, Actions,
*/
include get_template_directory() . '/inc/congelado-functions.php';


class My_Sub_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"dropdown-menu\" role=\"menu\">\n";
  }
  function end_lvl(&$output, $depth) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }
}


function change_submenu_class($menu) {  
  $menu = preg_replace('/ class="menu-item /','/ class="dropdown menu-item  ',$menu);  
  return $menu;  
}  
add_filter('wp_nav_menu','change_submenu_class');  


function add_menuclass( $ulclass ) {
  return preg_replace('/<a href="#"/', '<a class="dropdown-toggle fa fa-caret-down"  data-toggle="dropdown" role="button" aria-expanded="false"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');


function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Página ".$paged." de ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Anterior</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Próximo &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Último &raquo;</a>";
         echo "</div>\n";
     }
}
add_filter('wp_npagination','pagination');

// Override img caption shortcode to fix 10px issue.
add_filter('img_caption_shortcode', 'fix_img_caption_shortcode', 10, 3);

function fix_img_caption_shortcode($val, $attr, $content = null) {
    extract(shortcode_atts(array(
        'id'    => '',
        'align' => '',
        'width' => '',
        'caption' => ''
    ), $attr));

    if ( 1 > (int) $width || empty($caption) ) return $val;

    return '<div id="' . $id . '" class="wp-caption ' . esc_attr($align) . '" style="max-width: 90%;margin-left:-15px">' . do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
}