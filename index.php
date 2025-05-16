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
        } elseif (is_archive()) {
            get_template_part('templates/archive');
        } elseif (is_single()) {
            get_template_part('templates/single');
        }
        get_template_part('partials/footer');
        ?>
    </body>
</html>