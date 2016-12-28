<?php get_header(); ?>
 
<div id="banner_cont">
	<?php if ( have_posts() ) {
		while ( have_posts()) {
			the_post();
			the_content();
		}
	} ?>
	<img src="<?php header_image(); ?>"/>
</div>

<?php $args = array('category_name' => 'featured');
$loop = new WP_Query( $args ); ?>
 
<ul id="fet_brews" class="row-fluid">
	<?php $i = 0;		 
	while ( $loop->have_posts() && $i < 3) : $loop->the_post(); ?>
		<?php if (has_category( 'Featured' )) {?>
			<li class="featured col-md-4">
				<?php the_content(); ?>
				<div class="clearfix"></div>
			</li>
		<?php }	else { ?>
			<?php } $i++ ?>
	<?php endwhile; ?>
</ul>
<div class="clearfix"></div>

<?php get_footer(); ?>