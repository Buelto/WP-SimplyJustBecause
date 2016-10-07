<!-- controls home page-->
<?php

get_header();
//loop through blogs
if (have_posts()):?>

    <h3> Archive: 
    <?php
    if ( is_category() ) {
       single_cat_title();
    }   elseif ( is_tag() ){
        single_tag_title();
    }   elseif ( is_author() ){
        the_post();
        echo 'Author Archives: ' . get_the_author();
        rewind_posts();
    }   elseif ( is_day() ){
        echo 'Daily Archives: ' . get_the_date();
    }   elseif ( is_month() ){
        echo 'Monthly Archives: '. get_the_date('F Y');
    }   elseif ( is_year() ){
        echo 'Yearly Archives: '. get_the_date('Y');
    }   else{ 
        echo 'Archives:';
    }
    
    ?></h3>


<?php
while (have_posts()): the_post();?>
<!-- blog titles and content-->
    <article>

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
    

<?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
            <div class="seperator"></div>
</article>


<?php
endwhile;
else:echo'<p> No content found</p> ';
endif;
get_footer();
?>