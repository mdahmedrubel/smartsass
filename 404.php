<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package SmartSaas
 */
wp_head();
$saas_404 = get_option( 'smartsaas_themeoptions' );
if(isset($saas_404['404_image']['id'])){	
	$saas_404_img = wp_get_attachment_image_src($saas_404['404_image']['id'], 'large');
}
if(isset($saas_404['404_bg']['id'])){	
	$saas_404_bg = wp_get_attachment_image_src($saas_404['404_bg']['id'], 'large');
}
?>
<!-- 404 page -->
<div class="fore-zero-page" style="background-image: url(<?php echo esc_url($saas_404_bg[0]); ?>);">
    <div class="container">
        <div class="images">
        	<?php if(!empty($saas_404_img)): ?>
            	<img src="<?php echo esc_url($saas_404_img[0]); ?>" alt="<?php bloginfo('name'); ?>">
        	<?php endif; ?>
        </div>
        <div class="text-content text-center">
            <h3><?php if(!empty($saas_404['404_text'])): echo esc_html($saas_404['404_text']); else:  esc_html_e('Oops! The Page You Are Looking For Could Not Be Found', 'smartsaas');  endif; ?></h3>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="lab-btn"><span><?php esc_html_e('Back to Home', 'smartsaas'); ?></span></a>
        </div>
    </div>
</div>
<!-- 404 page -->
<?php
wp_footer();
