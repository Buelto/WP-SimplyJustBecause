<!-- controls index.php archive.php & search.php-->
       <!-- blog titles and content-->
 <article>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <!-- author name/ publish date-->
    <p class="post-info">
        <?php the_time('F jS, Y'); ?> |

            <!-- categories-->
            <span class="category">
            <?php
    $categories = get_the_category();
    $separator =" ";
    $output ='';
    if($categories){
        foreach( $categories as $category){
            $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
        }
        echo $output;
    }
            ?></span></p>

    <p class="readMore">
        <?php echo get_the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>"> Continue Reading &raquo;</a>
    </p>
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('small-thumbnail'); ?>
    </a>
    <div class="seperator"></div>
</article>