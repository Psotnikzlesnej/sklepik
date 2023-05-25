<link rel="stylesheet" href="styles/home.css">
<?php
  require __DIR__ . '/../templates/header.php';
?>
<main>
  <?php 
    require __DIR__ . '/../controllers/gallery.controller.php';
    require __DIR__ . '/../views/featured.view.php';
  ?>
</main>
<?php
  require __DIR__ . '/../views/about_us.view.php';
  require __DIR__ . '/../templates/footer.php';
?>