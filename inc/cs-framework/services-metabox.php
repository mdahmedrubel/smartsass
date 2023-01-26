<?php
/*Control core classes for avoid errors */
if( class_exists( 'CSF' ) ) {

  /*Set a unique slug-like ID */
  $prefix = 'saas_service';

  /*Create a metabox*/
  CSF::createMetabox( $prefix, array(
    'title'              => 'Smartsaas Service',
    'post_type'          => 'service',
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
  ) 
);




  /*Services metabox*/
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Service Icon', 'smartsaas' ),
    'fields' => array(
       array(
            'id'    => 'icon_service',
            'type'  => 'media',
            'title' => esc_html('Seo service icon', 'smartsaas' ),
         ),
         array(
              'id'    => 'icon_service2',
              'type'  => 'media',
              'title' => esc_html('VPN service icon', 'smartsaas' ),
         ),
         array(
              'id'    => 'icon_service3',
              'type'  => 'media',
              'title' => esc_html('Marketing service icon', 'smartsaas' ),
            ),
          )
        ) 
      );

  /*Services metabox*/
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Service Brochure', 'smartsaas' ),
    'fields' => array(
       array(
            'id'    => 'bruchure_title',
            'type'  => 'text',
            'title' => esc_html('Brochure title', 'smartsaas' ),
         ),  
        array(
            'id'    => 'bruchure_scon',
            'type'  => 'textarea',
            'title' => esc_html('Brochure content', 'smartsaas' ),
         ), 
        array(
            'id'    => 'bruchure_btn',
            'type'  => 'text',
            'title' => esc_html('Brochure button text', 'smartsaas' ),
         ),
         array(
              'id'    => 'bruchure_btnurl',
              'type'  => 'text',
              'title' => esc_html('Brochure button url', 'smartsaas' ),
           ),
        )
      ) 
    ); 

  /*Services metabox*/
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Need Help', 'smartsaas' ),
    'fields' => array(
       array(
            'id'    => 'need_title',
            'type'  => 'text',
            'title' => esc_html('Need title', 'smartsaas' ),
        ),  
        array(
            'id'    => 'need_location',
            'type'  => 'textarea',
            'title' => esc_html('Need location', 'smartsaas' ),
        ),  
        array(
            'id'    => 'need_number',
            'type'  => 'text',
            'title' => esc_html('Need number', 'smartsaas' ),
        ),  
        array(
            'id'    => 'need_mail',
            'type'  => 'text',
            'title' => esc_html('Need mail', 'smartsaas' ),
        ),  
        array(
            'id'    => 'open_date',
            'type'  => 'text',
            'title' => esc_html('Need open date time', 'smartsaas' ),
        ),  
        array(
            'id'    => 'close_date',
            'type'  => 'text',
            'title' => esc_html('Need close date', 'smartsaas' ),
          ), 
        )
      ) 
    ); 


  // product single page content
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Service single content', 'smartsaas' ),
    'fields' => array(
          array(
              'id'        => 'single_s',
              'type'      => 'group',
              'max'       =>7,
              'title'     => 'Single service',
              'fields'    => array(
                
                array(
                  'id'    => 'singles_title',
                  'type'  => 'text',
                  'title' => 'Single service title',
                ),
                array(
                  'id'    => 'singles_con',
                  'type'  => 'textarea',
                  'title' => 'Single service Desc',
                ),
                array(
                  'id'    => 'singles_img',
                  'type'  => 'media',
                  'title' => 'Single service large image',
                ),
                array(
                  'id'    => 'singles_title2',
                  'type'  => 'text',
                  'title' => 'Single service title',
                ),
                array(
                  'id'    => 'singles_con2',
                  'type'  => 'textarea',
                  'title' => 'Single service content',
                ),
                array(
                  'id'    => 'singles_img2',
                  'type'  => 'media',
                  'title' => 'Single service small img',
                ),
                array(
                  'id'    => 'singles_title3',
                  'type'  => 'text',
                  'title' => 'Single service title',
                ),
                array(
                  'id'    => 'singles_con3',
                  'type'  => 'textarea',
                  'title' => 'Single service content',
                ),
                array(
                  'id'    => 'singles_img3',
                  'type'  => 'media',
                  'title' => 'Single service small img',
                ),

              ),
            ),
          )
        ) 
      ); 

  


}