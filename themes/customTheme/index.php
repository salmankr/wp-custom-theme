<?php get_header(); ?>
<div class="container-fluid pt-5">
    <?php 
    if(have_posts()):
        while(have_posts()): the_post();
            ?>
            <div class="row main-content">
                <?php 
                if(is_home()):
                    get_template_part( 'posts/main', 'blog' );
                elseif(is_front_page()):
                    get_template_part( 'pages/main', 'home' );
                else:
                    get_template_part( 'pages/standard', 'page' );    
                endif;    
                ?>
            </div>
            <?php
            if(is_home()):
                ?> <hr> <?php
            endif;    
        endwhile;    
    endif;    
    ?>
</div>

<?php get_footer(); ?>