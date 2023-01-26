<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package SmartSaas
 */

get_header();

if(!is_front_page() && !is_404() ):
    if(  function_exists('Smartsaas_Breadcrumb')){
        Smartsaas_Breadcrumb();
    }
endif;


if(is_active_sidebar('smartsaas_blog')){
    $ssaas_columns = "col-lg-8 col-12";
}else{
    $ssaas_columns = "col-lg-10 col-offset-1";
}

?>
<!-- Blog section start here -->
<div class="blog-section blog-page blog-single padding-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="<?php echo esc_attr($ssaas_columns); ?>">
                <article>
                    <div class="section-wrapper">
						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'single');
							?>
							<div class="navigations-part">   
							<?php 
							  	the_post_navigation(
								array(
									'prev_text' => '<div class="left">' . esc_html__( '<< Previous Article', 'smartsaas' ) . ' </div><span class="prev nav-title">%title</span>',

									'next_text' => '<div class="right">' . esc_html__( 'Next Article >>', 'smartsaas' ) . ' </div><span class="nav-pre prev">%title</span>',
								)
							);
							?>  
							</div>
							<!-- smartsaas user area content -->
							<div class="authors">
							    <div class="author-thumb">
							        <a href="<?php echo esc_url(get_the_author_link()); ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 150 ); ?></a>
							    </div>
							    <div class="author-content">
							        <h6><?php echo get_the_author_meta('display_name'); ?></h6>
							        <p><?php echo get_the_author_meta('description'); ?> </p>
							        <div class="scocial-media">
							        	<?php if(!empty(get_the_author_meta( 'facebook'))) :?>
							           		 <a href="<?php echo esc_url( get_the_author_meta( 'facebook') ); ?>" class="facebook"><i class="icofont-facebook"></i></a>
							            <?php endif; ?>

							            <?php if(!empty(get_the_author_meta( 'twitter'))) :?>
							            	<a href="<?php echo esc_url( get_the_author_meta( 'twitter') ); ?>" class="twitter"><i class="icofont-twitter"></i></a>
							            <?php endif; ?>
										
										<?php if(!empty(get_the_author_meta( 'linkedin'))) :?>
							           		<a href="<?php echo esc_url( get_the_author_meta( 'linkedin') ); ?>" class="linkedin"><i class="icofont-linkedin"></i></a>
							            <?php endif; ?>

							            <?php if(!empty(get_the_author_meta( 'vimeo'))) :?>
							          		<a href="<?php echo esc_url( get_the_author_meta( 'vimeo') ); ?>" class="vimeo"><i class="icofont-vimeo"></i></a>
							            <?php endif; ?> 

							            <?php if(!empty(get_the_author_meta( 'pinterest'))) :?>
							           		<a href="<?php echo esc_url( get_the_author_meta( 'pinterest') ); ?>" class="linkedin"><i class="icofont-pinterest"></i></a>
							            <?php endif; ?>

							            <?php if(!empty(get_the_author_meta( 'instagram'))) :?>
							           		<a href="<?php echo esc_url( get_the_author_meta( 'instagram') ); ?>" class="linkedin"><i class="icofont-instagram"></i></a>
							            <?php endif; ?>  
							        </div>
							    </div>
							</div>
							<!-- smartsaas user area content -->
							<?php
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
                    </div>
                </article>
            </div>
          	<?php
             if(is_active_sidebar('smartsaas_blog')): 
            ?>
            <div class="col-lg-4 col-md-7 col-12">
                <aside>
            		<?php
		        	 	dynamic_sidebar( 'smartsaas_blog' ); 
		        	 ?>
                </aside>
            </div>
        	<?php
        	 endif; 
        	?>
        </div>
    </div>
</div>
<!-- Blog section ending here -->

<?php
get_footer();
