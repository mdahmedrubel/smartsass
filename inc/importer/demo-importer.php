<?php 
/*Import Demo content data*/
if ( ! function_exists( 'theme_import_files' ) ) :
function theme_import_files() {
    return array(
        array(
            'import_file_name'             => esc_html__( 'Smartsaas Demo', 'smartsaas' ),
            'import_file_url'              => 'http://codexcoder.com/demos/smartsaas/smartsaas-content.xml',
            'import_widget_file_url'       => 'http://codexcoder.com/demos/smartsaas/smartsaas-widgets.wie',
            'import_customizer_file_url'   => 'http://codexcoder.com/demos/smartsaas/smartsaas-customizer.dat',
            'import_preview_image_url'     => 'http://codexcoder.com/demos/smartsaas/screenshot.png',
            'preview_url'                  => 'http://codexcoder.com/demos/smartsaas/smartsaas-demo',
            'import_notice'                => esc_html__( 'After you import the demo data, just set widgets from Appearance > Widgets Also set menu from Appearance > Menu home page & blog page will 
            automatically set. If you want to use different home page you can do that from Settings > Reading. Also import smartsaas-themeoption.
            json through theme options > theme options backup importer thats all.', 'smartsaas' ),
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'theme_import_files' );
endif;



function ocdi_plugin_intro_text( $default_text ) {
    $default_text .= '<div class="ocdi__intro-text" style="width:400px"><p>Please click on the <strong>Import Demo Data</strong> button and wait
    for importing demo data. It may take a few minutes.</p>
</div>';
    return $default_text;
}
add_filter( 'pt-ocdi/plugin_intro_text', 'ocdi_plugin_intro_text' );



function ocdi_after_import_setup() {
    $primary_menu      	= get_term_by( 'name', 'Main Menu', 'nav_menu' );


	set_theme_mod( 'nav_menu_locations', array(
			'main-menu'   => $primary_menu->term_id,  
		)
	);

  
   $home_page_id = get_page_by_title( 'Home SmartSeo');
   $blog_page_id  = get_page_by_title( 'Blog' );
   
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $home_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
    
}
add_action( 'pt-ocdi/after_import', 'ocdi_after_import_setup' );






