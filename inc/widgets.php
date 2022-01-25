<?php
// Adding wigets 
function devo_theme_sidebar() {
    register_sidebar( array(
        'name' => ( 'Sidebar', 'devo' ),
        'id'   => 'sidebar1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name' => ( 'Footer Ba 2', 'devo' ),
        'id'   => 'footer_bar1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name' => ( 'Footer Bar 2', 'devo' ),
        'id'   => 'footer_bar2',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );   