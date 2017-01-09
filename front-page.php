<?php get_header(); ?>
 
<div id="banner_cont">
	<?php 
		// Check if there is homepage content and display it as the call to action
		if ( have_posts() ) { 
			the_post(); 
	?>
		<div id="call" class="call-to-action">
			<?php 
				the_content();
			?>
		</div>
	<?php 
		} 
	?>
	<img src="<?php header_image(); ?>"/>
</div>

<?php 
	// Create a query for beer posts and limit the amount to 3
	$args = array('post_type' => 'beer', 'posts_per_page' => 3);
	$loop = new WP_Query( $args ); 
?>
 
<ul class="offset-sm-1 col-sm-10 margin-top-60 margin-bottom-60">
	<?php
		// Loop through posts if there are any
		while ( $loop->have_posts()) : $loop->the_post();

			// Check if they have types taxonomy of featured and display the beer post
			if (has_term( 'featured', 'types' )) { ?>
				<li class="col-sm-12 col-md-4">
					<a href="<?php the_permalink(); ?>">
						<p class="beer_image col-lg-5 offset-lg-0 col-xs-6 offset-xs-3 col-sm-8 offset-sm-1"><?php echo wp_get_attachment_image( get_post_meta($post->ID, '_image_id', true), 'medium', false); ?></p>
						<div class="col-lg-7 offset-lg-0 col-xs-6 offset-xs-3 col-sm-8 offset-sm-1">
							<p class="h5 margin-bottom-10"><?php the_title(); ?></p>
							<p class="arial margin-bottom-10"><?php echo get_post_meta($post->ID, '_beer_desc_id', true); ?></p>
				    		<p class="arial margin-bottom-10"><span class="cat">ABV </span><?php echo get_post_meta($post->ID, '_beer_abv_id', true); ?></p>
				    		<p class="arial margin-bottom-10"><span class="cat">IBUS </span><?php echo get_post_meta($post->ID, '_beer_ibu_id', true); ?></p>
			    		</div>
			    	</a>
				</li>
			<?php }
		endwhile; 
	?>
	<div class="clearfix"></div>
</ul>
<div class="clearfix"></div>

<?php 
	// Output the footer
	get_footer(); 
?>