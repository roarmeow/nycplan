<?php
$brand_title     = nycp_image_w_class('nycplan-logo.svg');
$brand_title_srt = '<span class="screen-reader-text">' . get_bloginfo('name') . '</span>';
$bluesky_logo    = nycp_image_w_class('bluesky-logo.svg');
$instagram_logo  = nycp_image_w_class('instagram-glyph.svg');
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
    <ul class="social-links">
        <li>
            <a href="https://bsky.app/profile/nycplan.org" title="Follow us on Bluesky" target="_blank">
                <?php
                echo $bluesky_logo;
                ?>
                <span class="screen-reader-text">Follow us on Bluesky &mdash; opens in a new window</span>
            </a>
        </li>
        <li>
            <a href="https://www.instagram.com/nyc.plan" title="Follow us on Instagram" target="_blank">
                <?php
                echo $instagram_logo;
                ?>
                <span class="screen-reader-text">Follow us on Instagram &mdash; opens in a new window</span>
            </a>
        </li>
    </ul>
</header>