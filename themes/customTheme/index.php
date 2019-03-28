<?php get_header(); ?>
<div class="container-fluid pt-5">
    <?php
    if(is_home()):
        ?>
        <div class="web-search clearfix"><?php get_search_form(); ?></div>
        <?php
    endif; 
        if(have_posts()):
            while(have_posts()): 
                the_post();
                    if(is_home()):
                         get_template_part( 'posts/main', 'blog' );   
                    endif;   
            endwhile;
            ?>
            <div class="row custom-pagination">
                <div class="col-sm-6">
                    <?php next_posts_link('Previous') ?>
                </div>
                <div class="col-sm-6">
                    <?php previous_posts_link('Next') ?>
                </div>
            </div>
            <?php    
        endif;

        if (is_front_page()) :
            get_template_part( 'pages/main', 'home' );
        elseif(! is_home()):
            get_template_part( 'pages/standard', 'page' );
        endif;    
    ?>
</div>

<?php get_footer(); ?>