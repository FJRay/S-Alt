<div class="salt-sidebar">

    <div class="sidebar-content">
        <h2>GET INVOLVED!</h2>
        <div class="salt-wpform">
            <?php echo do_shortcode( '[wpforms id="184"]') ?>
        </div>
       
    <div class="salt-upcomingevents">
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
		<a class="salt-moreevents" href="https://www.socialistalternative.net/branch-directory/"><p>Find more events local to you on our branches' Facebook pages</p></a>
	</div>
   
    </div>

   
    <!-- <div class='sidebar-buttons'>
        <button class="salt-articlepreview-prev salt-button-link">
            <i class="fas fa-chevron-left prev"></i>
        </button>
        <button class="salt-articlepreview-next salt-button-link">
            <i class="fas fa-chevron-right next"></i>
    </button>

    </div> -->


</div>