<?php 
$footer_nine = get_option('smartsaas_themeoptions');
if(isset($footer_nine['footer9-img']['id'])){
    $footer9_img1 = wp_get_attachment_image_src($footer_nine['footer9-img']['id'], 'full');
}
if(isset($footer_nine['footer9-img2']['id'])){
    $footer9_img2 = wp_get_attachment_image_src($footer_nine['footer9-img2']['id'], 'full');
}
?>
<!-- Footer Section Start Here -->
<footer>
	<div class="footer-top style-3 padding-tb">
	    <div class="shap-footer">
	        <div class="line line-1">
	        	<?php if(!empty($footer9_img1)): ?>
	        		<img src="<?php echo esc_url($footer9_img1[0]); ?>" alt="<?php bloginfo('name'); ?>">
	        	<?php endif; ?>
	        </div>
	        <div class="line line-2">
	        	<?php if(!empty($footer9_img2)): ?>
	        		<img src="<?php echo esc_url($footer9_img2[0]); ?>" alt="<?php bloginfo('name'); ?>">
	        	<?php endif; ?>
	        </div>
	    </div>
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-3 col-md-6 col-12">
	                <?php 
						if (is_active_sidebar('footer_about')){
							dynamic_sidebar( 'footer_about' );
						}
					?>
	            </div>
	            <div class="col-lg-3 col-md-6 col-12">
	                <div class="footer-item">
	                    <div class="footer-inner">
	                        <div class="footer-content">
	                            <div class="content">
	                                <?php 
										if (is_active_sidebar('footer_two')){
											dynamic_sidebar( 'footer_two' );
										}
									?>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="col-lg-3 col-md-6 col-12">
	                <?php 
						if (is_active_sidebar('footer_three')){
							dynamic_sidebar( 'footer_three' );
						}
					?>
	            </div>
	            <div class="col-lg-3 col-md-6 col-12">
	                <div class="footer-item">
	                    <div class="footer-inner">
	                        <div class="footer-content">
	                            <div class="content">
	                                <?php 
										if (is_active_sidebar('footer_four')){
											dynamic_sidebar( 'footer_four' );
										}
									?>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<?php if(!empty($footer_nine['footer_bottom']) && $footer_nine['footer_bottom'] == true): ?>
	<div class="footer-bottom style-3">
		<div class="container">
			<div class="section-wrapper">
				<p>
					<?php if(!empty($footer_nine['copy_right'])): echo esc_html($footer_nine['copy_right']); endif; ?>
					<a href="<?php if(!empty($footer_nine['author_url'])): echo esc_url($footer_nine['author_url']); endif; ?>"><?php if(!empty($footer_nine['site_author'])): echo esc_html($footer_nine['site_author']); endif; ?>
					</a>
				</p>
			</div>
		</div>
	</div>
	<?php endif; ?>
</footer>
<!-- Footer Section Ending Here -->