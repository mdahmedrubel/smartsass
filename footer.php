<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SmartSaas
 */
$footer_option = get_option('smartsaas_themeoptions');
?>
	<!-- Footer Section Start Here -->
	<?php 
    if (!empty($footer_option['footer_switcher']) && $footer_option['footer_switcher'] == true):
       echo get_template_part('template-parts/footer/footer', $footer_option['smartsaas_footer_style']);
    else :
       echo get_template_part('template-parts/footer/footer','1');
    endif;
	?>
	<!-- Footer Section Ending Here -->

	<!-- scrollToTop start here -->
	<?php if(!empty($footer_option['back_top']) && $footer_option['back_top'] == true): ?>
	<a href="#" class="scrollToTop">
		<i class="icofont-swoosh-up"></i>
		<span class="pluse_1"></span>
		<span class="pluse_2"></span>
	</a>
	<?php endif; ?>
	<!-- scrollToTop ending here -->

	<?php wp_footer(); ?>
	</body>
</html>
