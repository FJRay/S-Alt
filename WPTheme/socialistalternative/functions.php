<?php
function salt_setup() {
    add_theme_support("post-thumbnails");
}
function salt_init() {
  register_nav_menu('main-navbar',__( 'Main Menu' ));
}
add_action("init", "salt_init");
add_action("after_setup_theme","salt_setup")
?>
