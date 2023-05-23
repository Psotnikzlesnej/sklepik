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