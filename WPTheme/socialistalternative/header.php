<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.8"/>
        <title>Socialist Alternative</title>
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/main.css">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,800,900&display=swap" rel="stylesheet">
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="salt-mainheader">
            <h1>
                <a href="<?php echo get_bloginfo("wpurl"); ?>">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/resources/mainlogo.png" alt="Socialist Alternative">
                </a>
                <form class="salt-mainsearch" action="<?php echo get_bloginfo("wpurl"); ?>" method="GET">
					<input name="search" placeholder="Search...">
				</form>
            </h1>
            <nav>
                <?php wp_nav_menu(array('theme_location' => 'main-navbar')); ?>
            </nav>
        </header>
        <div class="salt-bodycontainer">
