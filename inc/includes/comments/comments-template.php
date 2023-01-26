<?php
/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_list_comments
 * @since 1.0.0
 * @version 1.0.0
 * @author CodexCoder
 */

function theme_comment_template( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
            // Display trackbacks differently than normal comments.
            ?>
            <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
            <p><?php esc_html__( 'Pingback:', 'smartsaas' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( esc_html__( '(Edit)', 'smartsaas' ), '<span class="edit-link">', '</span>' ); ?></p></li>
            <?php
            break;
        default :
        // Proceed with normal comments.
        global $post;
        ?>
        <div class="blog-comment">
            <div class="comment-contents">
                <ul class="my-cls">
                    <li class="c-list">
                        <div class="c-image">
                            <?php echo get_avatar( $comment, 85 ); ?>
                        </div>
                        <div class="c-content"> 
                            <h6>
                                <?php echo get_comment_author_link(); ?> 
                            </h6>
                                <span class="marginb">
                                    <?php echo sprintf( esc_html__( '%1$s at %2$s', 'smartsaas' ), get_comment_date(), get_comment_time() ) ?>
                                </span>
                                 <span class="creplay-btn">
                                    <span class="reply">
                                         <?php
                                            comment_reply_link(
                                            array_merge( $args,
                                                array(
                                                    'reply_text' => '<i class="icofont-reply-all"></i> Reply',
                                                    'depth'      => $depth,
                                                    'max_depth'  => $args['max_depth']
                                                    )
                                                )
                                            );
                                        ?>                       
                                    </span>
                               </span>
                            <?php if ( '0' == $comment->comment_approved ) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html__( 'Your comment is awaiting moderation.', 'smartsaas' ); ?></p>
                            <?php endif; ?>
                            <?php comment_text(); ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    <?php
    break;
    endswitch; // end comment_type check
}

/**
 * Comment Form
 *
 * @since 1.0.0
 * @version 1.0.0
 * @author Labartisan
 */
function theme_comment_form() {
?>

<div id="responds" class="smartsaas-comment-respond">
    <div class="add-comment">
        <div class="smartsaas-comment">
            <?php
                $commenter = wp_get_current_commenter();
                $req = get_option( 'comment_author__mail' );
                $aria_req = ( $req ? " aria-required='true'" : '' );
                $consent  = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';


                $fields =  array(
                    'author' => '<div class="container"><div class="row"><div class="col-lg-6"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" placeholder="' . esc_attr__( 'Name', 'smartsaas' ) . '"' . $aria_req . ' /></div>',

                    'email'  => '<div class="col-lg-6"><input id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" placeholder="' . esc_attr__( 'Email', 'smartsaas' ) . '"' . $aria_req . ' /></div>',

                    'text'    => '<div class="col-lg-12"><input id="text" name="text" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" placeholder="' . esc_attr__( 'Subject', 'smartsaas' ) . '"/></div></div></div>',

                    'cookies' => '',
                );
                $comments_args = array(
                    'fields' =>  $fields,
                    'title_reply'=> __( '<span class="title-border">Leave a comment</span>', 'smartsaas' ),
                     'label_submit'  => __( 'Send Comment', 'smartsaas' ),
                     'comment_notes_before'  => '',
                    'comment_field' => '<div class="container"><div class="row"><div class="col-lg-12"><textarea id="comment-reply" name="comment" cols="45" rows="5" placeholder="' . esc_attr__( 'Type here your comment', 'smartsaas' ) . '" aria-required="true"></textarea></div></div></div>',
                    'comment_notes_after' => '',
                );
                comment_form($comments_args);

            ?>
        </div>          
    </div>          
 </div>
    <?php

}