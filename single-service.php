<?php 
get_header();

$service_single = get_post_meta(get_the_ID(), 'saas_service', true);

if(function_exists('Smartsaas_Breadcrumb')){  
    Smartsaas_Breadcrumb();
}
?>
<!-- Service single section start here -->
<section class="service-single padding-tb">
    <div class="container">
        <div class="section-wrapper row justify-content-center flex-row-reverse">
            <div class="right-item">
                <div class="tab-cont">
                    <?php
                    if(!empty($service_single['single_s'])):
                    foreach($service_single['single_s'] as $service_con):
                    ?>
                    <div class="tab-pane">
                        <div class="post-thumb">
                            <?php 
                            if ( isset($service_con['singles_img']['id'])) {
                                    $service_single_img = wp_get_attachment_image_src($service_con['singles_img']['id'], 'large');
                                }
                            ?>
                            <img src="<?php echo esc_url($service_single_img[0]); ?>" alt="<?php bloginfo('name'); ?>">
                        </div>
                        <?php if(!empty($service_con['singles_title'])): ?>
                            <h3><?php echo esc_html($service_con['singles_title']); ?></h3>
                        <?php endif; ?>
                        <?php if(!empty($service_con['singles_con'])): ?>
                            <p><?php echo esc_html($service_con['singles_con']); ?></p>
                        <?php endif; ?>
                        <div class="post-item d-flex flex-wrap ">
                            <div class="post-thumb">
                                <div class="thumb">
                                    <?php 
                                    if ( isset($service_con['singles_img2']['id'])) {
                                            $service_img2 = wp_get_attachment_image_src($service_con['singles_img2']['id'], 'large');
                                        }
                                    ?>
                                    <img src="<?php echo esc_url($service_img2[0]); ?>" alt="<?php bloginfo('name'); ?>">
                                </div>
                            </div>
                            <div class="post-content">
                                <?php if(!empty($service_con['singles_title2'])): ?>
                                    <h5><?php echo esc_html($service_con['singles_title2']); ?></h5>
                                <?php endif; ?>
                                <?php if(!empty($service_con['singles_con2'])): ?>
                                    <p><?php echo esc_html($service_con['singles_con2']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="post-item d-flex flex-wrap">
                            <div class="post-content">
                                <?php if(!empty($service_con['singles_title3'])): ?>
                                    <h5><?php echo esc_html($service_con['singles_title3']); ?></h5>
                                <?php endif; ?>
                                <?php if(!empty($service_con['singles_con3'])): ?>
                                    <p><?php echo esc_html($service_con['singles_con3']); ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="post-thumb">
                                <div class="thumb">
                                   <?php 
                                    if ( isset($service_con['singles_img3']['id'])) {
                                            $service_img3 = wp_get_attachment_image_src($service_con['singles_img3']['id'], 'large');
                                        }
                                    ?>
                                    <img src="<?php echo esc_url($service_img3[0]); ?>" alt="<?php bloginfo('name'); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    endforeach; 
                    endif;
                    ?>
                </div>
            </div>
            <div class="left-item">
                <div class="service-tab">
                    <h4><?php esc_html_e('All Service', 'smartsaas'); ?></h4>
                    <ul class="tab-menu">
                        <?php 
                        $cat_terms = get_terms( 'service_cat', array(
                        'hide_empty' => true,
                        ));
                        
                        if(!empty($cat_terms)):
                        $cat_count = 0;
                        foreach($cat_terms as $cat_term):
                        $cat_count++;
                        ?>
                        <li class="<?php if($cat_count == 1){ echo "active"; } ?>"><?php echo esc_attr($cat_term->name); ?></li>
                        <?php 
                        endforeach;
                        endif;
                        ?>
                    </ul>
                </div>
                <?php  if(!empty($service_single['bruchure_title'])): ?>
                <div class="brochure">
                    <h3><?php echo esc_html($service_single['bruchure_title']); endif; ?></h3>
                    <p><?php if(!empty($service_single['bruchure_scon'])): echo esc_html($service_single['bruchure_scon']); ?></p>
                    <?php if(!empty($service_single['bruchure_btn'])): ?>
                        <a href="<?php echo esc_url($service_single['bruchure_btnurl']); ?>" class="lab-btn"><span><i class="far fa-file-pdf"></i> <?php echo esc_html($service_single['bruchure_btn']); ?></span></a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
                <?php  if(!empty($service_single['need_title'])): ?>
                <div class="need-help">
                    <h4><?php echo esc_html($service_single['need_title']); ?></h4>
                    <ul>
                        <?php if(!empty($service_single['need_location'])): ?>
                            <li><span><?php esc_html_e('Location.', 'smartsaas'); ?></span> <?php echo esc_html($service_single['need_location']); ?></li>
                        <?php endif; ?>
                        <?php if(!empty($service_single['need_number'])): ?>
                            <li><span><?php esc_html_e('Tel.', 'smartsaas'); ?></span> <?php echo esc_html($service_single['need_number']); ?></li>
                        <?php endif; ?>
                        <?php if(!empty($service_single['need_mail'])): ?>
                            <li><span><?php esc_html_e('Mail.', 'smartsaas'); ?></span> <?php echo esc_html($service_single['need_mail']); ?></li>
                        <?php endif; ?>
                        <?php if(!empty($service_single['open_date'])): ?>
                            <li><span><?php esc_html_e('Open.', 'smartsaas'); ?></span> <?php echo esc_html($service_single['open_date']); ?></li>
                        <?php endif; ?>
                        <?php if(!empty($service_single['close_date'])): ?>
                            <li><span><?php esc_html_e('Closed.', 'smartsaas'); ?></span> <?php echo esc_html($service_single['close_date']); ?></li>
                        <?php endif; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- Service single section ending here -->
<?php
get_footer();
