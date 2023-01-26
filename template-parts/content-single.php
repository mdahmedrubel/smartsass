<?php
/**
* Template part for displaying single post
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Smartsaas
*/
?>
<div class="post-item">
    <div class="post-item-inner">
        <div class="post-thumb">
            <?php
            if ( has_post_thumbnail() ): 
                the_post_thumbnail(); 
            endif; 
            ?>
        </div>
        <div class="post-content">
            <h4>
                <?php
                $theme_stitle = get_the_title();
                $theme_spost_title = wp_trim_words($theme_stitle, 12, '');
                echo esc_html($theme_spost_title);
                ?>  
            </h4>
            <div class="author-date">
                <a href="<?php echo the_permalink(); ?>" class="date"><i class="icofont-calendar"></i><?php echo get_the_date('F j, Y'); ?></a>
                <a href="<?php echo the_permalink(); ?>" class="admin"><i class="icofont-ui-user"></i><?php echo get_the_author_meta( 'display_name'); ?></a>
                 <span class="comentss"><i class="icofont-speech-comments"></i></span><?php comments_popup_link('0 Comment', '1 Comment', '% Comments') ?>
            </div>
            <?php
             the_content();
            ?>
            <div class="tags-section">
                <?php
                 $posttags = get_the_tags();
                ?>
                    <ul class="tags">
                        <?php  
                        if ($posttags):
                        foreach($posttags as $tag):
                        ?>
                        <li><a href="<?php echo esc_attr( get_tag_link( $tag->term_id ) ); ?>"><?php echo esc_html($tag->name); ?></a></li>
                        <?php
                        endforeach;
                        endif;
                        ?>
                    </ul>
                <?php 
                if(function_exists('smartsaas_social_share')): 
                ?>
                <div class="scocial-media">
                     <?php 
                     echo smartsaas_social_share();
                    ?> 
                </div>
                <?php
                 endif; 
                ?>
            </div>
        </div>
    </div>
</div>


