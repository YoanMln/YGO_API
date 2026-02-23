<script setup>
const props = defineProps({
  card: {
    type: Object,
    required: true,
  },
});
</script>

<template>
  <p v-if="card.level">Niveau : {{ card.level }}</p>
  <p v-if="card.attack != null">Attaque / {{ card.attack }}</p>
  <p v-if="card.defense != null">Défense / {{ card.defense }}</p>
</template>
