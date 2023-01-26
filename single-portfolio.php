<?php 
get_header();

$portfolio_meta = get_post_meta(get_the_ID(), 'smartsaas_portfolio', true);

if(function_exists('Smartsaas_Breadcrumb')){  
    Smartsaas_Breadcrumb();
}
?>
<!-- Recent Case Section Start Here -->
<section class="portfolio-section portfolio-single padding-tb">
    <div class="container">
        <div class="section-wrapper">
            <div class="port-top">
                <div class="row">
                    <div class="col-lg-8">
                    <?php 
                    if ( isset($portfolio_meta['single_big_img']['id'])) {
                    $port_big_img = wp_get_attachment_image_src($portfolio_meta['single_big_img']['id'], 'large');
                    }
                    ?>
                    <?php if(!empty($port_big_img)): ?>
                        <div class="post-thumb">
                            <img src="<?php echo esc_url($port_big_img[0]); ?>" alt="<?php bloginfo('name'); ?>">
                        </div>
                    <?php endif; ?>
                    </div>
                    <div class="col-lg-4 pr-thumb">
                    <?php 
                    if ( isset($portfolio_meta['single_left_img']['id'])) {
                    $port_big_img2 = wp_get_attachment_image_src($portfolio_meta['single_left_img']['id'], 'large');
                    }
                    ?>
                    <?php if(!empty($port_big_img2)): ?>
                        <div class="post-thumb">
                            <img src="<?php echo esc_url($port_big_img2[0]); ?>" alt="<?php bloginfo('name'); ?>">
                        </div>
                    <?php endif; ?>

                    <?php 
                    if ( isset($portfolio_meta['single_left_img2']['id'])) {
                    $port_big_img3 = wp_get_attachment_image_src($portfolio_meta['single_left_img2']['id'], 'large');
                    }
                    ?>
                    <?php if(!empty($port_big_img3)): ?>
                        <div class="post-thumb">
                            <img src="<?php echo esc_url($port_big_img3[0]); ?>" alt="<?php bloginfo('name'); ?>">
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="port-bottom">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-7 col-12">
                        <div class="port-item2">
                            <div class="port-inner">
                                <div class="port-header">
                                    <?php 
                                    if ( isset($portfolio_meta['top-icon']['id'])) {
                                    $titl_img = wp_get_attachment_image_src($portfolio_meta['top-icon']['id'], 'large');
                                    }
                                    ?>
                                    <?php if(!empty($titl_img)): ?>
                                        <div class="post-thumb">
                                            <img src="<?php echo esc_url($titl_img[0]); ?>" alt="<?php bloginfo('name'); ?>">
                                        </div>
                                    <?php endif; ?>
                                    <?php if(!empty($portfolio_meta['project-title'])): ?>
                                        <h4><?php echo esc_html($portfolio_meta['project-title']); ; ?></h4>
                                    <?php endif; ?>
                                </div>
                                <div class="port-body">
                                    <ul>
                                        <?php
                                        if(!empty($portfolio_meta['project-group'])):
                                        foreach($portfolio_meta['project-group'] as $portfolio_met): 
                                        if ( isset($portfolio_met['p-icon']['id'])) {
                                        $p_info = wp_get_attachment_image_src($portfolio_met['p-icon']['id'], 'large');
                                        }
                                        ?>
                                        <li>
                                            <div class="p-thumb">
                                                <img src="<?php echo esc_url($p_info[0]); ?>" alt="<?php bloginfo('name'); ?>">
                                            </div>
                                            <div class="p-content">
                                                <?php if(!empty($portfolio_met['p-title'])): ?>
                                                <h6><?php echo esc_html($portfolio_met['p-title']); ?></h6>
                                                <?php endif; ?>
                                                <?php if(!empty($portfolio_met['p-text'])): ?>
                                                    <p><?php echo esc_html($portfolio_met['p-text']); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </li>
                                        <?php
                                        endforeach; 
                                        endif;
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="port-item2">
                            <div class="port-inner">
                                <div class="port-header">
                                <?php 
                                 if ( isset($portfolio_meta['broucher-icon']['id'])) {
                                    $p_broucher_icon = wp_get_attachment_image_src($portfolio_meta['broucher-icon']['id'], 'large');
                                    }
                                ?>
                                <?php if(!empty($p_broucher_icon)): ?>
                                    <img src="<?php echo esc_url($p_broucher_icon[0]); ?>" alt="<?php bloginfo('name'); ?>">
                                <?php endif; ?>
                                    <?php if(!empty($portfolio_meta['brochure-title'])): ?>
                                        <h4><?php echo esc_html($portfolio_meta['brochure-title']); ?></h4>
                                    <?php endif; ?>
                                </div>
                                <div class="port-body">
                                    <?php if(!empty($portfolio_meta['pdf-url'])): ?>
                                    <a href="<?php echo esc_url($portfolio_meta['pdf-url']); ?>" class="down-file pdf"><i class="far fa-file-pdf"></i><?php esc_html_e('DOWNLOAD pdf file', 'smartsaas'); ?><i class="fas fa-download"></i>
                                    </a>
                                    <?php endif; ?>
                                    <?php if(!empty($portfolio_meta['zip-url'])): ?>
                                    <a href="<?php echo esc_url($portfolio_meta['zip-url']); ?>" class="down-file zip"><i class="far fa-file-archive"></i><?php esc_html_e('DOWNLOAD zip file', 'smartsaas'); ?><i class="fas fa-download"></i>
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 right-side">
                        <div class="port-item2">
                            <div class="port-inner">
                                <div class="port-header">
                                <?php 
                                if ( isset($portfolio_meta['title_icon']['id'])) {
                                $title_icon = wp_get_attachment_image_src($portfolio_meta['title_icon']['id'], 'large');
                                }
                                ?>
                                <?php if(!empty($title_icon)): ?>
                                    <img src="<?php echo esc_url($title_icon[0]); ?>" alt="<?php bloginfo('name'); ?>">
                                <?php endif; ?>
                                    <h3>
                                    <?php
                                     the_title(); 
                                    ?> 
                                    </h3>
                                </div>
                                <div class="port-body">
                                <?php
                                 the_content();
                                ?>
                                <?php if(!empty($portfolio_meta['port_btntext'])): ?>
                                    <a href="<?php echo esc_url($portfolio_meta['port_btntexturl']); ?>" class="lab-btn"><span><?php echo esc_html($portfolio_meta['port_btntext']); ?></span></a>
                                <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Recent Case Section Ending Here -->
<?php
get_footer();
