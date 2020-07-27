<?php 
	/*
	Template Name: Events Homepage
	Template Post Type: post, page, event
	*/
    get_header();
    echo '<main class="salt-maincontent salt-nomargin salt-homepage">';
    
    ?>
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
	<div class="salt-homeblock salt-international">
		<h2>INTERNATIONAL</h2>
		<p>We are proud to be part of a vibrant international organisation of dedicated socialist fighters, which has sections in 30 countries across the globe:<a href="http://internationalsocialist.net/" target="_blank" rel="noopener noreferrer" data-content="http://internationalsocialist.net" data-type="external">&nbsp;International Socialist Alternative</a>.&nbsp;</p>
		<p><a href="https://internationalsocialist.net/"><img class="alignnone size-medium wp-image-262" src="http://freds.website/salt/wp-content/uploads/2020/06/isa-logo-300x123.png" alt="" width="300" height="123"></a></p>
	</div>
    <?php
    echo '</main>';
    get_sidebar();
    get_footer();
?>
