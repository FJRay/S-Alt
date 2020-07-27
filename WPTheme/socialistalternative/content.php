<article class="salt-defaultarticle">
    <div class="salt-articleheader">    
        <?php
            if (has_post_thumbnail()) {
                echo get_the_post_thumbnail();
            } else {
                echo "<img src='".get_bloginfo('template_directory')."/resources/megaphone.png' class='default-image'> ";
            }
        ?>
        <div class='salt-colorblock'>
        <h1>
            <?php the_title() ?>
        </h1>
        </div>
    </div>
    <div class="salt-articlemain">
        <div class="salt-articleinfo">
            <div class="salt-articledetails">
                <span class="salt-articledate"><?php the_date() ?></span>
                <span class="salt-articlecategory"><?php the_tags(""); ?></span>
            </div>
            <div class="salt-author">
                <?php the_author() ?>
            </div>
        </div>
        <div class="salt-articlebody">
            <?php the_content() ?>
        </div>
    </div>
</article>