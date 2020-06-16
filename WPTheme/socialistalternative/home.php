<?php 
    get_header("fullwidth");
    echo '<main class="salt-maincontent"><ul class="salt-newsblock">';
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part("content", "preview");
        }
    }
    echo '</ul></main>';
    get_sidebar();
    get_footer();
?>
