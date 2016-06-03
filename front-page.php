<?php get_header(); ?>
 
	<div id="banner_cont">
		<?php if ( have_posts() ) {
				while ( have_posts()) {
					the_post();
					the_content();
					$i++;
				}
			}
		?>
		<img src="<?php header_image(); ?>"/>
	</div>

	<?php $args = array('category_name' => 'featured');
	$loop = new WP_Query( $args ); ?>
	 
	<ul id="fet_brews">
		<?php
			$i = 0;		 
			while ( $loop->have_posts() && $i < 3) : $loop->the_post(); ?>
			<?php if (has_tag('beer')) {?>
						<li class="featured">
							<?php the_content();?>
						</li>
						<?php }	else { ?>
						
					<?php } $i++?>
		<?php endwhile;?>
	</ul>
	<div class="clearfix"></div>

<?php get_footer(); ?>