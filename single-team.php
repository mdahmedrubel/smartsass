<?php 
get_header();

$teams_meta = get_post_meta(get_the_ID(), 'saas_team', true);

if(function_exists('Smartsaas_Breadcrumb')){  
    Smartsaas_Breadcrumb();
}
?>
<!-- Team Member Section Start here -->
<div class="team-section team-single padding-tb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="team-top">
                    <div class="team-top-area">
                        <div class="row no-gutters align-items-center">
                            <div class="col-lg-6 col-12">
                                <div class="team-thumb">
                                    <?php  
                                    $teams_img = get_the_post_thumbnail_url();
                                    ?>
                                    <img src="<?php echo esc_url($teams_img); ?>" alt="<?php bloginfo('name'); ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="team-content">
                                    <h3 class="member-name"><?php the_title(); ?></h3>
                                    <span class="member-dagi">
                                        <?php 
                                        if(!empty($teams_meta['position'])):
                                            echo esc_html($teams_meta['position']); 
                                        endif;
                                        ?>
                                    </span>
                                    <p class="member-details">
                                        <?php 
                                        if(!empty($teams_meta['team_excerpt'])):
                                            echo esc_html($teams_meta['team_excerpt']); 
                                        endif;
                                        ?>
                                    </p>
                                    <h5>
                                        <?php 
                                        if(!empty($teams_meta['excerpt_btitle'])):
                                            echo esc_html($teams_meta['excerpt_btitle']); 
                                        endif;
                                        ?>
                                    </h5>
                                    <?php the_content(); ?>
                                    <ul class="icon-style-list">
                                        <li><i class="fas fa-home"></i><span><?php if(!empty($teams_meta['tam_address'])): echo esc_html($teams_meta['tam_address']); endif; ?></span></li>
                                        <li><i class="fas fa-envelope"></i><span>
                                        <?php if(!empty($teams_meta['team_mail'])): echo esc_html($teams_meta['team_mail']); endif; ?></span></li>
                                        <li><i class="fas fa-phone-square"></i><span><?php if(!empty($teams_meta['team_number'])): echo esc_html($teams_meta['team_number']); endif; ?></span></li>
                                        <li><i class="fas fa-globe"></i><span><?php if(!empty($teams_meta['team_website'])): echo esc_html($teams_meta['team_website']); endif; ?></span></li>
                                        <li>
                                            <i class="fas fa-share-alt-square"></i>
                                            <ul class="d-flex flex-wrap justify-content-start">
                                               <?php if(!empty($teams_meta['team_fburl'])): ?>
                                                <li><a href="<?php echo esc_url($teams_meta['team_fburl']); ?>" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <?php endif; ?>
                                                <?php if(!empty($teams_meta['team_piurl'])): ?>
                                                <li><a href="<?php echo esc_url($teams_meta['team_piurl']); ?>" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                                                <?php endif; ?>
                                                <?php if(!empty($teams_meta['team_twurl'])): ?>
                                                <li><a href="<?php echo esc_url($teams_meta['team_twurl']); ?>" class="twitter"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <?php endif; ?>

                                                <?php if(!empty($teams_meta['team_gburl'])): ?>
                                                <li><a href="<?php echo esc_url($teams_meta['team_gburl']); ?>" class="globe"><i class="fas fa-globe"></i></a>
                                                </li>
                                                <?php endif; ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-bottom skill-award">
                    <div class="team-bottom-area">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-12">
                                <div class="skill-area">
                                    <h5>
                                        <?php 
                                        if(!empty($teams_meta['progress_title'])):
                                            echo esc_html($teams_meta['progress_title']); 
                                        endif;
                                        ?>
                                    </h5>
                                    <div class="d-flex flex-wrap justify-content-lg-start justify-content-between">
                                        <?php  
                                        $counts = 0;
                                        foreach($teams_meta['progress'] as $progres):
                                        $counts++;

                                        if($counts== 1){
                                            $class = "first";
                                        }elseif($counts== 2){
                                            $class = "second";
                                        }elseif($counts== 3){
                                            $class = "third";
                                        }
                                        ?>
                                        <div class="text-center team-item">
                                            <div class="circles text-center">
                                                <div class="circle <?php echo esc_attr($class); ?>" data-percent="<?php  if(!empty($progres['count_number'])): echo esc_attr($progres['count_number']); endif; ?>">
                                                    <strong><?php if(!empty($progres['count_number'])): echo esc_html($progres['count_number']); endif; ?><i>%</i></strong>
                                                </div>                          
                                            </div>
                                            <p>
                                            <?php 
                                            if(!empty($progres['progress_bottom'])):
                                                echo esc_html($progres['progress_bottom']); 
                                            endif;
                                            ?>
                                            </p>
                                        </div>
                                        <?php  
                                        endforeach;
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="award-area">
                                    <h5>
                                    <?php 
                                        if(!empty($teams_meta['prize_title'])):
                                            echo esc_html($teams_meta['prize_title']); 
                                        endif;
                                    ?>
                                    </h5>
                                    <div class="d-flex flex-wrap justify-content-lg-start justify-content-between">
                                        <?php 
                                        if(!empty($teams_meta['prizes'])):
                                        foreach($teams_meta['prizes'] as $teams):
                                        if ( isset($teams['prize_imz']['id'])) {
                                        $t_prize = wp_get_attachment_image_src($teams['prize_imz']['id'], 'large');
                                        }
                                        ?>
                                        <div class="team-item text-center">
                                            <div class="team-thumb">
                                                 <img src="<?php echo esc_url($t_prize[0]); ?>" alt="<?php bloginfo('name'); ?>">
                                            </div>
                                            <p>
                                            <?php 
                                            if(!empty($teams['prize_year'])):
                                                echo esc_html($teams['prize_year']); 
                                            endif;
                                            ?>
                                            </p>
                                        </div>
                                        <?php  
                                        endforeach;
                                        endif;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Member Section Ending here -->
<?php
get_footer();
