<?php 
$footer_eight = get_option('smartsaas_themeoptions');
if(isset($footer_eight['footer_bgs']['id'])){
$footer8_bg = wp_get_attachment_image_src($footer_eight['footer_bgs']['id'], 'full');
}
?>
<!-- Footer Section Start Here -->
<footer style="position: relative;">
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
	<div class="footer-top padding-tb" style="background-image: url(<?php if(!empty($footer8_bg)): echo esc_url($footer8_bg[0]);  else: echo esc_url(get_template_directory_uri()); ?>/assets/css/bg-image/footer-top-bg.jpg); <?php endif; ?>">
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
	<?php if(!empty($footer_eight['footer_bottom']) && $footer_eight['footer_bottom'] == true): ?>
		<div class="footer-bottom">
			<div class="container">
				<div class="section-wrapper">
					<p>
	                    <?php if(!empty($footer_eight['copy_right'])): echo esc_html($footer_eight['copy_right']); endif; ?>
	                    <a href="<?php if(!empty($footer_eight['author_url'])): echo esc_url($footer_eight['author_url']); endif; ?>">
	                        <?php if(!empty($footer_eight['site_author'])): echo esc_html($footer_eight['site_author']); endif; ?>
	                    </a>
	                </p>
				</div>
			</div>
		</div>
	<?php endif; ?>
</footer>
<!-- Footer Section Ending Here -->