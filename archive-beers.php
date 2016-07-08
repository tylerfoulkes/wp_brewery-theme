<?php get_header();?>

	<ul id="category">
		<?php $args = array( 'post_type' => 'beers', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
	  		<li class="brews">
	  			<?php 
	  			the_title();
	  			the_content(); ?>
	  			<div class="clearfix"></div>
	  		</li>
		<?php endwhile; ?>
	</ul>

	<div class="clearfix"></div>

<?php get_footer(); ?>