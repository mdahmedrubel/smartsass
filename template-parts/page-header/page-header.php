<?php
if( ! function_exists('Smartsaas_Breadcrumb')){
 function Smartsaas_Breadcrumb(){  

$breadcrumb = get_option( 'smartsaas_themeoptions' ); 

if(isset($breadcrumb['breadcrum_img']['id'])) {
    $img_one = wp_get_attachment_image_src($breadcrumb['breadcrum_img']['id'], 'large');
}
if(isset($breadcrumb['breadcrum_img2']['id'])) {
    $img_two = wp_get_attachment_image_src($breadcrumb['breadcrum_img2']['id'], 'large');
}
if(isset($breadcrumb['breadcrum_img3']['id'])) {
    $img_three = wp_get_attachment_image_src($breadcrumb['breadcrum_img3']['id'], 'large');
}
if(isset($breadcrumb['breadcrum_img4']['id'])) {
    $img_four = wp_get_attachment_image_src($breadcrumb['breadcrum_img4']['id'], 'large');
}
if(isset($breadcrumb['breadcrum_img5']['id'])) {
    $img_five = wp_get_attachment_image_src($breadcrumb['breadcrum_img5']['id'], 'large');
}
if(isset($breadcrumb['breadcrum_img6']['id'])) {
    $img_six = wp_get_attachment_image_src($breadcrumb['breadcrum_img6']['id'], 'large');
}
if(isset($breadcrumb['breadcrum_img7']['id'])) {
    $img_seven = wp_get_attachment_image_src($breadcrumb['breadcrum_img7']['id'], 'large');
}
?>
<!-- page header section start here -->
<div class="page-header">
    <div class="shap-pageheader">
        <div class="line line-1">
            <?php if(!empty($img_one)): ?>
                <img src="<?php echo esc_url($img_one[0]); ?>" alt="<?php bloginfo('name'); ?>">
            <?php endif; ?>    
        </div>
        <div class="line line-2">
            <?php if(!empty($img_two)): ?>
                <img src="<?php echo esc_url($img_two[0]); ?>" alt="<?php bloginfo('name'); ?>">
            <?php endif; ?> 
        </div>
        <div class="line line-3">
            <?php if(!empty($img_three)): ?>
                <img src="<?php echo esc_url($img_three[0]); ?>" alt="<?php bloginfo('name'); ?>">
            <?php endif; ?> 
        </div>
        <div class="line line-4">
            <?php if(!empty($img_four)): ?>
                <img src="<?php echo esc_url($img_four[0]); ?>" alt="<?php bloginfo('name'); ?>">
            <?php endif; ?> 
        </div>
        <div class="line line-5">
            <?php if(!empty($img_five)): ?>
                <img src="<?php echo esc_url($img_five[0]); ?>" alt="<?php bloginfo('name'); ?>">
            <?php endif; ?> 
        </div>
        <div class="line line-6">
            <?php if(!empty($img_six)): ?>
                <img src="<?php echo esc_url($img_six[0]); ?>" alt="<?php bloginfo('name'); ?>">
            <?php endif; ?> 
        </div>
        <div class="line line-7">
            <?php if(!empty($img_seven)): ?>
                <img src="<?php echo esc_url($img_seven[0]); ?>" alt="<?php bloginfo('name'); ?>">
            <?php endif; ?> 
        </div>
    </div>
    <div class="container">
        <div class="pageheader-textarea text-center">
            <h2>
                <?php
                    $post_type = isset($_GET['post_type']) ? $_GET['post_type'] : '';
                    $search = isset($_GET['s']) ? $_GET['s'] : '';
                    if($post_type == 'event' && is_search()) {
                        printf( esc_html__( 'Smartsaas Search Results for: %s', 'smartsaas' ),
                                '<span>' . get_search_query() . '</span>');
                    }elseif(is_search()){
                        printf( esc_html__( 'Search Results for: %s', 'smartsaas' ),
                                '<span>' . get_search_query() . '</span>' );
                    } elseif( is_archive()  ) {
                        the_archive_title();
                    } elseif (is_home()) {
                        wp_title('');
                    } elseif(is_page()) {
                        the_title();
                    } else {
                        the_title();
                    }                             
                ?>
            </h2>
            <p><?php if(!empty($breadcrumb['breadcrum_sdesc'])): echo esc_html($breadcrumb['breadcrum_sdesc']); endif; ?></p>
        </div>
    </div>
</div>
<!-- page header section ending here -->
<?php
 }

}

?>