<?php
function salt_setup() {
    add_theme_support("post-thumbnails");
}
function salt_init() {
  register_nav_menu('main-navbar',__( 'Main Menu' ));
}
function salt_customize( $wp_customize ) {
	$wp_customize->add_setting( 'events_category' , array(
		'default'   => 'events'
	));
	$wp_customize->add_section( 'salt_config' , array(
		'title'      => "Theme Configuration",
		'priority'   => 30,
	));
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'events_category', array(
		'label'      => "Events Category Id",
		'section'    => 'salt_config',
		'settings'   => 'events_category',
	)));
}
add_action("customize_register", "salt_customize");
add_action("init", "salt_init");
add_action("after_setup_theme","salt_setup")
?>
