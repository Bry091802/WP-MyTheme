<?php 

function myTheme_support(){
    add_theme_support('menus');


    register_nav_menus(array(
        'header_menu' =>__('Header Menu', 'textdomain')
    ));
}

add_action('after_setup_theme','myTheme_support');