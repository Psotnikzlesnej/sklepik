<script src="js/color_selector.js" defer></script>
<template id="color-selector">
<link rel="stylesheet" href="styles/color_selector.css">
<div class="color__title">
  <div class="color__titlehelp">
  KOLOR
  </div>
</div>
<div class="color__wrap">
  <ul class="color-selector__list color-selector__list--hidden">
    <slot name="item"></slot>
  </ul>
</div>
</template>
