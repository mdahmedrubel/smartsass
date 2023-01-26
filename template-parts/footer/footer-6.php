<?php 
$footer_six = get_option('smartsaas_themeoptions');
?>
<!-- Footer Section Start Here -->
<footer>
    <div class="footer-top style-2 maketing padding-tb">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <?php 
                        if (is_active_sidebar('footer_about')){
                            dynamic_sidebar( 'footer_about' );
                        }
                    ?>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-item">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="content">
                                    <?php 
                                        if (is_active_sidebar('footer_two')){
                                            dynamic_sidebar( 'footer_two' );
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <?php 
                        if (is_active_sidebar('footer_three')){
                            dynamic_sidebar( 'footer_three' );
                        }
                    ?>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer-item">
                        <div class="footer-inner">
                            <div class="footer-content">
                                <div class="content">
                                    <?php 
                                        if (is_active_sidebar('footer_four')){
                                            dynamic_sidebar( 'footer_four' );
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if(!empty($footer_six['footer_bottom']) && $footer_six['footer_bottom'] == true): ?>
        <div class="footer-bottom style-2">
            <div class="container">
                <div class="section-wrapper">
                    <p>
                        <?php if(!empty($footer_six['copy_right'])): echo esc_html($footer_six['copy_right']); endif; ?>
                        <a href="<?php if(!empty($footer_six['author_url'])): echo esc_url($footer_six['author_url']); endif; ?>">
                            <?php if(!empty($footer_six['site_author'])): echo esc_html($footer_six['site_author']); endif; ?>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    <?php endif; ?>
</footer>
<!-- Footer Section Ending Here -->