<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/sidebar.css">
    <script src="../js/sidebar.js"></script>
</head>
<body>

    <div class="sidebar__superglue">

            <div class="sidebar__akordeon">

                <?php
                include '../components/accordion.component.php'
                ?>

            </div>

            <div class="sidebar__filtry">

                <?php
                include '../components/applied_filters.component.php'
                ?>

            </div>

            <div class="sidebar__producent">
                
                <?php
                include '../components/manufacturer_checkbox.component.php';
                ?>

            </div>

            <div class="sidebar__colorpicker">
                <?php
                include '../components/color_selector.component.php'
                ?>
            </div>

            

            <div class="sidebar_pricerange">

            <?php
            include '../components/price_range.component.php'
            ?>

            </div>

    </div>
</body>
</html>