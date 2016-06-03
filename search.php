<?php get_header(); ?>

<ul>
<?php if ( have_posts() ) {
		while ( have_posts() ) { ?>
		<li>
			<?php the_post();
			the_content();?>
		</li>
		<?php } // end while
		} // end if
	?>
</ul>

<?php get_footer(); ?>