
<link rel="stylesheet" href="styles/sidebar.css">

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
    <div class="color__selector">
        <color-selector class="color-selector" data-selected="1">
            <li slot="item" class="color-selector__list-item" data-value="1">black</li>
            <li slot="item" class="color-selector__list-item" data-value="2">red</li>
            <li slot="item" class="color-selector__list-item" data-value="3">green</li>
            <li slot="item" class="color-selector__list-item" data-value="4">blue</li>
            <li slot="item" class="color-selector__list-item" data-value="1">black</li>
            <li slot="item" class="color-selector__list-item" data-value="2">red</li>
            <li slot="item" class="color-selector__list-item" data-value="3">green</li>
            <li slot="item" class="color-selector__list-item" data-value="4">blue</li>
            <li slot="item" class="color-selector__list-item" data-value="1">black</li>
            <li slot="item" class="color-selector__list-item" data-value="2">red</li>
            <li slot="item" class="color-selector__list-item" data-value="3">green</li>
            <li slot="item" class="color-selector__list-item" data-value="4">blue</li>
            <li slot="item" class="color-selector__list-item" data-value="1">black</li>
            <li slot="item" class="color-selector__list-item" data-value="2">red</li>
            <li slot="item" class="color-selector__list-item" data-value="3">green</li>
        </color-selector> 
    </div> 
    <?php
    include 'components/price_range.component.php'
    ?>
    <div class="pricerange__borders">
        <div class="pricerange__title">CENA</div>
        <price-range data-min="1" data-max="100" class="range"></price-range>
    </div>
</div>