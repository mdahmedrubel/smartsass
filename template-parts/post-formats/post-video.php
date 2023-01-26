<?php
 $video_post = get_post_meta(get_the_ID(), 'video_post', true); 
?>
<div class="col-12">
    <div class="post-item video-post">
        <div class="post-item-inner">
            <div class="post-thumb">
                <div class="video-thumb">
                   <?php
                    if ( has_post_thumbnail() ): 
                        the_post_thumbnail(); 
                     endif; 

                    if(!empty($video_post['video-url'])):
                    ?>
                        <a href="<?php echo esc_url($video_post['video-url']); ?>" data-rel="lightcase" class="video-icon"><i class="icofont-youtube-play"></i></a>
                    <?php
                     endif; 
                    ?>
                </div>
            </div>
            <?php
             get_template_part("template-parts/post-formats/common/common"); 
            ?>
        </div>
    </div>
</div>