<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
                                    get_template_part( 'template-parts/content', 'search');
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
get_footer();
