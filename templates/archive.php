<?php
$wp_query->query('showposts=-1');
?>
<main>
    <section>
        <h1>News &amp; Updates</h1>
        <?php
        if (have_posts()) :
        ?>
            <div class="article-list">
                <?php
                while (have_posts()) : the_post();
                    get_template_part('partials/article-card', '', $post);
                endwhile;
                ?>
            </div>
        <?php
        else :
        ?>
            <p>These aren&rsquo;t the droids you&rsquo;re looking for.</p>
        <?php
        endif;
        the_posts_pagination();
        ?>
    </section>
</main>