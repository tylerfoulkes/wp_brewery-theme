<?php get_header();?>

<ul id="category">
	<?php
		if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			if (has_tag('beer')) { ?>
				<li class="brews">
					<?php the_content();?>
					<div class="clearfix"></div>
				</li>
			<?php }
			else if (has_tag('about')) {?> 
				<li class="about">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
					<div class="clearfix"></div>
				</li>
			<?php }	else { ?>
				<li class="post">
					<?php the_title();
					the_content(); ?>
					<div class="clearfix"></div>
				</li>
			<?php }
		}
	} ?>
</ul>

<div class="clearfix"></div>

<?php get_footer(); ?>