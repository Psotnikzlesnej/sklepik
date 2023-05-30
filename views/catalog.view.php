<link rel="stylesheet" href="<?= CSS_ROOT ?>/catalog.css">

<?php include TEMPLATE_ROOT .'/header.php'?>
<?php
  // include TEMPLATE_ROOT .'/breadcrumbs.php'
?>
<main>
  <?php include CONTROLLER_ROOT .'/sidebar.controller.php';
  ?>
  <div class="left-wrapper">
    <?php
      include CONTROLLER_ROOT .'/category_description.controller.php';
      include CONTROLLER_ROOT .'/category_selector.controller.php';
      include CONTROLLER_ROOT .'/banner.controller.php';
      include CONTROLLER_ROOT .'/product_display.controller.php';
    ?>
  </div>
</main>
<?php include TEMPLATE_ROOT .'/footer.php'?>