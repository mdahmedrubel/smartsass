<?php 
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function smartsaas_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Smartsaas Blog Sidebar Widget', 'smartsaas' ),
		'id'            => 'smartsaas_blog',
		'description'   => esc_html__( 'Add blog widgets here.', 'smartsaas' ),
		'before_widget' => '<div class="smartsaas-widgets widget-mb30">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-header"><h5>',
		'after_title'   => '</h5></div>',
	) );

	//footer widget
	register_sidebar( array(
		'name'          => esc_html__( 'Smartsaas Footer About Widget', 'smartsaas' ),
		'id'            => 'footer_about',
		'description'   => esc_html__( 'Add smartsaas Footer About Widgets Here.', 'smartsaas' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-footer">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Smartsaas Footer Two Widget', 'smartsaas' ),
		'id'            => 'footer_two',
		'description'   => esc_html__( 'Add smartsaas Footer Two Widgets Here.', 'smartsaas' ),
		'before_widget' => '<div class="widget_cls">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="title_cls">',
		'after_title'   => '</h6>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Smartsaas Footer Three Widget', 'smartsaas' ),
		'id'            => 'footer_three',
		'description'   => esc_html__( 'Add smartsaas Footer Three Widgets Here.', 'smartsaas' ),
		'before_widget' => '<div class="">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="">',
		'after_title'   => '</h6>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Smartsaas Footer Four Widget', 'smartsaas' ),
		'id'            => 'footer_four',
		'description'   => esc_html__( 'Add smartsaas Footer Four Widgets Here.', 'smartsaas' ),
		'before_widget' => '<div class="widget_cls">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="title_cls">',
		'after_title'   => '</h6>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Smartsaas Footer Top Widget', 'smartsaas' ),
		'id'            => 'footer_top',
		'description'   => esc_html__( 'Add smartsaas Footer Top Widgets Here.', 'smartsaas' ),
		'before_widget' => '<div class="">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="">',
		'after_title'   => '</h6>',
	) );


}
add_action( 'widgets_init', 'smartsaas_widgets_init' );
