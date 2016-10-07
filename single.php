<!-- controls home page-->
<?php

get_header();
//loop through blogs
if (have_posts()):
while (have_posts()): the_post();?>
    <!-- blog titles and content-->
    <article class="text-center">

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <!-- author name/ publish date-->
        <p class="post-info"><?php the_time('F jS, Y'); ?> |
        
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
<?php the_content(); ?>
<?php the_post_thumbnail('banner-image'); ?>
 
</article>


<?php
endwhile;
else:echo'<p> No content found</p> ';
endif;
get_footer();
?>