<?php get_header();?>
	
	<ul id="category">
		
		<?php
			// First lets set some arguments for the query:
			// Optionally, those could of course go directly into the query,
			// especially, if you have no others but post type.
			$args = array(
	    		'post_type' => 'beer',
	    		'posts_per_page' => 5
	    		// Several more arguments could go here. Last one without a comma.
			);

			// Query the posts:
			$beer_query = new WP_Query($args);

			// Loop through the obituaries:
			while ($beer_query->have_posts()) : $beer_query->the_post();
	    		// Echo some markup
	    		echo '<p>';
	    		// As with regular posts, you can use all normal display functions, such as
	    		the_title(); ?>
	    		<?php // Within the loop, you can access custom fields like so:
	    		echo get_post_meta(get_the_ID(), '_beer_desc_id', true) . "<br/>";
	    		echo get_post_meta(get_the_ID(), '_beer_abv_id', true) . "<br/>";
	    		echo get_post_meta(get_the_ID(), '_beer_ibu_id', true) . "<br/>"; 
	    		echo wp_get_attachment_image( get_post_meta(get_the_ID(), '_image_id', true), 'large', false); ?>
	    		<?php echo '</p>'; // Markup closing tags.
			endwhile;

			// Reset Post Data
			wp_reset_postdata();	 
		?>

	</ul>
	
	<div class="clearfix"></div>

<?php get_footer(); ?>