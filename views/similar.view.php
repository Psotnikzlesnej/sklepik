
<link rel="stylesheet" href="styles/similar.css">
    <script src="js/counter.js" defer></script>
    <link rel="stylesheet" href="styles/counter.css">
</head>
<body>
    <div class="bg">
        <div class="text">Inne z kategorii</div>
        <div class="rectangle"></div>
        <div class="border"></div>

        <div class="product_tile">
        <?php
        foreach($similar_product as $item): 
           ?>
        <div class="product_tile-hover"><?php include __DIR__ .'/../components/item.component.php' ?></div>
            <?php endforeach ?>
        </div>
            <div class="addtocart">
                <?php include __DIR__ . '/../components/counter.component.php'; ?>
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