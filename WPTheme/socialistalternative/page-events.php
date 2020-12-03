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

	<div class="salt-homeblock">
	<h2>LATEST NEWS</h2>
	<?php 
        $sidebar_loop = new WP_Query(array(
            "cat" => -get_cat_ID(get_theme_mod('category_name',"events")),
            "posts_per_page" => 4
        ));
        if ($sidebar_loop->have_posts()) {
            while ($sidebar_loop->have_posts()) {
                $sidebar_loop->the_post();
                get_template_part("content", "sidebar");
            }
        }
    ?>
	</div>
	
    <?php
    echo '</main>';
    get_sidebar();
    get_footer();
?>
