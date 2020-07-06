<?php 
	/*
	Template Name: Events Homepage
	Template Post Type: post, page, event
	*/
    get_header();
    echo '<main class="salt-maincontent">';
    ?>
    <div class="salt-infoblock">
		<h2>FOR A SOCIALIST ALTERNATIVE TO AUSTERITY, CLIMATE CHANGE AND ALL OPPRESSION</h2>
		As part of an international with presence in over 30 countries on all continents, we fight to advance a working class alternative across national borders, for a socialist world.
		</div>
		<div class="salt-homeblock salt-upcomingevents">
		<h2>UPCOMING EVENTS</h2>
		<ul>
			<?php
				$posts = get_posts(array('numberposts' => 3, 'category_name' => get_theme_mod('category_name',"events")));    
				foreach ($posts as $post) {
					setup_postdata($post); 
					the_post();
					get_template_part("content", "event");
				}
			?>
		</ul>
		<a class="salt-moreevents" href="nowhere.html">Find events in my area</a>

		</div>
		<div class="salt-homeblock salt-international">
			<h2>INTERNATIONAL</h2>
		</div>
    <?php
    echo '</main>';
    get_sidebar();
    get_footer();
?>
