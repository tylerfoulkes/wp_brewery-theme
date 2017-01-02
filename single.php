<?php get_header(); ?>

<div class="row-fluid margin-top-140">
	<?php
		the_post(); ?>
    	<?php if(get_post_type( $post->ID ) == 'beer') { ?>
    		<div class="beer_image col-md-2 offset-sm-2">
    			<?php echo wp_get_attachment_image( get_post_meta($post->ID, '_image_id', true), 'medium', false); ?>
    		</div>
    		<div class="col-md-8">
    			<p class="h5 margin-bottom-10"><?php the_title(); ?></p>
				<p class="arial margin-bottom-10"><?php echo get_post_meta($post->ID, '_beer_desc_id', true); ?></p>
			    <p class="arial margin-bottom-10"><span class="cat">ABV </span><?php echo get_post_meta($post->ID, '_beer_abv_id', true); ?></p>
			    <p class="arial margin-bottom-10"><span class="cat">IBUS </span><?php echo get_post_meta($post->ID, '_beer_ibu_id', true); ?></p>
    		</div>
		<?php }
		else { ?>
			<div class="offset-sm-3 col-md-6">
				<p class="h5 margin-bottom-10"><?php the_title(); ?></p>
				<?php the_content(); ?>
			</div>
		<?php }
		wp_reset_postdata();	 
	?>
</div>

<div class="clearfix"></div>

<?php get_footer(); ?>