<?php get_header(); ?>

<?php if (have_posts()): ?>
	<?php while(have_posts()) : the_post(); ?>
		<div class="main">
			<div <?php post_class('content'); ?>>
				
				<h2 class="title">
					<?php the_title(); ?>
				</h2>

				<div class="entry">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif ?>

<?php get_footer(); ?>