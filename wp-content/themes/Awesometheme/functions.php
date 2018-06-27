<?php

function add_main_css(){
    wp_enqueue_style('mainCss', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'add_main_css');
?>