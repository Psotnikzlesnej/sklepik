<script src="../js/select.js" defer></script>
<link rel="stylesheet" href="../styles/counter.css">
<template id="select">
  <span class="select__current-element"></span>
  <span class="select__icon"></span>
  <ul class="select__list">
    <slot name="item"></slot>
  </ul>
</template>
<custom-select>
  <li slot="item" class="select__list-item" data-value="1">x</li>
  <li slot="item" class="select__list-item" data-value="2">d</li>
  <li slot="item" class="select__list-item" data-value="2">b</li>
  <li slot="item" class="select__list-item" data-value="2">k</li>
</custom-select>

  <!-- <span class="select__current-value"></span>
  <span class="select__icon"></span>
  <ul class="select__list">
    <slot name="item1"></slot>
    <li slot="item1">x</li>
  <li slot="item1">d</li>
  </ul> -->