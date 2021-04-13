<?php
/**
 * ready functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ready
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'ready_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ready_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ready, use a find and replace
		 * to change 'ready' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ready', get_template_directory() . '/languages' );

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
		add_theme_support( 'custom-header');
		add_theme_support( 'custom-background');
		add_theme_support( 'custom-logo');
		add_theme_support( 'menus' );
		add_theme_support( 'widgets' );
		add_theme_support( 'post-formats',['video','audio','gallery','quote','aside'] );
		

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'main-menu' => 	 'Main Menu',
				'footer-menu' => 'Footer Menu'
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

	

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */





    /*-----------  This is the custom post type register ------------------*/


    register_post_type('htop',[

    	'public'			=>true,
    	'labels'			=>

    	[

    		'name'		 =>'Services ',
    		'add_new'	 =>'Add new Services',
    		'all_items'  =>'All Services list',
    		'add_new_item'=>'Add new Services',
    		'featured_image'=>'Services Image',
    		'set_featured_image'=>'upload  Services image',
    		'remove_featured_image'=>'remove Services image',



    	],

    	'supports'  =>['title','editor','thumbnail'],
    	'menu_position'=>20,
    	'menu_icon'    =>'dashicons-welcome-learn-more'



    ]);

  register_post_type('main',[

    	'public'			=>true,
    	'labels'			=>

    	[

    		'name'		 =>'Main Services ',
    		'add_new'	 =>'Add Main Services',
    		'all_items'  =>'All Main Services',
    		'add_new_item'=>'Add Main Services',
    		'featured_image'=>'Main Services Image',
    		'set_featured_image'=>' Main Services image',
    		'remove_featured_image'=>'remove Services image',



    	],

    	'supports'  =>['title','editor'],
    	'menu_position'=>20,
    	'menu_icon'    =>'dashicons-welcome-learn-more'



    ]);
  register_post_type('clint',[

    	'public'			=>true,
    	'labels'			=>

    	[

    		'name'		 =>'Our Clint ',
    		'add_new'	 =>'Add Main Clint',
    		'all_items'  =>'All Main Clint',
    		'add_new_item'=>'Add Main Clint',
    		'featured_image'=>'Main Clint Image',
    		'set_featured_image'=>' Main Clint image',
    		'remove_featured_image'=>'remove Clint image',



    	],

    	'supports'  =>['title','editor','thumbnail'],
    	'menu_position'=>20,
    	'menu_icon'    =>'dashicons-welcome-learn-more'



    ]);

  register_post_type('ccon',[

    	'public'			=>true,
    	'labels'			=>

    	[

    		'name'		 =>'Our Clint Condition ',
    		'add_new'	 =>'Add Clint Condition',
    		'all_items'  =>'All Clint Condition',
    		'add_new_item'=>'Add  Clint Condition'
    		

    	],

    	'supports'  =>['title'],
    	'menu_position'=>20,
    	'menu_icon'    =>'dashicons-welcome-learn-more'



    ]);


  register_post_type('test',[

    	'public'			=>true,
    	'labels'			=>

    	[

    		'name'		 =>'Our Tesimonials ',
    		'add_new'	 =>'Add Tesimonials',
    		'all_items'  =>'All Tesimonials',
    		'add_new_item'=>'Add  Tesimonials'
    		

    	],

    	'supports'  =>['title'],
    	'menu_position'=>20,
    	'menu_icon'    =>'dashicons-welcome-learn-more'



    ]);

  register_post_type('company',[

    	'public'			=>true,
    	'labels'			=>

    	[

    		'name'		 =>'Our Company content ',
    		'add_new'	 =>'Add Company content',
    		'all_items'  =>'All Company content',
    		'add_new_item'=>'Add  Company content'
    		

    	],

    	'supports'  =>['title','editor'],
    	'menu_position'=>20,
    	'menu_icon'    =>'dashicons-welcome-learn-more'



    ]);

  register_post_type('news',[

    	'public'			=>true,
    	'labels'			=>

    	[

    		'name'		 =>'Our Wise News ',
    		'add_new'	 =>'Add Wise News',
    		'all_items'  =>'All Wise News',
    		'add_new_item'=>'Add  Wise News'
    		

    	],

    	'supports'  =>['title','editor'],
    	'menu_position'=>20,
    	'menu_icon'    =>'dashicons-welcome-learn-more'



    ]);


  register_post_type('slider',[

    	'public'			=>true,
    	'labels'			=>

    	[

    		'name'		 =>'Our Wise slider ',
    		'add_new'	 =>'Add Wise slider',
    		'all_items'  =>'All Wise slider',
    		'add_new_item'=>'Add  Wise slider'
    		

    	],

    	'supports'  =>['title','editor','thumbnail'],
    	'menu_position'=>20,
    	'menu_icon'    =>'dashicons-welcome-learn-more'



    ]);








		
	}
endif;
add_action( 'after_setup_theme', 'ready_setup' );








/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function ready_widgets_init() {
	register_sidebar(
		array(
			'name'          => 'Footer Widget',
			'id'            => 'fw',
			'description'   => esc_html__( 'Add widgets here.', 'ready' ),
			'before_widget' => '<article class="col-1-4">',
			'after_widget'  => '</div></article>',
			'before_title'  => '<div class="wrap-col"><h5>',
			'after_title'   => '</h5>',
		)
	);
}
add_action( 'widgets_init', 'ready_widgets_init' );














/**
 * Enqueue scripts and styles for admin pannel
 */


function admin_css_js_links(){

	wp_enqueue_script('custom-js', get_template_directory_uri(). '/js/custom.js');


}
add_action('admin_enqueue_scripts','admin_css_js_links');






/**
 * Enqueue scripts and styles for design pannel

    <script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
    <script src="js/Kozuka_Gothic_Pro_OpenType_300.font.js" type="text/javascript"></script>

    <script src="js/Kozuka_Gothic_Pro_OpenType_500.font.js" type="text/javascript"></script>
	<script src="js/Kozuka_Gothic_Pro_OpenType_700.font.js" type="text/javascript"></script>
    <script src="js/Kozuka_Gothic_Pro_OpenType_900.font.js" type="text/javascript"></script> 
    
    <script src="js/FF-cash.js" type="text/javascript"></script>     
    <script src="js/easyTooltip.js" type="text/javascript"></script> 
    <script src="js/script.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>

 */

function ready_scripts() {

	
    wp_enqueue_style('wise-reset', get_template_directory_uri(). '/css/reset.css');                     
    wp_enqueue_style('wise-zerogrid', get_template_directory_uri(). '/css/zerogrid.css');                     
    wp_enqueue_style('wise-responsive', get_template_directory_uri(). '/css/responsive.css');                     
    wp_enqueue_style('wise-style', get_template_directory_uri(). '/css/style.css');                         
    wp_enqueue_style('sylesheet',  get_stylesheet_uri());


	wp_enqueue_script('jquery'); 
	wp_enqueue_script('cufon-yui', get_template_directory_uri(). '/js/cufon-yui.js', ['jquery'], true, true);
	wp_enqueue_script('cufon-replace', get_template_directory_uri(). '/js/cufon-replace.js', ['jquery'], true, true);
	wp_enqueue_script('Kozuka_Gothic', get_template_directory_uri(). '/js/Kozuka_Gothic_Pro_OpenType_300.font.js', ['jquery'], true, true);
	wp_enqueue_script('Kozuka_Gothic_Pro', get_template_directory_uri(). '/js/Kozuka_Gothic_Pro_OpenType_500.font.js', ['jquery'], true, true);
	wp_enqueue_script('OpenType', get_template_directory_uri(). '/js/Kozuka_Gothic_Pro_OpenType_700.font.js', ['jquery'], true, true);
	wp_enqueue_script('Pro_Open', get_template_directory_uri(). '/js/Kozuka_Gothic_Pro_OpenType_900.font.js', ['jquery'], true, true);
	wp_enqueue_script('FF-cash', get_template_directory_uri(). '/js/FF-cash.js', ['jquery'], true, true);
	wp_enqueue_script('easyTooltip', get_template_directory_uri(). '/js/easyTooltip.js', ['jquery'], true, true);
	wp_enqueue_script('script', get_template_directory_uri(). '/js/script.js', ['jquery'], true, true);
	wp_enqueue_script('mediaqueries', get_template_directory_uri(). '/js/css3-mediaqueries.js', ['jquery'], true, true);
	wp_enqueue_script('main', get_template_directory_uri(). '/js/main.js', ['jquery'], true, true);
 



}
add_action( 'wp_enqueue_scripts', 'ready_scripts' );



/**
       link with redux
 */


require get_template_directory() . '/inc/redux/ReduxCore/framework.php';
require get_template_directory() . '/inc/redux/sample/config.php';


/**
         link with cmb.

 **/

require get_template_directory() . '/inc/cmb/init.php';
require get_template_directory() . '/inc/cmb/cmb-config.php';


/**
         link with tgm.

 **/

require get_template_directory() . '/inc/tgm/example.php';






/**
         link with shortcode.

 **/
require get_template_directory() . '/inc/shortcode/serve.php';
require get_template_directory() . '/inc/shortcode/contact.php';
require get_template_directory() . '/inc/shortcode/company.php';
require get_template_directory() . '/inc/shortcode/chome.php';

       //shortcode linkup this sections


/**
         link with widgets.

 **/

  //widgrts linkup this sections

         
// admin scripts 
	
	function admin_backend_scripts(){ 

			if( get_post_type() == 'post' ) :

		?>

		<script>
			

			(function($){

				$(document).ready(function(){


					$('#comet-video').hide();
					$('#comet-audio').hide();
					$('#comet-gallery').hide();



					var idd =  $("input[class='post-format']:checked").attr('id');

					if( idd == 'post-format-video' ){

						$('#comet-video').show();
					}else{

						$('#comet-video').hide();
					}

					if( idd == 'post-format-audio' ){

						$('#comet-audio').show();
					}else{

						$('#comet-audio').hide();
					}

					if( idd == 'post-format-gallery' ){

						$('#comet-gallery').show();
					}else{

						$('#comet-gallery').hide();
					}

					$('input.post-format').change(function(){

						var idd =  $("input[class='post-format']:checked").attr('id');

						if( idd == 'post-format-video' ){

							$('#comet-video').show();
						}else{

							$('#comet-video').hide();
						}

						if( idd == 'post-format-audio' ){

							$('#comet-audio').show();
						}else{

							$('#comet-audio').hide();
						}

						if( idd == 'post-format-gallery' ){

							$('#comet-gallery').show();
						}else{

							$('#comet-gallery').hide();
						}

					});


				});


			})(jQuery)



		</script>

	<?php 

	endif;

} 
	add_action('admin_print_scripts','admin_backend_scripts', 1000);