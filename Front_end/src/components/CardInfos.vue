<script setup>
import { computed } from "vue";
const props = defineProps({
  card: {
    type: Object,
    required: true,
  },
});
const displayTypes = computed(() => {
  return [
    props.card.type?.name,
    props.card.monster_type?.name,
    props.card.monster_primary_type?.name,
    props.card_monster_secondary_type?.name,
  ]
    .filter(Boolean)
    .join(" / ");
});
</script>

<template>
  <h3 class="card-name">{{ card.name }}</h3>

  <p class="card-type">Type : {{ displayTypes }}</p>
</template>
