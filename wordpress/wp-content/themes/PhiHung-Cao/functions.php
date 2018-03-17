<?php


function theme_init(){
    register_nav_menus( array(
        'header_menu' => 'Header menu',
        'footer_menu' => 'My Custom Footer Menu',
    ) );

}
add_action('init', 'theme_init');


function print_script(){
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/slideshow.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'print_script')
?>