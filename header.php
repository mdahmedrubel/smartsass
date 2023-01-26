<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SmartSaas
 */
$saas_header_option = get_option('smartsaas_themeoptions');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Mobile Menu Start Here -->
<?php 
if($saas_header_option['header_style'] == 1){
	$mobileh_bg = "seo-bg";
}elseif($saas_header_option['header_style'] == 2){
	$mobileh_bg = "host-bg";
}elseif($saas_header_option['header_style'] == 3){
	$mobileh_bg = "erp-bg";
}elseif($saas_header_option['header_style'] == 4){
	$mobileh_bg = "vpn-bg";
}elseif($saas_header_option['header_style'] == 5){
	$mobileh_bg = "pos-bg";
}elseif($saas_header_option['header_style'] == 6){
	$mobileh_bg = "marketing-bg";
}elseif($saas_header_option['header_style'] == 7){
	$mobileh_bg = "shopapp-bg";
}elseif($saas_header_option['header_style'] == 8){
	$mobileh_bg = "crypto-bg";
}elseif($saas_header_option['header_style'] == 9){
	$mobileh_bg = "innerheader";
}
?>
<div class="mobile-menu <?php echo esc_attr($mobileh_bg); ?>">
	<nav class="mobile-header">
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
		<div class="header-bar">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</nav>
	<nav class="mobile-menu">
		<div class="mobile-menu-area">
			<div class="mobile-menu-area-inner">
				<?php                             
                if ( has_nav_menu('primary_menu')):
                    wp_nav_menu( array(
                        'theme_location' => 'primary_menu', 
                        'menu_class' => '',
                        'walker' => new SmartSaas_Bootstrap_Navwalker(),
                        'fallback_cb'=> false,
        	            'menu_id'    => '',
                        'depth'     => 4
                    ) );
                endif;                             
                ?>
			</div>
		</div>
	</nav>
</div>
<!-- Mobile Menu Ending Here -->

<?php  
//SmartSaas header verition
if (!empty($saas_header_option['header_switcher']) && $saas_header_option['header_switcher'] == true):
   echo get_template_part('template-parts/header/header', $saas_header_option['header_style']);
else :
   echo get_template_part('template-parts/header/header','1');
endif;
?>


