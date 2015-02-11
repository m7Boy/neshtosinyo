<?php get_header(); ?>

	<div class="main">
		<div class="content">
			
			<h2 class="title">
				<?php _e('404 Page not found') ?>
			</h2>

			<div class="entry">
				<?php _e('Please, return back to ') ?>

				<a href="<?php echo esc_url(home_url('/')); ?>"><?php _e('home page.') ?></a>
			</div>
		</div>
	</div>

<?php get_footer(); ?>