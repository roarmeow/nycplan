<?php
function nycp_enqueue() {
    wp_enqueue_script('nycp_js', get_template_directory_uri() . '/frontend/scripts/app.js', array('jquery'), '1.2.1');
    wp_register_style('nycp_css', get_template_directory_uri() . '/dist/css/style.css', false, '1.2.1');
    wp_enqueue_style('nycp_css');
}
add_action( 'wp_enqueue_scripts', 'nycp_enqueue' );
