<?php 
/**
 * Enqueue scripts and styles.
 */
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function smartsaas_scripts() {
	wp_enqueue_style('google_font', '//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap');

	wp_enqueue_style( 'smartsaas-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'smartsaas-style', 'rtl', 'replace' );

	wp_enqueue_style('animate-css' ,get_template_directory_uri() .  '/assets/css/animate.css', array(), false);
	wp_enqueue_style('bootstrap-css' ,get_template_directory_uri() .'/assets/css/bootstrap.min.css', array(), false);
	wp_enqueue_style('all-min-css' ,get_template_directory_uri() .  '/assets/css/all.min.css', array(), false);
	wp_enqueue_style('icofont-css' ,get_template_directory_uri() .  '/assets/css/icofont.min.css', array(), false);
	wp_enqueue_style('lightcase-css' ,get_template_directory_uri() .'/assets/css/lightcase.css', array(), false);
	wp_enqueue_style('swiper-css' ,get_template_directory_uri() .   '/assets/css/swiper.min.css', array(), false);
	wp_enqueue_style('developer-css' ,get_template_directory_uri() .     '/assets/css/developer.css', array(), false);
	wp_enqueue_style('main-css' ,get_template_directory_uri() .     '/assets/css/style.css', array(), false);

 



	
	wp_enqueue_script( 'fontawesome-js', get_template_directory_uri() .'/assets/js/fontawesome.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'waypoints-js', get_template_directory_uri() .  '/assets/js/waypoints.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() .  '/assets/js/bootstrap.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'lightcase-js', get_template_directory_uri() .  '/assets/js/lightcase.js', array('jquery'), false, true );
	wp_enqueue_script( 'isotope-js', get_template_directory_uri() .    '/assets/js/isotope.pkgd.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'swiper-js', get_template_directory_uri() .     '/assets/js/swiper.min.js', array('jquery'), false,  true );
	wp_enqueue_script( 'countdown-js', get_template_directory_uri() .  '/assets/js/jquery.countdown.min.js', array('jquery'), false,  true );
	wp_enqueue_script( 'counterup-js', get_template_directory_uri() .  '/assets/js/jquery.counterup.min.js', array('jquery'), false,  true );
	wp_enqueue_script( 'progress-js', get_template_directory_uri() .   '/assets/js/progress.js', array('jquery'), false,  true );
	wp_enqueue_script( 'wow-js', get_template_directory_uri() .        '/assets/js/wow.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'functions-js', get_template_directory_uri() .  '/assets/js/functions.js', array('jquery'), false, true );


	wp_enqueue_script( 'smartsaas-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );







	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'smartsaas_scripts' );