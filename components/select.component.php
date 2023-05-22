<script src="../js/select.js" defer></script>
<template id="select">
<link rel="stylesheet" href="../styles/select.css">
  <div class="select__current-element">
    <span class="select__current-content"></span>
    <span class="select__icon"></span>
  </div>
  <ul class="select__list select__list--hidden">
    <slot name="item"></slot>
  </ul>
</template>
<custom-select class="select">
  <li slot="item" class="select__list-item" data-value="1">x</li>
  <li slot="item" class="select__list-item" data-value="2">d</li>
  <li slot="item" class="select__list-item" data-value="2">b</li>
  <li slot="item" class="select__list-item" data-value="2">k</li>
</custom-select>