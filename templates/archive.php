<?php
$post_type = get_post_type();
if ($post_type === 'post') {
    $title = 'News &amp; Updates';
} elseif ($post_type === 'action') {
    $title = 'Take Action!';
}
$wp_query->set('posts_per_page', 3);
?>
<main>
    <section>
        <h1><?php echo $title; ?></h1>
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