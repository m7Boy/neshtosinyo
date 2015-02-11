<!DOCTYPE html>
<html>
<head>
	<title><?php echo bloginfo('name'); ?></title>

	<?php wp_head(); ?>
</head>

<body <?php body_class();?>>
	<div class="container">
		<header class="header">
			<div class="text_head">
				<h1>Test</h1>
			</div>
			
			<nav class="nav">
				<?php 
					wp_nav_menu(array(
						'theme_location' => 'main-menu',
						'fallback_cb' => false,
					)); 
				?>				
				<div class="left-border"></div>
			
				<div class="right-border"></div>
			</nav>
		</header >
	
