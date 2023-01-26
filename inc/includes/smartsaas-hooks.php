<?php
/*smartsaas theme user avatar social share*/
add_action( 'show_user_profile', 'smartsaas_extra_user_profile_fields' );
add_action( 'edit_user_profile', 'smartsaas_extra_user_profile_fields' );

function smartsaas_extra_user_profile_fields( $user ) { 
    ?>
    <h3><?php esc_html_e('User social profiels', 'smartsaas'); ?></h3>
    <table class="form-table">
        <tr>
            <th><label for="facebook"><?php esc_html_e('Facebook', 'smartsaas'); ?></label></th>
            <td>
                <input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter your facebook url.', 'smartsaas'); ?></span>
            </td>
        </tr>
                <tr>
            <th><label for="linkedin"><?php esc_html_e('Linkedin', 'smartsaas'); ?></label></th>
            <td>
                <input type="text" name="linkedin" id="linkedin" value="<?php echo esc_attr( get_the_author_meta( 'linkedin', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter your linkedin url.', 'smartsaas'); ?></span>
            </td>
        </tr>
        <tr>
            <th><label for="twitter"><?php esc_html_e('Twitter', 'smartsaas'); ?></label></th>
            <td>
                <input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter your twitter url.', 'smartsaas'); ?></span>
            </td>
        </tr>
        <tr>
            <th><label for="instagram"><?php esc_html_e('Instagram', 'smartsaas'); ?></label></th>
            <td>
                <input type="text" name="instagram" id="instagram" value="<?php echo esc_attr( get_the_author_meta( 'instagram', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter your instagram url.', 'smartsaas'); ?></span>
            </td>
        </tr>
        <tr>
            <th><label for="pinterest"><?php esc_html_e('Pinterest', 'smartsaas'); ?></label></th>
            <td>
                <input type="text" name="pinterest" id="pinterest" value="<?php echo esc_attr( get_the_author_meta( 'pinterest', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter your pinterest url.', 'smartsaas'); ?></span>
            </td>
        </tr>
        <tr>
            <th><label for="behance"><?php esc_html_e('Behance', 'smartsaas'); ?></label></th>
            <td>
                <input type="text" name="behance" id="behance" value="<?php echo esc_attr( get_the_author_meta( 'behance', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter your behance url.', 'smartsaas'); ?></span>
            </td>
        </tr>
        <tr>
            <th><label for="vimeo"><?php esc_html_e('Vimeo', 'smartsaas'); ?></label></th>
            <td>
                <input type="text" name="vimeo" id="vimeo" value="<?php echo esc_attr( get_the_author_meta( 'vimeo', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php esc_html_e('Please enter your vimeo url.', 'smartsaas'); ?></span>
            </td>
        </tr>
    </table>
    <?php 
}

add_action( 'personal_options_update', 'smartsaas_saveesc_html_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'smartsaas_saveesc_html_extra_user_profile_fields' );

function smartsaas_saveesc_html_extra_user_profile_fields( $user_id ) {
    if ( !current_user_can( 'edit_user', $user_id ) ) { return false; }
        update_user_meta( $user_id, 'facebook', $_POST['facebook'] );
        update_user_meta( $user_id, 'linkedin', $_POST['linkedin'] );
        update_user_meta( $user_id, 'twitter', $_POST['twitter'] );
        update_user_meta( $user_id, 'instagram', $_POST['instagram'] );
        update_user_meta( $user_id, 'pinterest', $_POST['pinterest'] );
        update_user_meta( $user_id, 'behance', $_POST['behance'] );
        update_user_meta( $user_id, 'vimeo', $_POST['vimeo'] );
    }


    
/*blog pagination*/
function blog_pagination(){
    global $wp_query;
    $smartsaas_pagination = paginate_links(array(
        'current' => max(1, get_query_var('paged')),
        'total'   => $wp_query->max_num_pages,
        'type'    => 'list',
        'prev_next'    =>false,
    ));
    $smartsaas_pagination = str_replace("<ul class='page-numbers'>", "<ul class='d-flex flex-wrap justify-content-center'>", $smartsaas_pagination);
    $smartsaas_pagination = str_replace("<li>", "<li class='d-none d-sm-block'>", $smartsaas_pagination);
    $smartsaas_pagination = str_replace("<a class='page-numbers'", "<a class='page-link' ", $smartsaas_pagination);
    echo wp_kses_post($smartsaas_pagination);
}


/*blog comment form replace*/
function move_comment_field( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'move_comment_field' );


/**
 * Apply theme's stylesheet to the visual editor. 
 *
 * @uses add_editor_style() Links a stylesheet to visual editor
 * @uses get_stylesheet_uri() Returns URI of theme stylesheet
 */
function smartsaas_add_editor_styles() {
 	add_editor_style( get_stylesheet_uri() );

}
add_action( 'init', 'smartsaas_add_editor_styles' );


