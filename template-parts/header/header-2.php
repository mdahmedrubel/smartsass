<?php 
$header2_host = get_option('smartsaas_themeoptions');
$host_icon = wp_get_attachment_image_src($header2_host['number_btnicon']['id'], 'large');
?>
<!-- desktop menu start here -->
<header class="header-section host-bg">
	<div class="header-area">
		<div class="container-fluid">
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
					<?php if(!empty($header2_host['header_button']) && $header2_host['header_button'] == true): ?>
					<div class="header-btn">
						<?php  if(!empty($header2_host['host_number_btn'])): ?>
						<a href="<?php if(!empty($header2_host['host_number_btnurl'])): echo esc_html($header2_host['host_number_btnurl']); endif; ?>" class="lab-btn">
							<span>
								<?php if(!empty($host_icon)): ?>
									<img src="<?php echo esc_url($host_icon[0]); ?>" alt="<?php bloginfo('name'); ?>">
								<?php endif; ?>
								<?php echo esc_html($header2_host['host_number_btn']); ?>
							</span>
						</a>
						<?php endif; ?>
						<?php  if(!empty($header2_host['host_singupbtn'])): ?>
						<a href="<?php if(!empty($header2_host['host_singupbtn_url'])): echo esc_html($header2_host['host_singupbtn_url']); endif; ?>" class="lab-btn"><span><?php echo esc_html($header2_host['host_singupbtn']); ?></span>
						</a>
						<?php endif; ?>
					</div>
					<?php endif;  ?>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- desktop menu ending here -->