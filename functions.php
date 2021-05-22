<?php

function fictional_unifiles(){
    wp_enqueue_script('main-javascript-uni',get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('Fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('fic_uni_main_styles', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts','fictional_unifiles');


function ficuni_after_suptheme_info(){
    //register_nav_menu('FanUniMenuMain','Header Menu Location');
    //register_nav_menu('FooterNavMenu','Footer Nav Menu One');
    //register_nav_menu('FooterNavMenuTwo','Footer Nav Menu Two');
    add_theme_support('title-tag');
}

add_action('after_setup_theme','ficuni_after_suptheme_info');

/* Event Post Type */

function funiversity_eventposttype(){

    register_post_type('event', array(
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar-alt'
    ));

}
add_action('init', 'funiversity_eventposttype');