<?php
/**
 * draft functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package draft
 */

if ( ! function_exists( 'draft_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function draft_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on draft, use a find and replace
		 * to change 'draft' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'draft', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main Menu', 'draft' ),
		) );


		function main_default(){
			
			echo '<ul class="nav">';
			
			if(is_user_logged_in() && is_front_page()){
				echo '<li class="current-menu-item"><a href="wp-admin/nav-menus.php">Create Menu</a></li>';
				
			}else{
				
				echo '<li><a href="'.home_url().'">Home</a></li>';
			}
			
			
			echo '</ul>';
			
			
		}
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'draft_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'draft_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function draft_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'draft_content_width', 640 );
}
add_action( 'after_setup_theme', 'draft_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function draft_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'draft' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'draft' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'draft_widgets_init' );

/**
 * Enqueue scripts and styles.
 */



function draft_scripts() {

	wp_enqueue_style( 'draft-awesome', get_template_directory_uri().'/css/font-awesome.min.css' );
	wp_enqueue_style( 'draft-bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style( 'draft-animate', get_template_directory_uri().'/css/animate.css' );
	wp_enqueue_style( 'draft-carousel', get_template_directory_uri().'/css/owl.carousel.min.css' );

	wp_enqueue_style( 'draft-style', get_stylesheet_uri() );

	wp_enqueue_style( 'draft-responsive', get_template_directory_uri().'/css/responsive.css' );

	wp_enqueue_script( 'draft-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'draft-wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'draft-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'draft-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );
	



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'draft_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}








/*theme options*/


add_action('admin_print_scripts', function(){ ?>
			
			<style>
				
				
				.logoimage {
					width: 200px;
					position: relative;
				}
				.logoimage a.close01{
					position: absolute;
					top: 0;
					right: 0;
					color: red;
					text-decoration: none;
					font-size: 17px;
					font-weight: bold;
				}
				.logoimage a{
					position: absolute;
					top: 0;
					right: 0;
					color: red;
					text-decoration: none;
					font-size: 17px;
					font-weight: bold;
				}
				.logoimage img{
					width: 100%;
				}

			</style>


		<?php });

add_action('admin_enqueue_scripts', function(){



			wp_enqueue_style('wp-color-picker');
			wp_enqueue_script('wp-color-picker');


			wp_enqueue_media();
			wp_enqueue_script('opt-js', get_template_directory_uri().'/js/opt.js');


		});



add_action('admin_init',function(){


	register_setting('header-opt-group','header-opt-val');
	add_settings_section('header-options-section','Header Options',function(){

	},'header-options');


	add_settings_field('logo-upload1','Heder Logo Upload 01',function(){  

		$loaoup01 = get_option('header-opt-val');

		?>
	<a id="headerlogo01" class="button button-primary" href="#">Logo Upload</a> <br>  <br>
	<input id="loadupload01" name="header-opt-val[logoup01]" value="<?php echo $loaoup01['logoup01']; ?>" class="reglar-text" type="hidden" > <br>
	<?php if($loaoup01['logoup01']){ ?>
	<div class="logoimage">
	<img id="imgupload01" src="<?php echo $loaoup01['logoup01']; ?>" alt=""> <br>
	<a class="close01"href="#">X</a>
	</div>
	<?php } ?>
	<?php },'header-options','header-options-section');



	add_settings_field('logo-upload2','Heder Logo Upload 02',function(){  

		$loaoup02 = get_option('header-opt-val');

		?>
	<a id="headerlogo02" class="button button-primary" href="#">Logo Upload</a> <br>  <br>
	<input id="loadupload02" name="header-opt-val[logoup02]" value="<?php echo $loaoup02['logoup02']; ?>" class="reglar-text" type="hidden" > <br>
	<?php if($loaoup02['logoup02']){ ?>
	<div class="logoimage">
	<img id="imgupload02" src="<?php echo $loaoup02['logoup02']; ?>" alt=""> <br>
	<a class="close02"href="#">X</a>
	</div>
	<?php } ?>
	<?php },'header-options','header-options-section');


	// social link

	register_setting('social-group','social-val');
	add_settings_section('social-section','Social Links', function(){


	},'social-options');
	add_settings_field('fb','Facebook', function(){ 
			$fb = get_option('social-val');
		?>

		<input name="social-val[fb]" value="<?php if( isset($fb) ){  echo $fb['fb']; } ?>" class="regular-text" type="text">

	<?php } ,'social-options','social-section');

	add_settings_field('tw','Twitter', function(){ 
			$tw = get_option('social-val');
		?>

		<input name="social-val[tw]" value="<?php if( isset($tw) ){  echo $tw['tw']; } ?>" class="regular-text" type="text">

	<?php } ,'social-options','social-section');


	add_settings_field('yu','Youtube', function(){ 
			$yu = get_option('social-val');
		?>

		<input name="social-val[yu]" value="<?php if( isset($yu) ){  echo $yu['yu']; } ?>" class="regular-text" type="text">

	<?php } ,'social-options','social-section');

	add_settings_field('lin','Linkedin', function(){ 
			$lin = get_option('social-val');
		?>

		<input name="social-val[lin]" value="<?php if( isset($lin) ){  echo $lin['lin']; } ?>" class="regular-text" type="text">

	<?php } ,'social-options','social-section');

	

	add_settings_field('ins','Instagram', function(){ 
			$ins = get_option('social-val');
		?>

		<input name="social-val[ins]" value="<?php if( isset($ins ) ){  echo $ins ['ins']; } ?>" class="regular-text" type="text">

	<?php } ,'social-options','social-section');



// footer logo link 


	register_setting('footer-opt-group','footer-opt-val');
	add_settings_section('footer-options-section','Footer Options',function(){

	},'footer-options');


	add_settings_field('flogo-upload1','Footer Logo Upload 01',function(){  

		$footerloaoup01 = get_option('footer-opt-val');

		?>
	<a id="footerlogo01" class="button button-primary" href="#">Logo Upload</a> <br>  <br>
	<input id="flogoupload01" name="footer-opt-val[floaoup01]" value="<?php echo $footerloaoup01['floaoup01']; ?>" class="reglar-text" type="hidden" > <br>
	<?php if($footerloaoup01['floaoup01']){ ?>
	<div class="logoimage">
	<img id="floaoup01" src="<?php echo $footerloaoup01['floaoup01']; ?>" alt=""> <br>
	<a class="floaoup01"href="#">X</a>
	</div>
	<?php } ?>
	<?php },'footer-options','footer-options-section');



	add_settings_field('flogo-upload2','Footer Logo Upload 02',function(){  

		$footerloaoup02 = get_option('footer-opt-val');

		?>
	<a id="footerlogo02" class="button button-primary" href="#">Logo Upload</a> <br>  <br>
	<input id="flogoupload02" name="footer-opt-val[floaoup02]" value="<?php echo $footerloaoup02['floaoup02']; ?>" class="reglar-text" type="hidden" > <br>
	<?php if($footerloaoup02['floaoup02']){ ?>
	<div class="logoimage">
	<img id="floaoup02" src="<?php echo $footerloaoup02['floaoup02']; ?>" alt=""> <br>
	<a class="floaoup02"href="#">X</a>
	</div>
	<?php } ?>
	<?php },'footer-options','footer-options-section');




	add_settings_field('flogo-upload3','Footer Logo Upload 03',function(){  

		$footerloaoup03 = get_option('footer-opt-val');

		?>
	<a id="footerlogo03" class="button button-primary" href="#">Logo Upload</a> <br>  <br>
	<input id="flogoupload03" name="footer-opt-val[floaoup03]" value="<?php echo $footerloaoup03['floaoup03']; ?>" class="reglar-text" type="hidden" > <br>
	<?php if($footerloaoup03['floaoup03']){ ?>
	<div class="logoimage">
	<img id="floaoup03" src="<?php echo $footerloaoup03['floaoup03']; ?>" alt=""> <br>
	<a class="floaoup03"href="#">X</a>
	</div>
	<?php } ?>
	<?php },'footer-options','footer-options-section');



	add_settings_field('flogo-upload4','Footer Logo Upload 04',function(){  

		$footerloaoup04 = get_option('footer-opt-val');

		?>
	<a id="footerlogo04" class="button button-primary" href="#">Logo Upload</a> <br>  <br>
	<input id="flogoupload04" name="footer-opt-val[floaoup04]" value="<?php echo $footerloaoup04['floaoup04']; ?>" class="reglar-text" type="hidden" > <br>
	<?php if($footerloaoup04['floaoup04']){ ?>
	<div class="logoimage">
	<img id="floaoup04" src="<?php echo $footerloaoup04['floaoup04']; ?>" alt=""> <br>
	<a class="floaoup04"href="#">X</a>
	</div>
	<?php } ?>
	<?php },'footer-options','footer-options-section');



	





});




add_action('admin_menu',function(){

	add_menu_page('Draft Options','Draft Options','manage_options','theme-opt','theme_opt_callback','dashicons-smiley',10);


	add_submenu_page('theme-opt','Header Options','Header Options','manage_options','header-options','theme_opt_callback');
	add_submenu_page('theme-opt','Social Link','Social Link','manage_options','social-options','theme_opt_callback');
	add_submenu_page('theme-opt','Footer Options','Footer Options','manage_options','footer-options','theme_opt_callback');
	add_submenu_page('theme-opt','Custom CSS','Custom CSS','manage_options','customcss-options','theme_opt_callback');
});

/*theme options call back*/ 

function theme_opt_callback(){ ?>


<div class="wrap"> 
	<h1>Draft Options </h1>

	<?php 

		if(isset($_GET['page'])){

			$activepage = $_GET['page'];
		}


	?>

	<h2 class="nav-tab-wrapper"> 
		<a class="nav-tab <?php if($activepage == 'header-options'){ echo 'nav-tab-active';} elseif($activepage == 'theme-opt'){echo 'nav-tab-active';}?>" href="?page=header-options">Header Options</a>
		<a class="nav-tab <?php if($activepage == 'social-options'){ echo 'nav-tab-active';} ?>" href="?page=social-options">Social Link</a>
		<a class="nav-tab <?php if($activepage == 'footer-options'){ echo 'nav-tab-active';} ?>" href="?page=footer-options">Footer Options</a>
		<a class="nav-tab <?php if($activepage == 'customcss-options'){ echo 'nav-tab-active';} ?>" href="?page=customcss-options">Custom CSS</a>
	</h2>
	<?php settings_errors(); ?>
	<form action="options.php" method="POST"> 

		<?php  

		

		if($activepage == 'header-options'){

			settings_fields('header-opt-group');

			do_settings_sections('header-options');

		}elseif($activepage == 'social-options'){

					settings_fields('social-group');
					do_settings_sections('social-options');

		}elseif($activepage == 'footer-options'){

			settings_fields('footer-opt-group');
			do_settings_sections('footer-options');

		}


		?>
		<?php submit_button(); ?>
	</form>

</div>




<?php
}