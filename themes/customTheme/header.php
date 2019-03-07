<!DOCTYPE html>
<html>
<head>
	<title>First Custom Theme</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<div class="container-fluid header-container">
		<div class="row">
			
			<div class="col-lg-12">
				<nav class="navbar navbar-expand-lg navbar-light my-custom-theme-logo">
					
					    <?php the_custom_logo(); ?>
				  <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <?php 
				  wp_nav_menu( array(
				  	'theme_location'  => 'primary',
				  	'menu_class' => 'navbar-nav',
				  	'container' => 'div',
				  	'container_class' => 'collapse navbar-collapse justify-content-end',
				  	'container_id' => 'navbarNavDropdown',
				  	'add_li_class' => 'li_class',
				  	'walker' => new WP_Bootstrap_Navwalker(),
				  	'depth' => 2,
				  ) );
				  ?>
				</nav>
			</div>
		</div>
    </div>