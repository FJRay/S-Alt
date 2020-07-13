<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.8"/>
        <title>Socialist Alternative</title>
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/main.css">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,800,900&display=swap" rel="stylesheet">
        <script defer src="<?php echo get_bloginfo('template_directory'); ?>/resources/fontawesome/js/all.js"></script>
        <?php wp_head(); ?>
    </head>
    <body class="salt-altcolors salt-fullwidth">
        <header class="salt-mainheader">
            <h1>
                <a href="<?php echo get_bloginfo("wpurl"); ?>">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/resources/SA-logo-full-yellow.svg" alt="Socialist Alternative">
                </a>    
            </h1>

            <form class="salt-mainsearch searchbar" action="<?php echo get_bloginfo("wpurl"); ?>" method="GET">
				<input name="search" placeholder="Search...">
			</form>
        </header>
        <div class="salt-mainmenu">
            <input class="menu-btn" type="checkbox" id="menu-btn" /> 
            <label class="menu-icon" for="menu-btn">
                <i class="fas fa-bars"></i>
            </label>
            <nav class='menu'>
                <label for="menu-btn" class='menu-close-btn'> 
                    <i class="fas fa-times"></i>
                </label>
                <?php wp_nav_menu(array('theme_location' => 'main-navbar')); ?>
                <form class="salt-navsearch searchbar" action="<?php echo get_bloginfo("wpurl"); ?>" method="GET">
				<input name="search" placeholder="Search...">
			</form>
            </nav>
        </div>
        <div class="salt-bodycontainer">
