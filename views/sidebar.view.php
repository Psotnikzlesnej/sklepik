<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/sidebar.css">
    <script src="../js/sidebar.js"></script>
</head>
<body>

    <div class="sidebar__superglue">

            <?php
            include 'components/accordion.component.php'
            ?>

            

                <?php
                include 'components/applied_filters.component.php'
                ?>

         

           
                
                <?php
                include 'components/manufacturer_checkbox.component.php';
                ?>

           

          
                <?php
                include 'components/color_selector.component.php'
                ?>
          

            

         

            <?php
            include 'components/price_range.component.php'
            ?>

           

    </div>
</body>
</html>