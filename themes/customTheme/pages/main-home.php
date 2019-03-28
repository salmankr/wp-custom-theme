<div class="row main-content">
	<div class="col-sm-12 custom-front-page">
		<?php  
	    if(have_posts()):
	        while(have_posts()):
	        	the_post();
	        	the_content();
	        endwhile;	
	    endif;
	    // woocomerce query //
	    $args = array(
            'post_type' => 'product',
            'posts_per_page' => 3,
	    );
	    $loop = new WP_Query($args);
	    ?>
	    <div class="row home products">
	    <?php
	    if($loop->have_posts()):
	        while($loop->have_posts()):
	        	$loop->the_post();
	        	global $product;
	        	?>
	        	    <div class="col-sm-4">
	        	    	<h3><?php the_title() ?></h3>
	        	    	<?php 

	        	    	?>
	                    <a href="<?php the_permalink(); ?>"><?php 
                        if(has_post_thumbnail()): 
	                    the_post_thumbnail('medium', array('alt' => 'Sorry! image broke'));
	                    else:
	                    echo "<b>Sorry! No featured image is set for this product</b>";	
	                    endif;
	                    ?>
	                    </a>
	                    <p><?php the_content(); ?></p>
	                    <?php
	                    if(get_post_meta( get_the_ID(), '_sale_price', true) != null):
	                    	woocommerce_show_product_sale_flash();
                        ?>
                        <br>
	                    	<div class="d-inline">
	                    		<b>WAS: </b><?php echo get_post_meta( get_the_ID(), '_regular_price', true); ?> Rs.
	                    	</div>
	                    	<div class="d-inline">
	                    		<b>NOW: </b><?php echo get_post_meta( get_the_ID(), '_sale_price', true); ?> Rs.
	                    	</div>
	                    	<?php
	                    else:
	                    	?>
	                    	<div class="d-inline">
	                    		<b>Price: </b><?php echo get_post_meta( get_the_ID(), '_regular_price', true); ?> Rs.
	                    	</div>
	                    	<?php
                        endif;
	        	    	// echo $product->get_display_price();
	        	    	// echo get_post_meta( get_the_ID(), '_sale_price', true);
	        	    	// echo get_post_meta( get_the_ID(), '_regular_price', true);
	        	    	?>
	        	    </div>
	        	

	        	<?php
	        endwhile;	
	    endif;	
	    wp_reset_postdata();
		?>
	    </div>
	</div>
</div>