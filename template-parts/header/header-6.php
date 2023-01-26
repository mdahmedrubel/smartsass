<?php 
$header_six = get_option('smartsaas_themeoptions');
?>
<!-- desktop menu start here -->
<header class="header-section transparent-header marketing-bg">
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
    				<?php if(!empty($header_six['header_button']) && $header_six['header_button'] == true): ?>
                        <div class="header-btn">
                            <?php if(!empty($header_six['top_button_text'])): ?>
                            <a href="<?php echo esc_url($header_six['top_button_url']); ?>" class="lab-btn"><span><?php echo esc_html($header_six['top_button_text']); ?></span></a>
                            <?php endif; ?>
                        </div>
                    <?php endif;  ?>
    			</div>
    		</div>
    	</div>
    </div>
</header>
<!-- desktop menu ending here -->