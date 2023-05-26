<link rel="stylesheet" href="<?= CSS_ROOT?>/gallery.css">
<div class="gallery">
  <?php
    require COMPONENT_ROOT . '/home_carousel.component.php';
  ?>
  <div class="tile-container">
    <?php
      foreach($home_tiles as $tile){
        require COMPONENT_ROOT . '/tile.component.php';
      }
    ?>
  </div>
</div>