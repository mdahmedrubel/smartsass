<?php
 $gallery_post = get_post_meta(get_the_ID(), 'gallery_post', true); 
?>
<div class="col-12">
    <div class="post-item slider-post">
        <div class="post-item-inner">
            <div class="post-thumb post-thumb-slider">
                <div class="swiper-wrapper">
                    <?php 
                    $post_gallery_img =  $gallery_post['gallery-image'];
                    $gallery_images = explode( ',', $post_gallery_img );

                    if ( ! empty( $gallery_images ) ):
                    foreach($gallery_images as $gallery_image):
                    $post_gallery = wp_get_attachment_url($gallery_image);

                    if ( ! empty( $post_gallery ) ):
                    ?>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url($post_gallery);?>" alt="<?php bloginfo('name'); ?>">
                    </div>
                    <?php
                     else: 
                    ?>
                    <div class="swiper-slide">
                        <?php
                        if ( has_post_thumbnail() ): 
                            the_post_thumbnail(); 
                        endif;
                        ?>
                    </div>
                    <?php
                    endif;
                    endforeach; 
                    endif;
                    ?>
                </div>
                <div class="post-thumb-slider-next"><i class="icofont-double-left"></i></div>
                <div class="post-thumb-slider-prev"><i class="icofont-double-right"></i></div>
            </div>
            <?php
             get_template_part("template-parts/post-formats/common/common"); 
            ?>
        </div>
    </div>
</div>