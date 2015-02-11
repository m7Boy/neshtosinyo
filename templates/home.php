<?php
	/*
		Template Name: Home
	*/ 

	get_header(); 
?>
<?php if (have_posts()): ?>
	<?php while(have_posts()) : the_post(); ?>
		<div class="main">		
			<ul class="slideshow">
				<li class="slide">
					<a href="#">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/big-photo.png"/>
					</a>
				</li>

				<li class="slide">
					<a href="#">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/big-photo.png"/>
					</a>
				</li>
				
				<li class="slide">
					<a href="#">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/big-photo.png"/>
					</a>
				</li>
			</ul>
		</div>
	<?php endwhile ?>
<?php endif ?>

<?php get_footer(); ?>