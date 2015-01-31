<?php  

	if (!is_single() && !get_option('page_for_posts')) {
		return;
	}
?>

<p class="meta">
	<?php the_date('F j, Y', 'Posted in: ', ','); _e('Posted by: '); echo get_the_author(); _e(' Categories: '); the_category(' | '); ?>
</p>