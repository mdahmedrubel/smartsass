<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage smartsaas
 * @since 1.0.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label if
 * one was passed to get_search_form() in the args array.
 */
?>
<!-- search area -->
<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="search" id="s" class="search-field" name="s" placeholder="<?php echo esc_attr_e( 'Search Here', 'smartsaas' ); ?>" value="<?php echo get_search_query(); ?>">
    <button class="search-btn" type="submit">
        <span class="serch-icon">
            <i class="icofont-search-2"></i>
        </span>
    </button>
</form>
<!-- search area -->

