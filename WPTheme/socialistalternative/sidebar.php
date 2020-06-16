<div class="salt-sidebar">
    <?php 
        $sidebar_loop = new WP_Query(array(
            "category_name" => "Uncategorized",
            "posts_per_page" => 3
        ));
        if ($sidebar_loop->have_posts()) {
            while ($sidebar_loop->have_posts()) {
                $sidebar_loop->the_post();
                get_template_part("content", "sidebar");
            }
        }
    ?>
</div>