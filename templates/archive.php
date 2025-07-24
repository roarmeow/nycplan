<?php
$wp_query->query('showposts=-1');
?>
<main>
    <section>
        <h1>News &amp; Updates</h1>
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
            ?>
            <h2>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <time><?php the_date(); ?></time>
            <p><?php the_excerpt(); ?></p>
            <?php
            endwhile;
        endif;
        the_posts_pagination();
        ?>
    </section>
</main>