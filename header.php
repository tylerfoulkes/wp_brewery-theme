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
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/menu.js"></script>
		<link href="<?php bloginfo('template_directory')?>/style.css" media="all" type="text/css" rel="stylesheet">
		<?php wp_head(); ?>
	</head>

	<style>
		.menu a {
			color: #<?php header_textcolor(); ?> !important;
		}
	</style>

	<body <?php body_class(); ?>>
		<header>
			<?php get_header_textcolor(); ?>
			<div id="logo">
				<?php if ( function_exists( 'the_custom_logo' ) ) {
					the_custom_logo();
				} ?>
			</div>
			<div id="mobile_menu">
				<div class="navline"></div>
		        <div class="navline"></div>
		        <div class="navline"></div>
			</div>
			<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	    		<div>
	        		<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
	       			<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
	        		<input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
	    		</div>
			</form>
			<?php wp_nav_menu( array( 'theme_location' => 'top_nav' ) ); ?>
		</header>