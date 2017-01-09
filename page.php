<?php 
	// Get the header
	get_header(); 
?>
	<div class="row-fluid margin-top-140 margin-bottom-60">
		<?php if ( have_posts() ) { ?>
		 	<div class="col-md-6 offset-md-3">
				<?php the_post(); ?>
				<?php the_content();?>
			</div>
		<?php } ?>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>

<?php 
	// Get the footer
	get_footer(); 
?>