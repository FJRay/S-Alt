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
		<a class="salt-moreevents" href="http://freds.website/salt/branch-directory/">Find more events local to you on our branches' Facebook pages</a>
	</div>
	
	
    <?php
    echo '</main>';
    get_sidebar();
    get_footer();
?>
