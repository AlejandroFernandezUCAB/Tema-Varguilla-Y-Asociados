<?php

function varguilla_files(){
    wp_enqueue_script('JQuery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js',NULL, microtime(), true);
    wp_enqueue_script('Popper.js','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',NULL, microtime(), true);
    wp_enqueue_script('Bootstrap.js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',NULL, microtime(), true);
    wp_enqueue_style('Bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('varguillas_personal_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'varguilla_files');

function varguilla_features(){
	register_nav_menu('headerMenuLocation','Header Menu Location');
	register_nav_menu('footerLocation1','Footer Location One');
	register_nav_menu('footerLocation2','Footer Location Two');
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'varguilla_features');


/**
 * Generate breadcrumbs
 */
function get_breadcrumb() {
    if (!is_home()) {
        echo '<ol class="breadcrumb">';
        echo '<li class="breadcrumb-item"><a href="';
        echo get_option('home');
        echo '">';
        echo 'Inicio';
        echo "</a></li>";
        if (is_category() || is_single()) {
            echo '<li class="breadcrumb-item">';
            the_category(' </li><li class="breadcrumb-item"> ');
            if (is_single()) {
                echo "</li><li class='breadcrumb-item active'>";
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            echo '<li class="breadcrumb-item">';
            echo the_title();
            echo '</li>';
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li class='breadcrumb-item'>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li class='breadcrumb-item'>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li class='breadcrumb-item'>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li class='breadcrumb-item'>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li class='breadcrumb-item'>Search Results"; echo'</li>';}
    echo '</ol>';
}
?>