<?php

?>
<article class="card">
    <h2>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>
    <time><?php the_date(); ?></time>
    <p><?php the_excerpt(); ?></p>
</article>
