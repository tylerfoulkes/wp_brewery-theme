<?php 
	// Get the wp header
	get_header(); 
?>

	<ul class="margin-top-140">
		<div class="col-md-12"><p class="h2">Search results</p></div>
		<?php 

			// Check if there are any posts to be displayed
			if ( have_posts() ) {

				// Loop through posts
				while ( have_posts() ) {
					// Get the post
					the_post();

					// Check if the post type is of type beer and output title beer picture and description
					if(get_post_type( $post->ID ) == 'beer') { ?>
						<li class="col-xs-12 col-sm-6 col-md-4 margin-top-30">
							<a href="<?php the_permalink(); ?>" class="h5 margin-bottom-10"><?php the_title(); ?></a>
							<p class="arial margin-bottom-10"><?php echo get_post_meta($post->ID, '_beer_desc_id', true); ?></p>
						</li>
					<?php }

					// If the post is not type beer then output title and excerpt
					else { ?>
						<li class="col-xs-12 col-sm-6 col-md-4 margin-top-30">
							<a href="<?php the_permalink(); ?>" class="h5 margin-bottom-10"><?php the_title(); ?></a>
							<p class="arial"><?php the_excerpt(); ?></p>
						</li>
					<?php }
				} 
			} 
		?>
	</ul>

	<div id="labels">
		<?php 
			// Display labels if there are more than the allowed amount of outputted posts
			posts_nav_link('  ','prelabel','nextlabel'); 
		?>
	</div>

<?php 
	// Get the footer
	get_footer(); 
?>