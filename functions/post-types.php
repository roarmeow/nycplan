<?php
function nycp_init_scorecards() {

    $args = array(
        'labels'             => nycp_label_maker('Scorecard', 'Scorecards'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'scorecards' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'scorecard', $args );
}

add_action( 'init', 'nycp_init_scorecards' );

function nycp_init_actions() {

    $args = array(
        'labels'             => nycp_label_maker('Action', 'Actions'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'actions' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'action', $args );
}

add_action( 'init', 'nycp_init_actions' );

function nycp_label_maker( $singular, $plural ) {
    return array(
        'name'               => $plural,
        'singular_name'      => $singular,
        'menu_name'          => $plural,
        'name_admin_bar'     => $singular,
        'add_new'            => 'Add New',
        'add_new_item'       => "Add New $singular",
        'new_item'           => "New $singular",
        'edit_item'          => "Edit $singular",
        'view_item'          => "View $singular",
        'all_items'          => "All $plural",
        'search_items'       => "Search $plural",
        'parent_item_colon'  => "Parent $plural:",
        'not_found'          => "No $plural found.",
        'not_found_in_trash' => "No $plural found in Trash.",
    );
}