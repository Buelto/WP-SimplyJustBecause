<?php

/*-------------------Comment Section--------------------*/

if( get_option ('thread_comments')){
    wp_enqueue_script('comment-reply');

    
}
function mytheme_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>
    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>
    <div class="comment-author vcard">
        <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
        <?php printf( __( '<cite class="fn">%s</cite>' ), get_comment_author_link() ); ?>
    </div>
    <?php if ( $comment->comment_approved == '0' ) : ?>
         <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
          <br />
    <?php endif; ?>

    <div class="comment-meta commentmetadata">
        <?php
        /* translators: 1: date, 2: time */
        printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
        ?>
    </div>

    <?php comment_text(); ?>

    <div class="reply">
        <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
    </div>
    <?php if ( 'div' != $args['style'] ) : ?>
    </div>
    <?php endif; ?>
    <?php
    }
/*---------------------------------------------------------*/
function SimplyJustBecause_resources() {
 /*---------------Linking Css------------------------------------*/  
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'SimplyJustBecause_resources');


/*-------------------Add featured img support--------------------*/

function featuredImg_setup()

{add_theme_support('post-thumbnails');
add_image_size('small-thumbnail', 600,500,true);
 add_image_size('banner-image', 1280,960,true);
}
add_action('after_setup_theme','featuredImg_setup');

/*-------------------Nav Menu--------------------*/

register_nav_menus(array('primary' => __('Primary Menu'),
                        'footer' =>__('Footer Menu'),));

/*-------------------Searchbar--------------------*/


add_theme_support('html5', array('search-form'));

