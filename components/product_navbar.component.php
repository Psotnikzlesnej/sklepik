<link rel="stylesheet" href="styles/product_navbar.css">
<link rel="stylesheet" href="styles/icons.css">
<?php include __DIR__ . '/select.component.php' ?>

<nav class="product-navbar" id="navbar-product">
    <div class="product-navbar__mode">
        <span class="product-navbar__mode-text">Widok:</span>
        <a href="#" class="product-navbar__mode-link" id="gridViewLink">
            <i class="product-navbar__mode-icon icon-grid"></i>
        </a>
        <a href="#" class="product-navbar__mode-link hidden" id="listViewLink">
            <i class="product-navbar__mode-icon icon-list"></i>
        </a>
    </div>
    <div class="product-navbar__right">
        <div class="product-navbar__section product-navbar__section-sort">
            <h3 class="product-navbar__section-title">Sortuj</h3>
            <custom-select class="select product-navbar__select">
                <li slot="item" class="select__list-item" data-value="">Domyślnie</li>
                <li slot="item" class="select__list-item" data-value="price_asc">Cena rosnąco</li>
                <li slot="item" class="select__list-item" data-value="price_desc">Cena malejąco</li>
                <li slot="item" class="select__list-item" data-value="name_asc">Nazwa rosnąco</li>
                <li slot="item" class="select__list-item" data-value="name_desc">Nazwa malejąco</li>
            </custom-select>
        </div>
        <div class="product-navbar__section product-navbar__section-show">
            <h3 class="product-navbar__section-title">Pokaż</h3>
            <custom-select class="select product-navbar__select">
                <li slot="item" class="select__list-item" data-value="10">10</li>
                <li slot="item" class="select__list-item" data-value="20">20</li>
                <li slot="item" class="select__list-item" data-value="30">30</li>
                <li slot="item" class="select__list-item" data-value="40">40</li>
            </custom-select>
        </div>
        <div class="product-navbar__section product-navbar__pages">
            <?php
                if($previous_page):
                $new_url = get_new_page_url($url_manipulator, "$previous_page");
            ?>
                <a href="<?= $new_url ?>" class="product-navbar__page-link"><</a>
            <?php
                endif;
                foreach($pages_array as $page_id):
                if($page_id != '...'):
                $new_url = get_new_page_url($url_manipulator, "$page_id");
            ?>
                <a href="<?= $new_url ?>" class="product-navbar__page-link <?= $current_page == $page_id ? 'product-navbar__page-link--current' : '' ?>">
                    <?= $page_id ?>
                </a>
            <?php else: ?>
                <span class="product-navbar__page-dots">...</span>
            <?php endif; endforeach;
                if($next_page):
                $new_url = get_new_page_url($url_manipulator, "$next_page");
            ?>
            <a href="<?= $new_url ?>" class="product-navbar__page-link">></a>
        <?php endif; ?>
        </div>
    </div>
</nav>
<script src="js/product_navbar.js"></script>