<li class="salt-event">
	<a href="<?php the_permalink(); ?>">
		<?php
			if (has_post_thumbnail()) {
				echo get_the_post_thumbnail();
			} else {
				echo "<img src='".get_bloginfo('template_directory')."/resources/headerimage.jpg'> ";
			}
		?>
		<!-- <div class="salt-eventdate"><?php the_date(); ?></div> -->
		<h5><?php the_title(); ?></h5>
		<?php the_content() ?>
	</a>
</li>
