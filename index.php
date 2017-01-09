<?php 
	// Get the header
	get_header(); 
?>

	<ul class="margin-top-140 col-md-8 margin-bottom-60">
		<?php 
			if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); ?>
					<li class="post">
						<a href="<?php the_permalink(); ?>" class="h5"><?php the_title(); ?></a>
						<?php the_content();?>
					</li>
			<?php }
		} ?>
		<div class="clearfix"></div>
	</ul>

	<div class="col-md-4 margin-top-140">
		<?php get_sidebar(); ?>
	</div>

	<div id="labels">
		<?php posts_nav_link(' ','prelabel','nextlabel'); ?>
	</div>

<?php 
	// Get the footer
	get_footer(); 
?>