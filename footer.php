		<script src="<?php bloginfo('template_directory'); ?>/js/menu.js"></script>
		<?php wp_footer(); ?>
		<footer>
			<div class="foot_list">
				<?php if ( is_active_sidebar( 'footer_left' ) ) : ?>
					<div id="footer_left" class="footer_left widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer_left' ); ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="foot_list">
				<div class="simple-social-icons">
					<?php if ( is_active_sidebar( 'footer_middle' ) ) : ?>
						<div id="footer_middle" class="footer_middle widget-area" role="complementary">
							<?php dynamic_sidebar( 'footer_middle' ); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="foot_list">
				<?php if ( is_active_sidebar( 'footer_right' ) ) : ?>
					<div id="footer_middle" class="footer_middle widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer_right' ); ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="clearfix"></div>
		</footer>
	</body>
</html>