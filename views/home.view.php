<link rel="stylesheet" href="<?= CSS_ROOT?>/home.css">
<?php
  require TEMPLATE_ROOT .'/header.php';
?>
<main>
  <?php 
    require CONTROLLER_ROOT .'/gallery.controller.php';
    require CONTROLLER_ROOT .'/featured.controller.php';
  ?>
</main>
<?php
  require CONTROLLER_ROOT .'/about_us.controller.php';
  require TEMPLATE_ROOT .'/footer.php';
?>