<link rel="stylesheet" href="styles/catalog.css">

<?php include TEMPLATE_ROOT .'/header.php'?>
<?php
  include TEMPLATE_ROOT .'/breadcrumbs.php'
?>
<main>
  <?php
    include VIEW_ROOT .'/sidebar.view.php'
  ?>
  <?php 
  include VIEW_ROOT .'/product_display.view.php'?>
</main>
<?php include TEMPLATE_ROOT .'/footer.php'?>