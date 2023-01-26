<div class="col-12">
    <div id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
        <div class="post-item-inner">
            <div class="post-thumb">
                <?php
                 $post_img = get_the_post_thumbnail_url();
                 if(!empty($post_img)): 
                ?>
                <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($post_img); ?>" alt="<?php bloginfo('name'); ?>"></a>
                <?php endif; ?>
            </div>
            <?php
             get_template_part("template-parts/post-formats/common/common"); 
            ?>
        </div>
    </div>
</div>