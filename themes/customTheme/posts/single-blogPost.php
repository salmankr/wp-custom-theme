<div class="row featured-image">
		<?php
        if(has_post_thumbnail()):
        	?>
	        <div class="col-lg-12" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
	        	<?php
                // the_post_thumbnail("full", array('class' => 'img-fluid'));
                // the_post_thumbnail_url();
                ?>
            </div> 
            <?php
        endif;
		?>
</div>
<div class="row page-title">
	<div class="col-lg-12">
		<h3 class="custom-page-title">
			<?php the_title(); ?>
		</h3>
		<b><?php the_category(' '); ?> || Posted On: <?php the_time('l, F jS, Y') ?> at <?php the_time() ?> || Posted By: <?php the_author(); ?></b>
	</div>
</div>
<div class="row page-content mt-5 mb-5">
	<div class="col-lg-12">
		<?php the_content(); ?>
	</div>
</div>

<div class="row comment-section">
	<div class="col-lg-12">
		<?php
        if(comments_open()):
        	comments_template();
        else:
		?>
		    <h4 class="text-center">Sorry! Comments are Closed for this Post</h4>
		<?php
	    endif;
	    ?>
	</div>
</div>