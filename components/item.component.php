<link rel="stylesheet" href="<?= CSS_ROOT ?>/item.css">

<div class="product_tile">
            <div class="item__photo-container">
                <img class="item__photo" src="<?= PHOTO_ROOT ?>/products/Photo – 1.png" alt="">
            </div>
            <div class="product_tile-hover">
                <div class="dsc">
                    <div class="dsc1"><?= $item['name'] ?></div>
                    <div class="dsc2">Jaca to zjeb: <?= $item['serial_number'] ?></div>
                </div>
                <div class="price">
                    <div class="price1"><?= $item['catalog_price'] ?></div>
                    <div class="price2"><?= $item['promo_price'] ?></div>
                </div>
            </div>
            <div class="addtocart">
                <?php include COMPONENT_ROOT . '/counter.component.php'; ?>
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