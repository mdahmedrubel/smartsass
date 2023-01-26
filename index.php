<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SmartSaas
 */
get_header();

$smartsaas_blog = get_option( 'smartsaas_themeoptions' );

if(!is_front_page() && !is_404() ):
    if(  function_exists('Smartsaas_Breadcrumb')){
        Smartsaas_Breadcrumb();
    }
endif;

if(!empty($smartsaas_blog['blog_style']) && $smartsaas_blog['blog_style']== 1):
?>
<section class="blog-section blog-page padding-tb">
    <div class="container">
        <div class="section-wrapper">
            <div class="row justify-content-center">
        		<?php
        		if ( have_posts() ) :
        			if ( is_home() && ! is_front_page() ) :
        				?>
        				<header>
        					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        				</header>
        				<?php
        			endif;
        			/* Start the Loop */
        			while ( have_posts() ) :
        				the_post();

        				/*
        				 * Include the Post-Type-specific template for the content.
        				 * If you want to override this in a child theme, then include a file
        				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
        				 */
        				get_template_part( 'template-parts/content', get_post_type() );
        			endwhile;
        		else :
        			get_template_part( 'template-parts/content', 'none' );
        		endif;
        		?>
                <div class="col-12">
                    <div class="paginations">
                        <ul class="d-flex flex-wrap justify-content-center">
                           <?php blog_pagination(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
elseif(!empty($smartsaas_blog['blog_style']) && $smartsaas_blog['blog_style']== 2):

if(is_active_sidebar('smartsaas_blog')){
    $ssaas_columns = "col-lg-8 col-12";
}else{
    $ssaas_columns = "col-lg-10 col-offset-1";
}
?>
<div class="blog-section blog-page padding-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="<?php echo esc_attr($ssaas_columns); ?>">
                <article>
                    <div class="section-wrapper">
                        <div class="row justify-content-center">
                            <?php
                            if ( have_posts() ) :
                                if ( is_home() && ! is_front_page() ) :
                                    ?>
                                    <header>
                                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                    </header>
                                    <?php
                                endif;
                                /* Start the Loop */
                                while ( have_posts() ) :
                                    the_post();

                                    /*
                                     * Include the Post-Type-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                     */
                                    get_template_part( 'template-parts/content', get_post_type() );
                                endwhile;
                            else :
                                get_template_part( 'template-parts/content', 'none' );
                            endif;
                            ?>
                            <div class="col-12">
                                <div class="paginations">
                                    <ul class="d-flex flex-wrap justify-content-center">
                                       <?php blog_pagination(); ?>
                                    </ul>
                                </div>
                            </div>
                            </div>
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
<?php  
elseif(!empty($smartsaas_blog['blog_style']) && $smartsaas_blog['blog_style']== 3):

if(is_active_sidebar('smartsaas_blog')){
    $ssaas_columns = "col-lg-8 col-12";
}else{
    $ssaas_columns = "col-lg-10 col-offset-1";
}
?>
<!-- Blog Section Start Here -->
<div class="blog-section blog-page padding-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="<?php echo esc_attr($ssaas_columns); ?>">
                <article>
                    <div class="section-wrapper">
                        <div class="row justify-content-center">
                            <?php
                            if ( have_posts() ) :
                                if ( is_home() && ! is_front_page() ) :
                                    ?>
                                    <header>
                                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                    </header>
                                    <?php
                                endif;
                                /* Start the Loop */
                                while ( have_posts() ) :
                                    the_post();
                                    /*
                                     * Include the Post-Type-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                     */
                                    get_template_part( 'template-parts/post-formats/post', get_post_format() );
                                endwhile;               
                            else :
                                get_template_part( 'template-parts/content', 'none' );
                            endif;
                            ?> 
                            <div class="col-12">
                                <div class="paginations">
                                    <?php blog_pagination(); ?>
                                </div>
                            </div>
                        </div>
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
<!-- Blog Section Ending Here -->
<?php
endif;
get_footer();








