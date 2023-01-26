<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  $prefix = 'smartsaas_themeoptions';
  // Create options
  CSF::createOptions( $prefix, array(

    'framework_title'         => wp_kses_post('SmartSaas Theme Options <small>  By webcodeltd</small>', 'smartsaas'),
    'framework_class'         => '',

    'menu_title'              => esc_html('Theme Options', 'smartsaas'),
    'menu_slug'               => 'theme-options',
    'menu_type'               => 'menu',
    'menu_capability'         => 'manage_options',
    'menu_icon'               => null,
    'menu_position'           => null,
    'menu_hidden'             => false,
    'menu_parent'             => '',

    'show_bar_menu'           => true,
    'show_sub_menu'           => true,
    'show_network_menu'       => true,
    'show_in_customizer'      => false,

    'show_search'             => false,
    'show_reset_all'          => true,
    'show_reset_section'      => true,
    'show_footer'             => true,
    'show_all_options'        => true,
    'sticky_header'           => true,
    'save_defaults'           => true,
    'ajax_save'               => true,

    'footer_text'             => wp_kses_post('smartsaas theme your all kind of it solution <small>webcodeltd.com</small>', 'smartsaas'),
    'footer_after'            => '',
    'footer_credit'           => esc_html('smartsaas Design and Developed by CodexCoder', 'smartsaas'),

    'database'                => '', 
    'transient_time'          => 0,

    'contextual_help'         => array(),
    'contextual_help_sidebar' => '',

    'enqueue_webfont'         => true,
    'async_webfont'           => false,

    'output_css'              => true,
    'theme'                   => 'dark',
    'class'                   => '',
    'defaults'                => array(),

) );


// smartsaas general option
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'General Settings', 'smartsaas' ),
    'fields' => array(
        array(
          'id'      => 'back_top',
          'type'    => 'switcher',
          'title'   =>  esc_html( 'Back To Top On / Off', 'smartsaas'),
          'label'   => esc_html('If you want you can switch off back to top.', 'smartsaas'),
          'default' => true
        ),
        array(
          'id'      => 'smartsaas_preloader',
          'type'    => 'switcher',
          'title'   =>  esc_html( 'Preloader On / Off', 'smartsaas'),
          'label'   => 'If you want you can switch off & on for preloader',
          'default' => true
        ),
        array(
          'id'      => 'page_title',
          'type'    => 'switcher',
          'title'   =>  esc_html( 'Page Title Switch On / Off', 'smartsaas'),
          'label'   => esc_html('If you want you can switch off or on for the page title.', 'smartsaas'),
          'default' => false
        ), 
      )
    ) 
  );


//smartsaas theme header menu style ==========
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Header Settings', 'smartsaas' ),
    'fields' => array(
        array(
            'id'    => 'header_switcher',
            'type'  => 'switcher',
            'title' => esc_html('Swithc on / off for footer section', 'smartsaas' ),
            'default'     => true,
          ),
          array(
            'id'          => 'header_style',
            'type'        => 'select',
            'title'       => esc_html('Select header style', 'smartsaas'),
            'options'     => array(
              '1'    => esc_html__('Header Style 1', 'smartsaas'),
              '2'    => esc_html__('Header Style 2', 'smartsaas'),
              '3'    => esc_html__('Header Style 3', 'smartsaas'),
              '4'    => esc_html__('Header Style 4', 'smartsaas'),
              '5'    => esc_html__('Header Style 5', 'smartsaas'),
              '6'    => esc_html__('Header Style 6', 'smartsaas'),
              '7'    => esc_html__('Header Style 7', 'smartsaas'),
              '8'    => esc_html__('Header Style 8', 'smartsaas'),
              '9'    => esc_html__('Header Style 9', 'smartsaas'),
            ),
            'default'     => 'header-3',
            'dependency'     => array( 'header_switcher', '==', 'true' ),
          ), 
          array(
            'id'    => 'header_button',
            'type'  => 'switcher',
            'title' => esc_html('Swithc on / for header button', 'smartsaas' ),
            'default'     => true,
          ),
          array(
            'id'    => 'top_button_text',
            'type'  => 'text',
            'title' => esc_html( 'Add Button Text', 'smartsaas' ),
            'dependency'     => array( 'header_button', '==', 'true' ),
          ),
          array(
            'id'    => 'top_button_url',
            'type'  => 'text',
            'title' => esc_html( 'Add Button Url', 'smartsaas' ),
            'dependency'     => array( 'header_button', '==', 'true' ),
          ),
          array(
            'id'    => 'host_number_btn',
            'type'  => 'text',
            'title' => esc_html( 'Host header number button', 'smartsaas' ),
            'dependency'     => array( 'header_button', '==', 'true' ),
          ),
          array(
            'id'    => 'host_number_btnurl',
            'type'  => 'text',
            'title' => esc_html( 'Host header number button url', 'smartsaas' ),
            'dependency'     => array( 'header_button', '==', 'true' ),
          ),
          array(
            'id'    => 'number_btnicon',
            'type'  => 'media',
            'title' => esc_html( 'Host header number button icon', 'smartsaas' ),
            'dependency'     => array( 'header_button', '==', 'true' ),
          ),
          array(
            'id'    => 'host_singupbtn',
            'type'  => 'text',
            'title' => esc_html( 'Host signup button text', 'smartsaas' ),
            'dependency'     => array( 'header_button', '==', 'true' ),
          ),
          array(
            'id'    => 'host_singupbtn_url',
            'type'  => 'text',
            'title' => esc_html( 'Host signup button url', 'smartsaas' ),
            'dependency'     => array( 'header_button', '==', 'true' ),
          ),     
        )
      ) 
    );


  // smartsaas breadcurmbs area
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Breadcrumb Settings', 'smartsaas' ),
    'fields' => array(
      array(
        'id'    => 'swithc_breadcumb',
        'type'  => 'switcher',
        'title' => esc_html( 'smartsaas breadcurmbs on/off', 'smartsaas' ),
        'default'     => true,
      ),
      array(
          'id'    => 'breadcrum_sdesc',
          'type'  => 'textarea',
          'title' => esc_html('Breadcurmbs short description', 'smartsaas' ),
          'dependency'     => array( 'swithc_breadcumb', '==', 'true' ),
        ),
        array(
            'id'    => 'breadcrum_img',
            'type'  => 'media',
            'title' => esc_html('Add breadcurmbs left image one', 'smartsaas' ),
            'dependency'     => array( 'swithc_breadcumb', '==', 'true' ),
          ),
          array(
            'id'    => 'breadcrum_img2',
            'type'  => 'media',
            'title' => esc_html('Add breadcurmbs left image two', 'smartsaas' ),
            'dependency'     => array( 'swithc_breadcumb', '==', 'true' ),
          ),
          array(
            'id'    => 'breadcrum_img3',
            'type'  => 'media',
            'title' => esc_html('Add breadcurmbs bottom image', 'smartsaas' ),
            'dependency'     => array( 'swithc_breadcumb', '==', 'true' ),
          ),
          array(
            'id'    => 'breadcrum_img4',
            'type'  => 'media',
            'title' => esc_html('Add breadcurmbs right table image', 'smartsaas' ),
            'dependency'     => array( 'swithc_breadcumb', '==', 'true' ),
          ),
          array(
            'id'    => 'breadcrum_img5',
            'type'  => 'media',
            'title' => esc_html('Add breadcurmbs right computer image', 'smartsaas' ),
            'dependency'     => array( 'swithc_breadcumb', '==', 'true' ),
          ),
          array(
            'id'    => 'breadcrum_img6',
            'type'  => 'media',
            'title' => esc_html('Add breadcurmbs right sitting man image', 'smartsaas' ),
            'dependency'     => array( 'swithc_breadcumb', '==', 'true' ),
          ),
          array(
            'id'    => 'breadcrum_img7',
            'type'  => 'media',
            'title' => esc_html('Add breadcurmbs top right watch image', 'smartsaas' ),
            'dependency'     => array( 'swithc_breadcumb', '==', 'true' ),
          ),
      )
    ) 
  );


  /* Blog variation style options*/
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'SmartSaas Blog', 'smartsaas' ),
    'fields' => array(
          array(
            'id'          => 'blog_style',
            'type'        => 'select',
            'title'       => esc_html('Select Blog Variation', 'smartsaas'),
            'options'     => array(
              '1'    => esc_html__('Three Columns No Sidebar', 'smartsaas'),
              '2'    => esc_html__('Two Columns With Sidebar', 'smartsaas'),
              '3'    => esc_html__('One Column With Sidebar', 'smartsaas'),
            ),
            'default'     => '1',
          ),

        )
      ) 
    );

  

// smartsaas 404 page settings
  CSF::createSection( $prefix, array(
    'title'  => esc_html( '404 Page Settings', 'smartsaas' ),
    'fields' => array(
        array(
          'id'      => '404_image',
          'type'    => 'media',
          'title'   =>  esc_html( 'Add Image', 'smartsaas'),
          'desc'  => esc_html('Add 404 image', 'smartsaas'),
        ),
        array(
          'id'      => '404_text',
          'type'    => 'textarea',
          'title'   =>  esc_html( 'Add Text', 'smartsaas'),
          'desc'  => esc_html('Add 404 Page Text', 'smartsaas'),
        ),
        array(
          'id'      => '404_bg',
          'type'    => 'media',
          'title'   =>  esc_html( 'Add Background Image', 'smartsaas'),
          'desc'  => esc_html('Add 404 Page Background', 'smartsaas'),
        ),
      )
    ) 
  );


//smartsaas theme footer style ==========
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Footer Settings', 'smartsaas' ),
    'fields' => array(
        array(
            'id'    => 'footer_switcher',
            'type'  => 'switcher',
            'title' => esc_html('Swithc on / off for footer section', 'smartsaas' ),
            'default'     => true,
          ),
          array(
            'id'          => 'smartsaas_footer_style',
            'type'        => 'radio',
            'title'       => esc_html('Select footer style', 'smartsaas'),
            'options'     => array(
              '1'    => esc_html__('Footer Style 1', 'smartsaas'),
              '2'    => esc_html__('Footer Style 2', 'smartsaas'),
              '3'    => esc_html__('Footer Style 3', 'smartsaas'),
              '4'    => esc_html__('Footer Style 4', 'smartsaas'),
              '5'    => esc_html__('Footer Style 5', 'smartsaas'),
              '6'    => esc_html__('Footer Style 6', 'smartsaas'),
              '7'    => esc_html__('Footer Style 7', 'smartsaas'),
              '8'    => esc_html__('Footer Style 8', 'smartsaas'),
              '9'    => esc_html__('Footer Style 9', 'smartsaas'),
            ),
            'default'    => '2',
            'dependency'     => array( 'footer_switcher', '==', 'true' ),
          ),
          array(
            'id'    => 'footer9-img',
            'type'  => 'media',
            'title' => esc_html( 'Footer 9 left image', 'smartsaas' ),
          ),
          array(
            'id'    => 'footer9-img2',
            'type'  => 'media',
            'title' => esc_html( 'Footer 9 right image', 'smartsaas' ),
          ), 
          array(
            'id'    => 'footer_bottom',
            'type'  => 'switcher',
            'title' => esc_html('Swithc on / off for footer Bottom', 'smartsaas' ),
            'default'     => true,
          ), 
          array(
            'id'    => 'copy_right',
            'type'  => 'text',
            'title' => esc_html('Footer bottom copyright text', 'smartsaas' ),
            'dependency'     => array( 'footer_bottom', '==', 'true' ),
          ), 
          array(
            'id'    => 'site_author',
            'type'  => 'text',
            'title' => esc_html('Site author name', 'smartsaas' ),
            'dependency'     => array( 'footer_bottom', '==', 'true' ),
          ),
          array(
            'id'    => 'author_url',
            'type'  => 'text',
            'title' => esc_html('Site author url', 'smartsaas' ),
            'dependency'     => array( 'footer_bottom', '==', 'true' ),
          ),
          array(
            'id'    => 'footer_bgs',
            'type'  => 'media',
            'title' => esc_html('Footer background image', 'smartsaas' ),
            'label'   => esc_html('Add footer background image here', 'smartsaas'),
          ),    
        )
      ) 
    );







 


// smartsaas theme backup options
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'smartsaas Backup', 'smartsaas' ),
    'fields' => array(
      array(
        'id'    => 'smartsaas_bkp',
        'type'  => 'backup',
        'title' => esc_html( 'Theme options backup', 'smartsaas' ),
      ),
    )
  ) 
);





}
