<div class="salt-sidebar">
    <h2>NEWS</h2>
    <div class="sidebar-content">
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
    <div class='sidebar-buttons'>
        <i class="fas fa-chevron-left prev" onclick="plusSlides(-1)"></i>
        <i class="fas fa-chevron-right next" onclick="plusSlides(1) "></i>

    </div>


</div>