<link rel="stylesheet" href="<?= CSS_ROOT?>/gallery.css">
<div class="gallery">
  <?php
    require __DIR__ . '/../components/home_carousel.component.php';
  ?>
  <div class="tile-container">
    <?php
      foreach($home_tiles as $tile){
        require __DIR__ . '/../components/tile.component.php';
      }
    ?>
  </div>
</div>