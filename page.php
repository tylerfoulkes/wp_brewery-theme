<?php get_header(); ?>
<div class="row-fluid margin-top-140">
	<?php if ( have_posts() ) { ?>
	 	<div class="col-md-6 offset-md-3">
			<?php the_post(); ?>
			<?php the_content();?>
		</div>
	<?php } ?>
</div>
<div class="clearfix"></div>

<?php get_footer(); ?>