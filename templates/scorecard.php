<?php
$intro = get_field('intro') ?? '';
$candidates = get_field('candidates') ?? null;
?>
<main>
    <article class="body-content">
        <h1>
            <?php
            the_title();
            ?>
        </h1>
        <?php
        echo $intro;

        if ($candidates) {
            ?>
            <section class="scorecard-list">
                <?php
                foreach($candidates as $candidate) {
                    $card_args = array(
                        'name' => $candidate['name'],
                        'photo' => $candidate['photo'],
                        'stance' => $candidate['stance'],
                        'notes' => $candidate['notes']
                    );
                    get_template_part('partials/scorecard-card', 'scorecard-card', $card_args);
                }
                ?>
            </section>
            <?php
        }

        the_content();
        ?>
    </article>
</main>