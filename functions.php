<?php

function fictional_unifiles(){
    wp_enqueue_style('fic_uni_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','fictional_unifiles');