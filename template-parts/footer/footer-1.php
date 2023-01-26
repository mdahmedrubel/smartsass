<?php 
$footer_one = get_option('smartsaas_themeoptions');
if(isset($footer_one['footer_bgs']['id'])){
    $footer_img = wp_get_attachment_image_src($footer_one['footer_bgs']['id'], 'large');
}
?>
<footer>
	<div class="footer-top padding-tb" style="background-image: url(<?php if(!empty($footer_img)): echo esc_url($footer_img[0]);  else: echo esc_url(get_template_directory_uri()); ?>/assets/css/bg-image/footer-top-bg.jpg); <?php endif; ?>">
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
	<?php if(!empty($footer_one['footer_bottom']) && $footer_one['footer_bottom'] == true): ?>
	<div class="footer-bottom">
		<div class="container">
			<div class="section-wrapper">
				<p>
					<?php if(!empty($footer_one['copy_right'])): echo esc_html($footer_one['copy_right']); endif; ?>
					<a href="<?php if(!empty($footer_one['author_url'])): echo esc_url($footer_one['author_url']); endif; ?>"><?php if(!empty($footer_one['site_author'])): echo esc_html($footer_one['site_author']); endif; ?>
					</a>
				</p>
			</div>
		</div>
	</div>
	<?php endif; ?>
</footer>