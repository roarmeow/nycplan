<header class='site-header'>
    <h1>
        <?php
        echo nycp_image_w_class('nycplan-logo.svg');
        ?>
        <span class='screen-reader-text'>
            <?php
            bloginfo('name');
            ?>
        </span>
    </h1>
    <h2>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'main',
            'container' => 'nav',
        ));
        ?>
    </h2>
</header>