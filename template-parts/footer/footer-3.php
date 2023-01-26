<?php 
$footer_three = get_option('smartsaas_themeoptions');
if(isset($footer_three['footer_bgs']['id'])){
    $footer_three_bg = wp_get_attachment_image_src($footer_three['footer_bgs']['id'], 'full');
}
?>
<!-- Footer Section Start Here -->
<footer>
	<div class="footer-top padding-tb" style="background-image: url(<?php if(!empty($footer_three_bg)): echo esc_url($footer_three_bg[0]);  else: echo esc_url(get_template_directory_uri()); ?>/assets/css/bg-image/footer-top-bg-3.jpg); <?php endif; ?>">
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
	<?php if(!empty($footer_three['footer_bottom']) && $footer_three['footer_bottom'] == true): ?>
	<div class="footer-bottom style-2">
		<div class="container">
			<div class="section-wrapper">
				<p>
					<?php if(!empty($footer_three['copy_right'])): echo esc_html($footer_three['copy_right']); endif; ?>
					<a href="<?php if(!empty($footer_three['author_url'])): echo esc_url($footer_three['author_url']); endif; ?>">
						<?php if(!empty($footer_three['site_author'])): echo esc_html($footer_three['site_author']); endif; ?>
					</a>
				</p>
			</div>
		</div>
	</div>
	<?php endif; ?>
</footer>
<!-- Footer Section Ending Here -->