<?php get_header();

if ( have_posts() ) { ?>
 	<div id="contact_form">
		<?php while ( have_posts() ) { ?>
			<li>
				<?php the_post(); ?>
				<?php the_content();?>
			</li>
		<?php } ?>
	</div>
<?php } ?>
<div class="clearfix"></div>

<?php get_footer(); ?>