<template>
  <span class="material-symbols-outlined" :class="extraClass">{{ name }}</span>
</template>

<script setup>
defineProps({
  name: String,
  extraClass: {
    type: String,
    default: ''
  }
});
</script>
