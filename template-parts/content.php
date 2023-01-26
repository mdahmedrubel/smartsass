<?php
/**
* Template part for displaying posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package SmartSaas
*/
$smartsaas_blog = get_option( 'smartsaas_themeoptions' );

if(!empty($smartsaas_blog['blog_style']) && $smartsaas_blog['blog_style']== 1):
?>
<div class="col-lg-4 col-sm-6 col-12">
    <div id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
        <div class="post-item-inner">
            <div class="post-thumb">
                <?php if ( has_post_thumbnail() ): ?>
                <a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
				<?php endif; ?>
            </div>
            <div class="post-content coment">
                <h4>
                	<a href="<?php the_permalink(); ?>">
	                	<?php
						$medicap_title = get_the_title();
						$medicap_short_title = wp_trim_words($medicap_title, 6, '...');
						echo esc_html($medicap_short_title);
						?>	
                	</a>
                </h4>
                <div class="author-date">
                    <a href="<?php the_permalink(); ?>" class="date"><i class="icofont-calendar"></i><?php echo get_the_date('F j, Y'); ?></a>
                    <a href="<?php the_permalink(); ?>" class="admin"><i class="icofont-ui-user"></i><?php echo get_the_author_meta( 'display_name'); ?></a>
                </div>
                <?php 
	                $medicap_xcerpt = get_the_excerpt();
					$shortexcerpt = wp_trim_words($medicap_xcerpt, $num_words = 19, ' ');
					echo esc_html($shortexcerpt);
	            ?>
                <div class="post-footer">
                    <a href="<?php the_permalink(); ?>" class="text-btn"><?php esc_html_e('Read More', 'smartsaas'); ?><i class="icofont-double-right"></i></a>
                    <i class="icofont-comment"></i><span><?php  comments_popup_link('0', '1', '%', 'comments') ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
elseif(!empty($smartsaas_blog['blog_style']) && $smartsaas_blog['blog_style']== 2):
?>
<div class="col-sm-6 col-12">
    <div id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
        <div class="post-item-inner">
            <div class="post-thumb">
                <?php if ( has_post_thumbnail() ): ?>
                <a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>
				<?php endif; ?>
            </div>
            <div class="post-content coment">
                <h4>
                	<a href="<?php the_permalink(); ?>">
	                	<?php
						$medicap_title = get_the_title();
						$medicap_short_title = wp_trim_words($medicap_title, 6, '...');
						echo esc_html($medicap_short_title);
						?>	
                	</a>
                </h4>
                <div class="author-date">
                    <a href="<?php the_permalink(); ?>" class="date"><i class="icofont-calendar"></i><?php echo get_the_date('F j, Y'); ?></a>
                    <a href="<?php the_permalink(); ?>" class="admin"><i class="icofont-ui-user"></i><?php echo get_the_author_meta( 'display_name'); ?></a>
                </div>
                <?php 
	                $medicap_xcerpt = get_the_excerpt();
					$shortexcerpt = wp_trim_words($medicap_xcerpt, $num_words = 19, ' ');
					echo esc_html($shortexcerpt);
	            ?>
                <div class="post-footer">
                    <a href="<?php the_permalink(); ?>" class="text-btn"><?php esc_html_e('Read More', 'smartsaas'); ?><i class="icofont-double-right"></i></a>
                    <i class="icofont-comment"></i><span><?php  comments_popup_link('0', '1', '%', 'comments') ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
 endif; 
?>