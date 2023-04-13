<?php

// include_once 'Widgets/CustomWidget.php';

/**
 * sets up theme defaults and registers support for various WordPress Features
 */
function classtheme_setup()
{
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    register_nav_menus(
        [
            'primary' => 'Primary menu',
            'footer' => 'Footer',
        ]
    );

    add_theme_support('wp-block-styles');

    add_theme_support('align-wide');
}
add_action('after_setup_theme', 'classtheme_setup');


/**
 * filter hook for post_class
 *
 * @param array $classes
 * @param string $class
 * @param int $postID
 *
 * @return array
 */
function classtheme_post_class($classes, $class, $postID)
{
    $classes[] = 'mb-5 py-4 border-bottom border-primary';
    return $classes;
}
add_filter('post_class', 'classtheme_post_class', 10, 3);

/**
 * action hook to enqueue css and js files
 *
 * @return void
 */
function classtheme_enqueue_scripts()
{
    //enqueue bootstrap css
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
}
add_action('wp_enqueue_scripts', 'classtheme_enqueue_scripts');

/**
 * customize <li> attributes
 * @param array @classes
 * @param WP_POST $item
 * @param stdClass $args
 *
 * @return array
 */
function classtheme_menu_css_classes($classes, $item, $args)
{
    if ($args->theme_location == 'primary') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'classtheme_menu_css_classes', 10, 3);

/**
 * customize <a> tag attributes
 * @param array
 * @param WP_Post
 * @param stdClass
 */
function classtheme_nav_menu_link_attributes($atts, $item, $args)
{
    $class = 'nav-link';

    if ($item->current) {
        $class .= ' active';
    }

    $atts['class'] = $class;
    return $atts;
}
add_filter('nav_menu_link_attributes', 'classtheme_nav_menu_link_attributes', 10, 3);

// /**
//  * register our custom post type
//  *
//  * @return void
//  */
// function classtheme_custom_post_type()
// {
//     register_post_type(
//         'employee',
//         [
//             'labels' => [
//                 'name' => 'Employees',
//                 'singular_name' => 'Employee'
//             ],
//             'public' => true,
//             'has_archive' => true,
//             'show_in_rest' => true,
//             'supports' => [
//                 'title', 'editor', 'thumbnail', 'custom-fields',
//             ]
//         ]
//     );
// }
// add_action('init', 'classtheme_custom_post_type');

// /**
//  * Register our sidebars and widgetized areas.
//  *
//  */
// function classtheme_widgets_init()
// {
//     //register page sidebar
//     register_sidebar([
//         'name' => 'Page sidebar',
//         'id' => 'page_sidebar',
//         'before_widget' => '<div>',
//         'after_widget'  => '</div>',
//         'before_title'  => '<h2>',
//         'after_title'   => '</h2>',
//     ]);

//     register_widget('Custom_Widget');
// }
// add_action('widgets_init', 'classtheme_widgets_init');


function classthem_modify_employee_supports($supports)
{
    $supports[] = 'test';
    return $supports;
}
add_filter('classthem_modify_employee_supports', 'test', 10, 1);
