<?php
if ($post->post_type === 'action') {
    $link = !empty(get_field('link')) ? get_field('link') : get_permalink();
    $date = !empty(get_field('date')) ? get_field('date') : get_the_date();
    $external = (get_field('link')) ? true : false;
} else {
    $link = get_permalink();
    $date = get_the_date();
    $external = false;
}
?>
<article class="card">
    <a href="<?php echo $link; ?>" <?php echo ($external) ? 'target="_blank"' : ''  ?>>
        <h2>
                <?php the_title(); ?>
        </h2>
        <time><?php echo $date; ?></time>
        <p><?php the_excerpt(); ?></p>
        <?php
        if ($external) :
        ?>
            <p class="screen-reader-text">Link opens in new tab</p>
        <?php
        endif;
        ?>
    </a>
</article>
