<?php
$brand_title = nycp_image_w_class('nycplan-logo.svg');
$brand_title_srt = '<span class="screen-reader-text">' . get_bloginfo('name') . '</span>';
?>

<header class='site-header'>
    <button data-trigger='mobile-nav' class='mobile-nav-trigger' aria-expanded='false'>
        <span class='screen-reader-text'>Open Menu</span>
        <span class='middle-bar'></span>
    </button>
    <?php    
    wp_nav_menu(array(
        'theme_location' => 'main',
        'container' => 'nav',
    ));

    if (is_front_page()) :
    ?>
        <h1 class='branding'>
            <?php
            echo $brand_title . $brand_title_srt;
            ?>
        </h1>
    <?php
    else :
    ?>
        <h2 class='branding'>
            <?php
            echo $brand_title . $brand_title_srt;
            ?>
        </h2>
    <?php
    endif;
    ?>
</header>