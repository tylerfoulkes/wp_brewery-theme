<?php 
	// Get the wp header
	get_header();
?>
	
	<ul class="row-fluid margin-top-140 margin-bottom-60">
		<?php 
			// Create a query with post type beer and posts per page as in infinity
			$args = array('post_type' => 'beer', 'posts_per_page' => -1);
			$loop = new WP_Query( $args ); 
		
			// Check for and loop through the posts according to the query
			while ( $loop->have_posts()) : $loop->the_post();
	    		
	    		// Check for post type beer...not really necessary but left it in because I didn't want to find out
	    		if(get_post_type( $post->ID ) == 'beer') { ?>
	    			<li class="col-xs-12 col-sm-4 col-xl-3">
	    				<a href="<?php the_permalink(); ?>">
							<p class="beer_image col-xs-5">
								<?php 
									// Output beer post image which is saved as meta data due to custom post type
									echo wp_get_attachment_image( get_post_meta($post->ID, '_image_id', true), 'medium', false); 
								?>
							</p>
							<div class="col-xs-7">
								<p class="h5 margin-bottom-10">
									<?php 
										// Output post title
										the_title(); 
									?>
								</p>
								<p class="arial margin-bottom-10">
									<?php 
										// Output beer post description
										echo get_post_meta($post->ID, '_beer_desc_id', true); 
									?>
								</p>
					    		<p class="arial margin-bottom-10">
					    			<span class="cat">ABV </span>
					    			<?php 
					    				// Output beer post ABV
					    				echo get_post_meta($post->ID, '_beer_abv_id', true); 
					    			?>
					    		</p>
					    		<p class="arial margin-bottom-10">
					    			<span class="cat">IBUS </span>
					    			<?php 
					    				// Output beer post IBU
					    				echo get_post_meta($post->ID, '_beer_ibu_id', true); 
					    			?>
					    		</p>
				    		</div>
			    		</a>
	    			</li>
				<?php }
				else { ?>
					<li class="col-md-3">
						<h3>
							<?php
								// If there is another custom tax added to this theme output just title and content
								the_title(); 
							?>
						</h3>
						<p><?php the_content(); ?></p>
					</li>
				<?php }

				// End loop
	    		endwhile;

				// Reset Post Data
				wp_reset_postdata(); 
			?>
			<div class="clearfix"></div>
	</ul>
	
	<div class="clearfix"></div>

<?php 
	// Get the footer
	get_footer(); 
?>