<?php
function salt_setup() {
    add_theme_support("post-thumbnails");
}
add_action("after_setup_theme","salt_setup")
?>