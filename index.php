<?php get_header(); ?>

	<?php if (is_single()): ?>
		<?php get_template_part('single'); ?>
	<?php else: ?>
		<?php //loop code // blog/ date / search and ect. ?>
	<?php endif ?>

<?php get_footer(); ?>