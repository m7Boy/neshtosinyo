<?php get_header(); ?>

<?php if (have_posts()): ?>
	<?php while(have_posts()) : the_post(); ?>
		<h3><?php the_title(); ?></h3>
	<?php endwhile ?>
<?php endif ?>