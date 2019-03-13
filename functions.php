<?php

function varguilla_files(){
    wp_enqueue_script('JQuery', '//code.jquery.com/jquery-3.3.1.slim.min.js',NULL, microtime(), true);
    wp_enqueue_script('Popper.js','//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',NULL, microtime(), true);
    wp_enqueue_script('Bootstrap.js', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',NULL, microtime(), true);
    wp_enqueue_style('Bootstrap.css', get_stylesheer_uri('/css/bootstrap.min.css'), NULL, microtime(), true);
    wp_enqueue_style('varguillas_personal_style', get_stylesheer_uri(''), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'varguilla_files');

function varguilla_features(){
	register_nav_menu('headerMenuLocation','Header Menu Location');
	register_nav_menu('footerLocation1','Footer Location One');
	register_nav_menu('footerLocation2','Footer Location Two');
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'varguilla_features');
?>