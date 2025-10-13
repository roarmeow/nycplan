<?php
assert(isset($args));
$name = $args['name'] ?? null;
$photo = $args['photo'] ?? null;
$stance = $args['stance'] ?? null;
$notes = $args['notes'] ?? null;
?>
<div class="scorecard-card">
    <h3><?php echo $name; ?></h3>
    <img src="<?php echo $photo['sizes']['thumbnail']; ?>" width="150" height="150" alt="<?php echo $photo['alt']; ?>" />
    <p class="status"><?php echo $stance; ?></p>
    <div class="notes">
        <?php echo $notes; ?></div>
    </div>
</div>