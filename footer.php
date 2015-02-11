		<div class="footer">

			<?php if ($socials = get_option('socials_icons')): ?>
				<ul>
					<?php foreach ($socials as $s): ?>
						<?php if ($s['icon'] && $s['link']): ?>
							<li>
								<a href="<?php echo esc_url($s['link']); ?>">
									<?php echo wp_get_attachment_image($s['icon'], 'social_ico_image_size'); ?>
								</a>
							</li>
						<?php endif ?>
					<?php endforeach ?>
				</ul>
			<?php endif ?>

			<?php if($copy = get_option('copyright_text')): ?>
				<div class="copyrights">
					<?php echo $copy; ?>
				</div>
			<?php endif ?>
		</div>
	</div>

	<?php wp_footer(); ?>
</body>
</html>