
<?php 
 /*
	Template Name: Homepage
	Template Post Type: post, page, event
*/   
    get_header();
    echo '<main class="salt-maincontent salt-nomargin salt-homepage">';
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part("content", "page");
        }
    }
    echo '</main>';
    get_sidebar();
    get_footer();
?>
