<?php get_header();

 if ( have_posts() ) {
		while ( have_posts() ) { ?>
		<li class="post">
			<?php the_post(); ?>
			<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
			<?php the_content();?>
			<?php comments_template( '/comments.php' ); ?>
		</li>
		<?php }
		}
	?>
<div class="clearfix"></div>

<?php get_footer(); ?>