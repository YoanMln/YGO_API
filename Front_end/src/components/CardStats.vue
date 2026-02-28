<script setup>
const props = defineProps({
  card: {
    type: Object,
    required: true,
  },
});
</script>

<template>
  <div class="container-stats">
    <div v-if="card.level" class="level-stars">
      Niveau :
      <img
        v-for="n in card.level"
        :key="n"
        src="@/assets/icons/star-level.webp"
        alt="star-level"
        class="star-icon"
      />
    </div>
    <p v-if="card.attack != null">Attaque / {{ card.attack }}</p>
    <p v-if="card.defense != null">Défense / {{ card.defense }}</p>
  </div>
</template>

<style scoped lang="scss">
.container-stats {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.level-stars {
  display: flex;
  flex-direction: row;
  gap: 1px;
  .star-icon {
    width: 15px;
  }
}
</style>
