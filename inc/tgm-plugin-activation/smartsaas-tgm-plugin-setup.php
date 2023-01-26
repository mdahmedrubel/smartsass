<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme SmartSaas for publication on 
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/inc/tgm-plugin-activation/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'smartsaas_register_required_plugins' );

function smartsaas_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
		array(
			'name'               => 'Smartsaas Elementor Companion', 
			'slug'               => 'smartsaas-elementor-companion', 
			'source'             => get_template_directory() . '/inc/plugins/smartsaas-elementor-companion.zip', 
			'required'           => true, 
			'version'            => '1.0.0', 
			'force_activation'   => false, 
			'force_deactivation' => false, 
			'external_url'       => '', 
			'is_callable'        => '', 
		),
		array(
			'name'               => esc_html__( 'Codestar Framework', 'smartsaas' ),
			'slug'               => 'codestar-framework',
			'source'             => get_template_directory() . '/inc/plugins/codestar-framework.zip',
			'required'           => true,
			'version'            => '2.0.9',
			'force_activation'   => false,
		),
		array(
			'name'               => esc_html__( 'SmartSaas Companion', 'smartsaas' ),
			'slug'               => 'smartsaas-companion',
			'source'             => get_template_directory() . '/inc/plugins/smartsaas-companion.zip',
			'required'           => true,
			'version'            => '1.0.0',
			'force_activation'   => false,
		),
		array(
			'name'		=> esc_html__( 'Contact Form 7', 'smartsaas' ),
			'slug'		=> 'contact-form-7',
			'required'	=> false
		),
		array(
			'name'		=> esc_html__( 'Elementor', 'smartsaas' ),
			'slug'		=> 'elementor',
			'required'	=> true
		),
		array(
			'name'		=> esc_html__( 'Ajax Domain Checker', 'smartsaas' ),
			'slug'		=> 'ajax-domain-checker',
			'required'	=> false
		),
		array(
			'name'      => esc_html__('One Click Demo Import','smartsaas'),
			'slug'      => 'one-click-demo-import',
			'required'  => true,
		),
		array(
			'name'		=> esc_html__( 'WordPress Importer', 'smartsaas' ),
			'slug'		=> 'wordpress-importer',
			'required'	=> false
		),

	);

	$config = array(
		'id'           => 'smartsaas',                 
		'default_path' => '',                      
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,                   
		'dismissable'  => true,                    
		'dismiss_msg'  => '',                      
		'is_automatic' => false,                   
		'message'      => '',                      

	);

	tgmpa( $plugins, $config );
}
