<?php

?>

<section class="card player-dashboard">
  <div class="card-header">
    Profile #<?= $player->ID; ?>
  </div>
  <div class="card-body">
      
    <h5 class="card-title"><?= $player->username; ?></h5>

    <?php foreach ( $player->teams() as $team ): ?>

    <?php endforeach; ?>

    <a href="#" class="btn btn-primary">Go somewhere</a>

  </div>
</div>