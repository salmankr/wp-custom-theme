<div class="row main-content">
	<div class="col-sm-4 custom-blogPage-title">
		<h3 class="custom-page-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h3>
		<?php

	    if (has_post_thumbnail()):
	    	the_post_thumbnail('medium_large', array('class' => 'img-fluid'));
	    endif;
		?>
	</div>
	<div class="col-sm-8 custom-blogPage-content">
		<?php the_content(); ?>
	</div>
</div>
<hr>