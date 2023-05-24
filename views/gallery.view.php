<?php
  require __DIR__ . '/../components/home_carousel.component.php';
  foreach($home_tiles as $tile){
    require __DIR__ . '/../components/tile.component.php';
  }
?>