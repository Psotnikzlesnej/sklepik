<link rel="stylesheet" href="<?= CSS_ROOT?>/home.css">
<?php
  require __DIR__ . TEMPLATE_ROOT .'/header.php';
?>
<main>
  <?php 
    require __DIR__ . CONTROLLER_ROOT .'/gallery.controller.php';
    require __DIR__ . CONTROLLER_ROOT .'/featured.controller.php';
  ?>
</main>
<?php
  require __DIR__ . CONTROLLER_ROOT .'/about_us.controller.php';
  require __DIR__ . TEMPLATE_ROOT .'/footer.php';
?>