<?php 
$header_nine = get_option('smartsaas_themeoptions');
?>
<!-- search area -->
<div class="search-area">
    <div class="container">
        <div class="search-input">
            <div class="search-close">
                <i class="icofont-close-squared-alt"></i>
            </div>
            <?php get_search_form(); ?>
        </div>
    </div>
</div>
<!-- search area -->

<!-- desktop menu start here -->
<header class="header-section transparent-header innerheader">
    <div class="header-area">
        <div class="container">
            <div class="primary-menu">
                <div class="logo">
                    <?php
                    $logo_img_id = get_theme_mod( 'custom_logo' );
                    if(!empty($logo_img_id)): 
                    ?>
                    <div class="header-logo">
                        <?php the_custom_logo(); ?> 
                    </div>
                    <?php else: ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h2><?php esc_html(bloginfo( 'name' )); ?></h2></a>
                    <?php endif; ?>
                </div>
                <div class="main-area">
                    <div class="main-menu">
                        <?php                             
                        if ( has_nav_menu('main-menu')):
                            wp_nav_menu( array(
                                'theme_location' => 'main-menu', 
                                'menu_class' => '',
                                'walker' => new SmartSaas_Bootstrap_Navwalker(),
                                'fallback_cb'=> false,
                                'menu_id'    => '',
                                'depth'     => 4
                            ) );
                        endif;                             
                        ?>
                    </div>
                    <div class="header-right">
                        <div class="search">
                            <i class="icofont-search-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- desktop menu ending here -->