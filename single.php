<?php 
	// Get the header
	get_header(); 
?>

<div class="row-fluid margin-top-140 margin-bottom-60">
	<?php
		the_post(); ?>
    	<?php if(get_post_type( $post->ID ) == 'beer') { ?>
    		<div class="beer_image col-md-2 col-xs-6 offset-sm-2">
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
			<div class="col-xs-12 offset-lg-2 col-lg-8 col-xl-6 offset-xl-3">
			<p class="h5 margin-bottom-10"><?php the_title(); ?></p>
				<?php 
					the_content(); 
					get_template_part( 'comments', 'none' ); 
				?>
			</div>
		<?php }
		wp_reset_postdata();	 
	?>
	<div class="clearfix"></div>
</div>

<div class="clearfix"></div>

<?php 
	// Get the footer
	get_footer(); 
?>