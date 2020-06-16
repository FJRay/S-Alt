<?php 
    get_header();
    echo '<main class="salt-maincontent">';
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
