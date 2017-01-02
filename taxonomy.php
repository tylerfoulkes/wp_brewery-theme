<?php get_header();?>
	
	<ul class="row-fluid margin-top-140">
		<?php while(have_posts()) {
			the_post(); ?>
    		<?php if(get_post_type( $post->ID ) == 'beer') { ?>
    			<li class="col-md-3">
    				<a href="<?php the_permalink(); ?>">
						<p class="beer_image col-md-5"><?php echo wp_get_attachment_image( get_post_meta($post->ID, '_image_id', true), 'medium', false); ?></p>
						<div class="col-md-7">
							<p class="h5 margin-bottom-10"><?php the_title(); ?></p>
							<p class="arial margin-bottom-10"><?php echo get_post_meta($post->ID, '_beer_desc_id', true); ?></p>
				    		<p class="arial margin-bottom-10"><span class="cat">ABV </span><?php echo get_post_meta($post->ID, '_beer_abv_id', true); ?></p>
				    		<p class="arial margin-bottom-10"><span class="cat">IBUS </span><?php echo get_post_meta($post->ID, '_beer_ibu_id', true); ?></p>
			    		</div>
		    		</a>
    			</li>
			<?php }
			else { ?>
				<li class="col-md-3">
					<h3><?php the_title(); ?></h3>
					<p><?php the_content(); ?></p>
				</li>
			<?php }
    		}
			// Reset Post Data
			wp_reset_postdata(); ?>
	</ul>
	
	<div class="clearfix"></div>

<?php get_footer(); ?>