<article class="salt-defaultpage">
    <div class="salt-pageheader">    
        <?php
            if (has_post_thumbnail()) {
                echo get_the_post_thumbnail();
            } else {
                echo "<img src='".get_bloginfo('template_directory')."/resources/headerimage.jpg'> ";
            }
        ?>
        <h1>
            <?php the_title() ?>
        </h1>
    </div>
    <div class="salt-pagemain">

        <div class="salt-pagebody">
            <?php the_content() ?>
        </div>
    </div>
</article>
