<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/similar.css">
    <script src="../js/counter.js" defer></script>
    <link rel="stylesheet" href="../styles/counter.css">
</head>
<body>
    <div class="bg">
        <div class="text">Polecane produkty</div>
        <div class="rectangle"></div>
        <div class="border"></div>

        <div class="product_tile">
            <div class="photo">
            </div>
            <div class="product_tile-hover">
                <div class="dsc">
                    <div class="dsc1">TURBOMATURA</div>
                    <div class="dsc2">2017</div>
                </div>
                <div class="price">
                    <div class="price1">297zł</div>
                    <div class="price2">100zł</div>
                </div>
                <div class="addtocart">
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

    </div>

</body>
</html>