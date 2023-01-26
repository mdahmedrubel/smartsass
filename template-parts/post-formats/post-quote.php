<div class="col-12">
    <div class="post-item qute-post">
        <div class="post-item-inner">
            <div class="post-thumb">
                <div class="qute-content">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/blog/quote.png" alt="<?php bloginfo('name'); ?>">
                    <h5>
                        <?php 
                            $medicap_xcerpt = get_the_excerpt();
                            $shortexcerpt = wp_trim_words($medicap_xcerpt, $num_words = 32, ' ');
                            echo esc_html($shortexcerpt);
                        ?>
                    </h5>
                </div>
            </div>
            <?php
             get_template_part("template-parts/post-formats/common/common"); 
            ?>
        </div>
    </div>
</div>