<?php
function nycp_nav_menus() {
    register_nav_menus(array(
        'main' => 'Main Navigation'
    ));
}

add_action('init', 'nycp_nav_menus');
