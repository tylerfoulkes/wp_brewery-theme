<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width">
		<title>
			<?php if ( is_front_page() ){
					echo bloginfo('title');
					echo (' | ');
					echo bloginfo('description');
				} else {
					wp_title('');
					echo (' | ');
					echo bloginfo('title');
				} ?>
		</title>
		<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
		<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
		<link href="<?php bloginfo('template_directory')?>/style.css" media="all" type="text/css" rel="stylesheet">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<header class="page-header">
			<?php get_header_textcolor(); ?>
				<div class="col-md-4 col-xs-6 offset-xs-4 offset-md-0">
					<div id="logo">
						<?php 
							// Check if there is a custom logo and display if there is
							if ( function_exists( 'the_custom_logo' ) ) {
								the_custom_logo();
							} 
						?>
					</div>
				</div>
				 <div class="col-xs-12 col-md-1">
					<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapsing-navbar" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">&#9776;</button>
				</div>
				<div class="col-md-4 col-xs-12">
					<?php
						// Used walker class to make Worpress nav menu bootstrap friendly
						$defaults = array(
					        'theme_location'  => 'top_nav',
					        'container'       => 'ul',
	        				'menu_class'      => 'col-xs-12 nav nav-inline float-xs-right collapse navbar-toggleable-xs',
	        				'menu_id'		  => 'collapsing-navbar',
	        				'walker'          => new Primary_Walker_Nav_Menu()
						);
						wp_nav_menu( $defaults );
					 ?>
				</div>
				<div class="col-xs-12 col-md-3">
					<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			    		<div>
			        		<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
			       			<input type="text" class="form-control" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search"/>
			        		<input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
			    		</div>
					</form>
				</div>
		</header>
		<div class="clearfix"></div>