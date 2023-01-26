<?php
/**
 * The template for displaying archive content pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SmartSaas
 */
?>
<div class="col-lg-4 col-sm-6 col-12">
    <div id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
        <div class="post-item-inner">
            <div class="post-content coment">
                <h4>
                	<a href="<?php the_permalink(); ?>">
	                	<?php
						$theme_title = get_the_title();
						$theme_short_title = wp_trim_words($theme_title, 6, '...');
						echo esc_html($theme_short_title);
						?>	
                	</a>
                </h4>
                <div class="author-date">
                    <a href="<?php the_permalink(); ?>" class="date"><i class="icofont-calendar"></i><?php echo get_the_date('F j, Y'); ?></a>
                    <a href="<?php the_permalink(); ?>" class="admin"><i class="icofont-ui-user"></i><?php echo get_the_author_meta( 'display_name'); ?></a>
                </div>
                <?php 
	                $theme_xcerpt = get_the_excerpt();
					$shortexcerpt = wp_trim_words($theme_xcerpt, $num_words = 19, ' ');
					echo esc_html($shortexcerpt);
	            ?>
                <div class="post-footer">
                    <a href="<?php the_permalink(); ?>" class="text-btn"><?php esc_html_e('Read More', 'smartsaas'); ?><i class="icofont-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>