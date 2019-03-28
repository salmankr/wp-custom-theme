<div class="col-sm-12 custom-standard-page">
	<?php 
	if(have_posts()):
        while(have_posts()):
        	the_post();
        	?>
        	<h3 class="custom-page-title">
        		<?php the_title(); ?>
        	</h3>
        	<?php the_content(); ?>
        	<?php
        endwhile;	
    endif;
    ?>
</div>