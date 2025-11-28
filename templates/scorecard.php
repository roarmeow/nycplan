<?php
$intro      = get_field('intro') ?? '';
$candidates = get_field('candidates') ?? null;
$sortby     = $_GET['sortby'] ?? null;

if ( isset($sortby) ) {
    // echo '<pre>';
    // var_dump($candidates);
    // echo '</pre>';
    switch ($sortby) {
        case 'stance-pos':
            var_dump(nycp_sort_by($candidates[0], $candidates[1], 'stance'));
            break;
        case 'stance-neg':
            break;
        case 'name-asc':
            break;
        case 'name-desc':
            break;
    }
}

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
            <section class="filters">
                <div>Sort by:
                    <select name="sortby" data-behavior="sortby">
                        <option value="stance-pos">Stance (Positive)</option>
                        <option value="stance-neg">Stance (Negative)</option>
                        <option value="name-asc">Last Name A-Z</option>
                        <option value="name-desc">Last Name Z-A</option>
                    </select>
                </div>
            </section>

            <section class="scorecard-list">
                <?php
                foreach($candidates as $candidate) {
                    $card_args = array(
                        'name' => $candidate['name'],
                        'photo' => $candidate['photo'],
                        'stance_value' => $candidate['stance']['value'],
                        'stance_label' => $candidate['stance']['label'],
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