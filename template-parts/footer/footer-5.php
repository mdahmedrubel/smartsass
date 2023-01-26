<?php 
$footer_five = get_option('smartsaas_themeoptions');
if(isset($footer_five['footer_bgs']['id'])){
$footer_five_bg = wp_get_attachment_image_src($footer_five['footer_bgs']['id'], 'full');
}
?>
<div class="app-footer" style="background-image: url(<?php if(!empty($footer_five_bg)): echo esc_url($footer_five_bg[0]);  else: echo esc_url(get_template_directory_uri()); ?>/assets/css/bg-image/app-footer-bg.jpg); <?php endif; ?>">
	<?php 
		if (is_active_sidebar('footer_top')){
			dynamic_sidebar( 'footer_top' );
		}
	?>
	<!-- Footer Section Start Here -->
	<footer>
		<div class="footer-top padding-tb">
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
		<?php if(!empty($footer_five['footer_bottom']) && $footer_five['footer_bottom'] == true): ?>
			<div class="footer-bottom style-2">
				<div class="container">
					<div class="section-wrapper">
						<p>
							<?php if(!empty($footer_five['copy_right'])): echo esc_html($footer_five['copy_right']); endif; ?>
							<a href="<?php if(!empty($footer_five['author_url'])): echo esc_url($footer_five['author_url']); endif; ?>">
								<?php if(!empty($footer_five['site_author'])): echo esc_html($footer_five['site_author']); endif; ?>
							</a>
						</p>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</footer>
	<!-- Footer Section Ending Here -->
</div>