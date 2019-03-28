<?php get_header(); ?>
<div class="container-fluid pt-5">
    <div class="pull-right web-search"><?php get_search_form(); ?></div>
    <?php 
        if(have_posts()):
            while(have_posts()): 
                the_post();
                         get_template_part( 'posts/main', 'blog' );
            endwhile;    
        endif;  
    ?>
</div>

<?php get_footer(); ?>