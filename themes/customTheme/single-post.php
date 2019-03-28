<?php get_header(); ?>
<div class="container-fluid pt-5 single-blogpost">
    <?php 
        if(have_posts()):
            while(have_posts()): 
                the_post();
                    get_template_part( 'posts/single', 'blogPost' ); 
                    ?>
                    <div class="row custom-pagination">
                        <div class="col-sm-6">
                            <?php previous_post_link() ?>
                        </div>
                        <div class="col-sm-6">
                            <?php next_post_link() ?>
                        </div>
                    </div>
                    <?php
            endwhile;    
               
        endif; 
    ?>
</div>

<?php get_footer(); ?>