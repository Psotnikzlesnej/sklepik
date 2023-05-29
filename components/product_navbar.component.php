<link rel="stylesheet" href="<?= CSS_ROOT ?>/product_navbar.css">
<link rel="stylesheet" href="<?= CSS_ROOT ?>/icons.css">
<?php include COMPONENT_ROOT . '/select.component.php' ?>

<nav class="product-navbar" id="navbar-product">
    <div class="product-navbar__mode">
        <?php $mode_manipulator = new URLManipulator($url); 
        $is_list = isset($_GET['mo']) && $_GET['mo'] == 'list';
        ?>
        <span class="product-navbar__mode-text">Widok:</span>
        <a href="<?= $mode_manipulator->get_new_url("mo", 'grid') ?>" 
        class="product-navbar__mode-link <?= $is_list ? '' : 'product-navbar__mode-link--active' ?>" id="gridViewLink">
            <i class="product-navbar__mode-icon icon-grid"></i>
        </a>
        <a href="<?= $mode_manipulator->get_new_url("mo", 'list') ?>" class="product-navbar__mode-link
        <?= $is_list ? 'product-navbar__mode-link--active' : '' ?>" id="listViewLink">
            <i class="product-navbar__mode-icon icon-list"></i>
        </a>
    </div>
    <div class="product-navbar__right">
        <div class="product-navbar__section product-navbar__section-sort">
            <h3 class="product-navbar__section-title">Sortuj</h3>
            <?php $order_manipulator = new URLManipulator($url); ?>
            <custom-select class="select product-navbar__select" data-default-value="<?= $_GET['o'] ?? '' ?>">
                <li slot="item" class="select__list-item" data-value="">
                    <a href="<?= $order_manipulator->get_new_url("o", '') ?>">Domyślnie</a>
                </li>
                <li slot="item" class="select__list-item" data-value="price_asc">
                    <a href="<?= $order_manipulator->get_new_url("o", 'price_asc') ?>">Cena rosnąco</a>
                </li>
                <li slot="item" class="select__list-item" data-value="price_desc">
                    <a href="<?= $order_manipulator->get_new_url("o", 'price_desc') ?>">Cena malejąco</a>
                </li>
                <li slot="item" class="select__list-item" data-value="name_asc">
                    <a href="<?= $order_manipulator->get_new_url("o", 'name_asc') ?>">Nazwa rosnąco</a>
                </li>
                <li slot="item" class="select__list-item" data-value="name_desc">
                    <a href="<?= $order_manipulator->get_new_url("o", 'name_desc') ?>">Nazwa malejąco</a>
                </li>
            </custom-select>
        </div>
        <div class="product-navbar__section product-navbar__section-show">
            <h3 class="product-navbar__section-title">Pokaż</h3>
            <?php $per_page_manipulator = new URLManipulator($url); ?>
            <custom-select class="select product-navbar__select" data-default-value="<?= $_GET['pp'] ?? 5 ?>">
                <li slot="item" class="select__list-item" data-value="5">
                    <a href="<?= $per_page_manipulator->get_new_url("pp", 5) ?>">5</a>
                </li>
                <li slot="item" class="select__list-item" data-value="10">
                    <a href="<?= $per_page_manipulator->get_new_url("pp", 10) ?>">10</a>
                </li>
                <li slot="item" class="select__list-item" data-value="15">
                    <a href="<?= $per_page_manipulator->get_new_url("pp", 15) ?>">15</a>
                </li>
                <li slot="item" class="select__list-item" data-value="20">
                    <a href="<?= $per_page_manipulator->get_new_url("pp", 20) ?>">20</a>
                </li>
            </custom-select>
        </div>
        <div class="product-navbar__section product-navbar__pages">
            <?php
                $page_manipulator = new URLManipulator($url);
                if($previous_page):
                $new_url = $page_manipulator->get_new_url("p", $previous_page);
            ?>
                <a href="<?= $new_url ?>" class="product-navbar__page-link product-navbar__page-link--arrow"><</a>
            <?php
                endif;
                foreach($pages_array as $page_id):
                if($page_id != '...'):
                    $new_url = $page_manipulator->get_new_url("p", $page_id);
            ?>
                <a href="<?= $new_url ?>" class="product-navbar__page-link <?= $curr_page == $page_id ? 'product-navbar__page-link--current' : '' ?>">
                    <?= $page_id ?>
                </a>
            <?php else: ?>
                <span class="product-navbar__page-dots">...</span>
            <?php endif; endforeach;
                if($next_page):
                    $new_url = $page_manipulator->get_new_url("p", $next_page);
            ?>
            <a href="<?= $new_url ?>" class="product-navbar__page-link product-navbar__page-link--arrow">></a>
        <?php endif; ?>
        </div>
    </div>
</nav>
<script src="<?= JS_ROOT ?>/product_navbar.js"></script>