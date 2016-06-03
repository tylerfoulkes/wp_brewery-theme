<?php get_header(); ?>

	<ul id="blog">
		<?php if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); 
			if(!has_tag('beer') && !has_tag('about')) { ?>
				<li class="post">
					<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
					<?php the_content();?>
					<?php comments_template(); ?>
				</li>
			<?php }
				} // end while
			} // end if
		?>
	</ul>

	<?php get_sidebar(); ?>

	<div id="labels">
		<?php posts_nav_link('separator','prelabel','nextlabel'); ?>
	</div>

<?php get_footer(); ?>