<?php get_header(); ?>

	<ul class="margin-top-140">
		<div class="col-md-12"><?php get_sidebar(); ?></div>
		<?php if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				if(get_post_type( $post->ID ) == 'beer') { ?>
					<li class="col-md-3">
						<a href="<?php the_permalink(); ?>" class="h5 margin-bottom-10"><?php the_title(); ?></a>
					</li>
				<?php }
				else { ?>
					<a href="<?php the_permalink(); ?>" class="h5 margin-bottom-10"><?php the_title(); ?></a>
				<?php }
			} 
		} ?>
	</ul>

	<div id="labels">
		<?php posts_nav_link('  ','prelabel','nextlabel'); ?>
	</div>

<?php get_footer(); ?>