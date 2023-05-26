
<script src="<?= JS_ROOT ?>/price_range.js" defer></script>
<link rel="stylesheet" href="<?= CSS_ROOT ?>/price_range.css">
<template id="range">
  <div class="range__container">
    <input type="range" class="range__input range__input--min">
    <input type="range" class="range__input range__input--max">
  </div>
  <input type="number" class="range__value range__value--min">
  <input type="number" class="range__value range__value--max">
  <div class="range__track-disabler"></div>
  <div class="range__track"></div>
</template>