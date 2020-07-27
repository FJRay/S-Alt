<?php 
	/*
	Template Name: Events Homepage
	Template Post Type: post, page, event
	*/
    get_header();
    echo '<main class="salt-maincontent salt-nomargin salt-homepage">';
    
	?>
	<div>
    <div class="salt-infoblock">
		<?php
			if (have_posts()) {
				while (have_posts()) {
					the_post();
					get_template_part("content", "page");
				}
			}
		?>
	</div>
	<div class="salt-homeblock salt-upcomingevents">
	
	</div>
	</div>
    <?php
    echo '</main>';
    get_sidebar();
    get_footer();
?>
