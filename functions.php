<?php
/*Smartsaas required theme setup*/
require get_template_directory() . '/inc/includes/smartsaas-enqueue.php';
require get_template_directory() . '/inc/includes/smartsaas-theme-setup.php';
require get_template_directory() . '/inc/includes/smartsaas-hooks.php';
require get_template_directory() . '/inc/includes/smartsaas-widget-register.php';
require get_template_directory() . '/inc/importer/demo-importer.php';

/*nav bar wolker*/
require get_template_directory() . '/inc/smartsaas-navbar-walker-mega-menu.php';

/*breadcrumbs*/
require get_template_directory() . '/template-parts/page-header/page-header.php';

/*smartsaas tgm plugins activation*/
require get_template_directory() . '/inc/tgm-plugin-activation/smartsaas-tgm-plugin-setup.php';

/*comments template*/
require_once get_template_directory(). '/inc/includes/comments/comments-template.php';

/* bootstrap navwalker*/
require_once get_template_directory(). '/inc/bootstrap-navwalker/smartsaas-bootstrap-navwalker.php';

/*smartsaas cs-framework */
require get_template_directory() . '/inc/cs-framework/smartsaas-theme-options.php';
require get_template_directory() . '/inc/cs-framework/team-metabox.php';
require get_template_directory() . '/inc/cs-framework/portfolio-metabox.php';
require get_template_directory() . '/inc/cs-framework/services-metabox.php';
require get_template_directory() . '/inc/cs-framework/post-format-video-metabox.php';
require get_template_directory() . '/inc/cs-framework/post-format-gallery-metabox.php';





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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}











