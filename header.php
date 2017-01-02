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
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
		<script src="<?php //bloginfo('template_directory'); ?>/js/menu.js"></script>
		<link href="<?php bloginfo('template_directory')?>/style.css" media="all" type="text/css" rel="stylesheet">
		<?php wp_head(); ?>
	</head>

	<style>
		.menu a {
			color: #<?php header_textcolor(); ?> !important;
		}

		#logo img {
			border: 1px solid #000;
			width: 150px;
		}

		.dropdown:hover .dropdown-menu {
			display: block;
		}

		#searchsubmit {
			display: none;
		}

		.beer_image img {
			width: 100%;
		}

		.nav-link, .dropdown-toggle {
			color: white;
		}

		.cat {
			text-transform: uppercase;
			font-weight: bold;
		}

		.social-behance {
			width: 40px;
		}

		.dropdown-menu {
			border: none;
			padding: 5px;
			border-radius: 0;
			margin: 0;
			width: auto;
			background-color: white;
		}

		.dropdown-menu:after {
			display: none;
		}

		.dropdown-menu .nav-link {
			color: black;
		}

		.dropdown-menu .nav-link:hover {
			color: grey;
		}
	</style>

	<body <?php body_class(); ?>>
		<header class="page-header">
			<?php get_header_textcolor(); ?>
			<div class="row-fluid">
				<div class="col-md-4 col-xs-6 offset-xs-4 offset-md-0">
					<div id="logo">
						<?php if ( function_exists( 'the_custom_logo' ) ) {
							the_custom_logo();
						} ?>
					</div>
				</div>
				<div class="col-md-4 col-xs-12">
				<?php
					$defaults = array(
				        'theme_location'  => 'top_nav',
				        'container'       => 'ul',
        				'menu_class'      => 'nav nav-inline float-xs-right',
        				'walker'          => new Primary_Walker_Nav_Menu()
					);
					wp_nav_menu( $defaults );
				 ?>
				</div>
				<div class="col-md-4">
					<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			    		<div>
			        		<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
			       			<input type="text" class="form-control" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search"/>
			        		<input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
			    		</div>
					</form>
				</div>
			</div>
		</header>
	<div class="clearfix"></div>