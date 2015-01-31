<?php get_header(); ?>

<?php if (have_posts()): ?>
	<?php while(have_posts()) : the_post(); ?>
		<div class="<?php post_class(); ?>">

			<?php get_template_part('fragments/post-meta'); ?>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<?php //comments ?>
			
		</div>
	<?php endwhile; ?>
<?php endif ?>

<?php get_footer(); ?>