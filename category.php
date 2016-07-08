<?php get_header();?>

<ul id="category">
	<?php
		if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); ?>
				<li class="post">
					<?php the_title();
					the_content(); ?>
					<div class="clearfix"></div>
				</li>
		<?php
		}
	} ?>
</ul>

<div class="clearfix"></div>

<?php get_footer(); ?>