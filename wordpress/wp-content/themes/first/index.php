<?php
get_header();
 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();?>
    <div class="post_content">
        <?php if(is_single()){
            the_title('<h1>','</h1>');
            the_content();
        }else{
            the_shortlink(the_title('<h2>','</h2>',false));
            the_excerpt();
        }
        ?>
    </div>
    <?php endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
 
get_sidebar();
get_footer();
?>