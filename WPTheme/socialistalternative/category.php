<?php 
	$pageSize = 6;
    $search = get_query_var("search");
    $tpage = intval(get_query_var("page"));
    if ($tpage < 1) {
		$tpage = 1;
	}
    $failString = "No posts found";
    $category = get_queried_object();
    $queryString = "posts_per_page=".$pageSize."&offset=".($tpage-1)*$pageSize."&cat=".$category->cat_ID;
    if ($search && $search != "") {
		$search = preg_replace("/[^\w ]/", "", $search);
		$queryString = $queryString."&s=".sanitize_title($search);
		$failString .= " for search term '$search'";
	}
    query_posts($queryString);
    get_header("fullwidth");
    echo '<main class="salt-maincontent">';
    echo '<h1 class="salt-cat-title">'.$category->cat_name.'</h1>';
    echo '<ul class="salt-newsblock">';
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part("content", "preview");
        }
    } else {
		echo "<h1 class='salt-error'>".$failString."</h1>";
	}
    echo '</ul>';
    echo '<div class="salt-paging">';
    if ($tpage && $tpage > 1) {
		echo '<a href="?page='.($tpage-1).'" class="salt-prev">◄</a> ';
	}
    echo '<span>Page '.($tpage).' <a href="?page='.($tpage+1).'" class="salt-next">►</a>';
    echo '</div></main>';
    get_sidebar();
    get_footer();
?>
