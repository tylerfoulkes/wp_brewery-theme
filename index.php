<?php get_header(); ?>

	<ul class="margin-top-140 col-md-8">
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
	</ul>

	<div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>

	<div id="labels">
		<?php posts_nav_link(' ','prelabel','nextlabel'); ?>
	</div>

<?php get_footer(); ?>