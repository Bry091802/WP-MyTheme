<?php

function myTheme_assets(){
    wp_enqueue_style('mytheme', get_template_directory_uri() . '/css/style.css', microtime());
}

add_action('wp_enqueue_scripts', 'myTheme_assets');