<div class="post-content">
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
        <i class="fa fa-comments"></i><?php  comments_popup_link('0 Comment', '1 Comment', '% Comments') ?>
    </div>
    <p>
    <?php 
        $medicap_xcerpt = get_the_excerpt();
		$shortexcerpt = wp_trim_words($medicap_xcerpt, $num_words = 50, ' ');
		echo esc_html($shortexcerpt);
    ?>
    </p>
    <a href="<?php the_permalink(); ?>" class="lab-btn"><span><?php esc_html_e('Read More', 'smartsaas'); ?></span></a>
</div>