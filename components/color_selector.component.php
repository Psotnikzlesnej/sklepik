<script src="../js/color_selector.js" defer></script>
<template id="color-selector">
<link rel="stylesheet" href="../styles/color_selector.css">
  <ul class="color-selector__list color-selector__list--hidden">
    <slot name="item"></slot>
  </ul>
</template>
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
</color-selector> 
</div>