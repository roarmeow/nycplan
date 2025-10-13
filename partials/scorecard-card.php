<?php
assert(isset($args));
$name = $args['name'] ?? null;
$photo = $args['photo'] ?? null;
$stance_value = $args['stance_value'] ?? 'none';
$stance_label = $args['stance_label'] ?? 'Waiting for response';
$notes = $args['notes'] ?? null;
?>
<div class="scorecard-card">
    <h3><?php echo $name; ?></h3>
    <img src="<?php echo $photo['sizes']['thumbnail']; ?>" width="150" height="150" alt="<?php echo $photo['alt']; ?>" />
    <p class="stance <?php echo $stance_value ?>"><?php echo $stance_label; ?></p>
    <div class="notes">
        <?php echo $notes; ?></div>
    </div>
</div>