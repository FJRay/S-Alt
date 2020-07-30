<a class="salt-articlepreview" href="<?php the_permalink(); ?>">
    <h3><?php the_title(); ?></h3>
    <?php
        if (has_post_thumbnail()) {
            echo get_the_post_thumbnail();
        } else {
            echo "<img src='".get_bloginfo('template_directory')."/resources/megaphone.png' class='default-image'> ";
        }
    ?>
    <p><?php the_excerpt(); ?></p>
    <span class="salt-readmore">Read more</span>
</a>