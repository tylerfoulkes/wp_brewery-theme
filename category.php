<?php get_header();?>

	<ul id="category">
		<?php if ( have_posts() ) {
			while ( have_posts() ) { ?>
				<?php the_post(); ?>
				<?php if (has_tag('beer')) {?>
					<li class="brews">
						<?php the_content();?>
					</li>
				<?php }
				else if (has_tag('about')) {?> 
					<li class="about">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); 
						?>
					</li>
				<?php }	else { ?>
					<li class="post">
						<?php the_title();
						the_content();
						?>
					</li>
				<?php }
			}
		}
		?>
	</ul>
	<div id="labels">
		<?php posts_nav_link('  ','prelabel','nextlabel'); ?>
	</div>

<?php get_footer(); ?>