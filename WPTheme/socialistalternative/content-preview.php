<li class="salt-newsitem"><a href="<?php the_permalink(); ?>">
    <?php
        if (has_post_thumbnail()) {
            echo get_the_post_thumbnail();
        } else {
            echo "<img src='".get_bloginfo('template_directory')."/resources/megaphone.png'> ";
        }
    ?>
    <h3><?php the_title(); ?></h3>
    <div class="salt-articledetails">
        <span class="salt-articledate"><?php the_date(); ?></span>
        <span class="salt-articlecategory"><?php the_tags(""); ?></span>
    </div>
    <div class="salt-author">
        <?php the_author(); ?>
    </div>
</a></li>