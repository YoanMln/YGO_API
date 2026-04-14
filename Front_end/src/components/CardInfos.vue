<script setup>
import { computed } from "vue";
const props = defineProps({
  card: {
    type: Object,
    required: true,
  },
});
const displayTypes = computed(() => {
  const typeName = props.card.type?.name;

  if (typeName === "Monstre") {
    return [
      typeName,
      props.card.monster_type?.name,
      props.card.monster_primary_type?.name,
      props.card.monster_secondary_type?.name,
    ]
      .filter(Boolean)
      .join(" / ");
  }

  if (typeName === "Magie") {
    return [typeName, props.card.spellType].filter(Boolean).join(" ");
  }

  if (typeName === "Piège") {
    return [typeName, props.card.trapType].filter(Boolean).join(" ");
  }

  return typeName || "";
});
</script>

<template>
  <h3 class="card-name">{{ card.name }}</h3>
  <p class="card-attribute">{{ card.attribute?.name }}</p>
  <p class="card-type">Type : {{ displayTypes }}</p>
</template>
