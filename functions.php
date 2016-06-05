<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    /*--- Sidebar Widget ---*/
    register_sidebar( array(
        'name' => ('First Widget'),
        'id' => 'first-widget',
        'description' => 'Widget for our sidebar on pages',
        'before_widget' => '<div class="widget-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));

        /*--- First Footer Widget ---*/
    register_sidebar( array(
        'name'        => ('First Footer Widget'),
        'id'          => 'footer-one',
        'description' => 'Left footer in the widget',
        'before_widget' => '<div class="widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
        /*--- Second Footer Widget ---*/
        /*--- Third Footer Widget ---*/

    }

add_action('widgets_init', 'blank_widgets_init');

?>
