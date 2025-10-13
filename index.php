<?php
/**
  * 
  * @package nycplan
  *
  **/
?>

<!DOCTYPE html >

<html>
    <?php
    get_header();
    ?>
    <body <?php body_class(); ?>>
        <?php
        get_template_part('partials/header');
        if (is_page()) {
            get_template_part('templates/page');
        } elseif (get_post_type() === 'scorecard') {
            get_template_part('templates/scorecard');
        } elseif (is_home() || is_archive() || is_page('archives')) {
            get_template_part('templates/archive');
        } elseif (is_single()) {
            get_template_part('templates/single');
        }
        get_template_part('partials/footer');
        ?>
    </body>
</html>