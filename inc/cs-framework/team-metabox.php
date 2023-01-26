<?php
/*Control core classes for avoid errors */
if( class_exists( 'CSF' ) ) {

  /*Set a unique slug-like ID */
  $prefix = 'saas_team';

  /*Create a metabox*/
  CSF::createMetabox( $prefix, array(
    'title'              => 'Smartsaas Team',
    'post_type'          => 'team',
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


  /*team metabox*/
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Member Position', 'smartsaas' ),
    'fields' => array(
       array(
            'id'    => 'position',
            'type'  => 'text',
            'title' => esc_html('Add member position', 'smartsaas' ),
          ),
        )
      ) 
    );


 


   CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Team Info', 'smartsaas' ),
    'fields' => array(
        array(
            'id'    => 'tam_address',
            'type'  => 'text',
            'title' => 'Team Address',
          ), 
          array(
            'id'    => 'team_mail',
            'type'  => 'text',
            'title' => 'Team Mail',
          ), 
          array(
            'id'    => 'team_number',
            'type'  => 'text',
            'title' => 'Team Numbers',
          ), 
          array(
            'id'    => 'team_website',
            'type'  => 'text',
            'title' => 'Team Website',
          ), 
          array(
            'id'    => 'team_fburl',
            'type'  => 'text',
            'title' => 'Facebook Url',
          ), 
          array(
            'id'    => 'team_twurl',
            'type'  => 'text',
            'title' => 'Twitter Url',
          ),
          array(
            'id'    => 'team_piurl',
            'type'  => 'text',
            'title' => 'Pinterest Url',
          ),
          array(
            'id'    => 'team_gburl',
            'type'  => 'text',
            'title' => 'Globe Url',
          ),
          array(
            'id'    => 'team_bhurl',
            'type'  => 'text',
            'title' => 'Behence Url',
          ),
        )
      ) 
    ); 



  /*team metabox*/
  CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Team Single Excerpt', 'smartsaas' ),
    'fields' => array(
       array(
            'id'    => 'team_excerpt',
            'type'  => 'textarea',
            'title' => esc_html('Add team member excerpt', 'smartsaas' ),
        ),
       array(
            'id'    => 'excerpt_btitle',
            'type'  => 'text',
            'title' => esc_html('Excerpt bottom title', 'smartsaas' ),
          ),
        )
      ) 
    ); 

  
   CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Team Single Progress', 'smartsaas' ),
    'fields' => array(
        array(
            'id'    => 'progress_title',
            'type'  => 'text',
            'title' => 'Team Progress Title',
          ), 
          array(
              'id'        => 'progress',
              'type'      => 'group',
              'max'       =>6,
              'title'     => 'Team Progress Area',
              'fields'    => array(
                array(
                  'id'    => 'count_number',
                  'type'  => 'text',
                  'title' => 'Team Progress Count Numbers',
                ),
                array(
                  'id'    => 'progress_bottom',
                  'type'  => 'text',
                  'title' => 'Team Progress Bottom Title',
                ),

              ),
            ),
          )
        ) 
      ); 

   
    CSF::createSection( $prefix, array(
    'title'  => esc_html( 'Team Single Prize', 'smartsaas' ),
    'fields' => array(
        array(
            'id'    => 'prize_title',
            'type'  => 'text',
            'title' => 'Team Prize Title',
          ), 
          array(
              'id'        => 'prizes',
              'type'      => 'group',
              'max'       =>6,
              'title'     => 'Team Prize Area',
              'fields'    => array(
                array(
                  'id'    => 'prize_year',
                  'type'  => 'text',
                  'title' => 'Team Priz Year',
                ),
                array(
                  'id'    => 'prize_imz',
                  'type'  => 'media',
                  'title' => 'Team Priz Image',
                ),
                
              ),
            ),
          )
        ) 
      ); 




}