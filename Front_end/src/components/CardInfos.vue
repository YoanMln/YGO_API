<script setup>
const props = defineProps({
  card: {
    type: Object,
    required: true,
  },
});
</script>

<template>

  <h3 class="card-name">{{ card.name }}</h3>

  <p class="card-type">
    Type : {{ card.type?.name }} / {{ card.monster_type?.name }} /
    {{ card.monster_primary_type?.name }} /
    {{ card.monster_secondary_type?.name }}
  </p>
</template>
