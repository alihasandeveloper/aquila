<?php
/*
 * Theme Functions
 *
 * @package Aquila*/
add_theme_support('title-tag');

function aquila_enqueue_scripts()
{
    $bootstrap_version = 5.3;
    //Enqueue Style
    wp_enqueue_style('style-css', get_stylesheet_uri());
    wp_register_style('bootstrap-css', get_template_directory_uri().'/assets/src/library/bootstrap.min.css', array(), $bootstrap_version, 'all');
    wp_enqueue_style('bootstrap-css');

    //Enqueue Script

    wp_enqueue_script('jquery');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/main.js', array(), 1.0, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/src/library/bootstrap.min.js', array(), $bootstrap_version, true);
}

add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');