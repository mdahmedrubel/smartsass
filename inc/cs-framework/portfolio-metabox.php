<?php
/*Control core classes for avoid errors */
if( class_exists( 'CSF' ) ) {

  /*Set a unique slug-like ID */
  $prefix = 'smartsaas_portfolio';

  /*Create a metabox*/
  CSF::createMetabox( $prefix, array(
    'title'              => 'Smartsaas Portfolios',
    'post_type'          => 'portfolio',
    'data_type'          => 'serialize',
    'context'            => 'advanced',
    'priority'           => 'default',
    'exclude_post_types' => array(),
    'page_templates'     => '',
    'post_formats'       => '',
    'show_restore'       => false,
    'enqueue_webfont'    => true,
    'async_webfont'      => false,
    'output_css'         => true,
    'theme'              => 'dark',
    'class'              => '',
  ) );


  /*portfolio metabox*/
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Portfolio sinlge large image', 'smartsaas' ),
    'fields' => array(
       array(
            'id'    => 'single_big_img',
            'type'  => 'media',
            'title' => esc_html('Add single large image', 'smartsaas' ),
          ),
       array(
            'id'    => 'single_left_img',
            'type'  => 'media',
            'title' => esc_html('Add single left image', 'smartsaas' ),
          ),
          array(
            'id'    => 'single_left_img2',
            'type'  => 'media',
            'title' => esc_html('Add single left image two', 'smartsaas' ),
          ),
        )
      ) 
    ); 


  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Portfolio sinlge title left icon', 'smartsaas' ),
    'fields' => array(
       array(
            'id'    => 'title_icon',
            'type'  => 'media',
            'title' => esc_html('single portfolio title icon', 'smartsaas' ),
            'desc' => esc_html('Add single portfolio title icon', 'smartsaas' ),
          ),
        )
      ) 
    ); 


   CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Portfolio sinlge project info', 'smartsaas' ),
    'fields' => array(
        array(
            'id'    => 'project-title',
            'type'  => 'text',
            'title' => 'Project Title',
          ), 
          array(
              'id'    => 'top-icon',
              'type'  => 'media',
              'title' => 'Project Top Icon',
            ),
             array(
                'id'        => 'project-group',
                'type'      => 'group',
                'max'       =>4,
                'title'     => 'Project Info',
                'fields'    => array(
                  array(
                    'id'    => 'p-title',
                    'type'  => 'text',
                    'title' => 'Project Title',
                  ),
                  array(
                    'id'    => 'p-text',
                    'type'  => 'text',
                    'title' => 'Bottom Text',
                  ),
                  array(
                    'id'    => 'p-icon',
                    'type'  => 'media',
                    'title' => 'Project Icon',
                  ),
                ),
              ),
            )
          ) 
        ); 

    CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Portfolio sinlge Project Brochure info', 'smartsaas' ),
    'fields' => array(
       array(
            'id'    => 'broucher-icon',
            'type'  => 'media',
            'title' => esc_html('Brochure Icon', 'smartsaas' ),
            'desc' => esc_html('Add Brochure Icon', 'smartsaas' ),
          ),
          array(
            'id'    => 'brochure-title',
            'type'  => 'text',
            'title' => esc_html('Brochure Title', 'smartsaas' ),
            'desc' => esc_html('Add Brochure Title', 'smartsaas' ),
          ),
          array(
            'id'    => 'pdf-url',
            'type'  => 'text',
            'title' => esc_html('Downloadable Pdf Url', 'smartsaas' ),
            'desc' => esc_html('Add Downloadable Pdf Url', 'smartsaas' ),
          ),
          array(
            'id'    => 'zip-url',
            'type'  => 'text',
            'title' => esc_html('Downloadable Zip Url', 'smartsaas' ),
            'desc' => esc_html('Add Downloadable Zip Url', 'smartsaas' ),
          ),
        )
      ) 
    ); 


  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Portfolio sinlge Button', 'smartsaas' ),
    'fields' => array(
       array(
            'id'    => 'port_btntext',
            'type'  => 'text',
            'title' => esc_html('single portfolio button text', 'smartsaas' ),
            'desc' => esc_html('Add single portfolio button text', 'smartsaas' ),
          ),
          array(
            'id'    => 'port_btntexturl',
            'type'  => 'text',
            'title' => esc_html('single portfolio button url', 'smartsaas' ),
            'desc' => esc_html('Add single portfolio button url', 'smartsaas' ),
          ),
        )
      ) 
    ); 

}