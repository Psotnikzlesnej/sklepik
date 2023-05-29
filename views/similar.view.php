
<link rel="stylesheet" href="<?= CSS_ROOT?>/similar.css">
    <script src="<?= JS_ROOT?>/counter.js" defer></script>
    <link rel="stylesheet" href="<?= CSS_ROOT?>/counter.css">
</head>
<body>
    <div class="bg" id="other">
        <div class="text">Inne z kategorii</div>
        <div class="rectangle"></div>
        <div class="border"></div>

        <div class="product_tile">
        <?php
        foreach($similar_product as $item): 
           ?>
        <div class="product_tile-hover"><?php include COMPONENT_ROOT .'/item.component.php' ?></div>
            <?php endforeach ?>
        </div>
            <div class="addtocart">
                <?php include COMPONENT_ROOT .'/counter.component.php'; ?>
                    <div class="counter_container">
                        <template id="counter">
                            <button type="button" class="counter__button counter__button-decrease"></button>
                            <input type="number" class="counter__input">
                            <button type="button" class="counter__button counter__button-increase"></button>
                        </template>
                        <custom-counter class="counter" data-value="1" data-max="10" data-min="1"></custom-counter>
                    </div>
                    <div class="buybutton">
                        <i class="buybutton-icon"></i>
                    </div>
                </div>
        </div>
    </div>