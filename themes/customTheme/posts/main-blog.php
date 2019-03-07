<div class="col-sm-4 custom-blogPage-title">
	<h3 class="custom-page-title">
		<?php the_title(); ?>
	</h3>
	<?php

    if (has_post_thumbnail()):
    	the_post_thumbnail('medium_large', array('class' => 'img-fluid'));
    endif;
	?>
</div>
<div class="col-sm-8 custom-blogPage-content">
	<?php the_content() ?>
</div>