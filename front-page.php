<?php get_header(); ?>
 
<div id="banner_cont">
	<?php if ( have_posts() ) { the_post(); ?><div id="call" class="call-to-action"><?php the_content();?></div><?php } ?>
	<img src="<?php header_image(); ?>"/>
</div>

<?php $args = array('post_type' => 'beer');
$loop = new WP_Query( $args ); ?>
 
<ul id="fet_brews" class="row-fluid">
	<?php $i = 0;		 
	while ( $loop->have_posts() && $i < 3) : $loop->the_post(); ?>
		<?php if (has_term( 'featured', 'types' )) {?>
			<li class="col-md-4">
				<a href="<?php the_permalink(); ?>">
					<p class="beer_image col-xs-5"><?php echo wp_get_attachment_image( get_post_meta($post->ID, '_image_id', true), 'medium', false); ?></p>
					<div class="col-xs-7">
						<p class="h5 margin-bottom-10"><?php the_title(); ?></p>
						<p class="arial margin-bottom-10"><?php echo get_post_meta($post->ID, '_beer_desc_id', true); ?></p>
			    		<p class="arial margin-bottom-10"><span class="cat">ABV </span><?php echo get_post_meta($post->ID, '_beer_abv_id', true); ?></p>
			    		<p class="arial margin-bottom-10"><span class="cat">IBUS </span><?php echo get_post_meta($post->ID, '_beer_ibu_id', true); ?></p>
		    		</div>
		    	</a>
		    	<div class="clearfix"></div>
			</li>
		<?php $i++; }
	endwhile; ?>
</ul>
<div class="clearfix"></div>

<?php get_footer(); ?>