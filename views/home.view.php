<link rel="stylesheet" href="styles/home.css">
<?php
  require __DIR__ . '/../templates/header.php';
?>
<main>
  <?php 
    require __DIR__ . '/../controllers/gallery.controller.php';
    require __DIR__ . '/../controllers/featured.controller.php';
  ?>
</main>
<?php
  require __DIR__ . '/../controllers/about_us.controller.php';
  require __DIR__ . '/../templates/footer.php';
?>