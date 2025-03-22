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
        }
        get_template_part('partials/footer');
        ?>
    </body>
</html>