<script setup>
import CardInfos from "./CardInfos.vue";
import CardStats from "./CardStats.vue";
import { cardColors } from "@/utils/cardColors";
import { ref } from "vue";

defineProps({
  card: Object,
});

const getCardColor = (card) => {
  if (!card?.type?.name) return "#cccccc";
  if (card.type.name === "Magie") {
    return cardColors["Magie"];
  }
  if (card.type.name === "Piège") {
    return cardColors["Piège"];
  }
  if (card.type.name === "Monstre") {
    if (card.monster_secondary_type?.name === "Fusion") {
      return cardColors["Fusion"];
    }

    if (card.monster_primary_type?.name === "Effet") {
      return cardColors["Effet"];
    }

    return cardColors["Monstre"];
  }

  return "#cccccc";
};

const showDescription = ref(false);
const toggleDescription = () => {
  showDescription.value = !showDescription.value;
};
</script>

<template>
  <div class="card" :style="{ '--card-bg': getCardColor(card) }">
    <div class="container-img">
      <img
        class="card-img"
        v-if="card.image"
        :src="card.image"
        :alt="card.name"
      />
    </div>
    <div class="container-infos">
      <CardInfos :card="card" />

      <CardStats :card="card" />

      <button @click="toggleDescription">description</button>
      <p v-if="showDescription" class="container-description">
        {{ card.description }}
      </p>
    </div>
  </div>
</template>

<style scoped lang="scss">
@use "@/assets/scss/abstracts/_mixins.scss" as *;
.card-img {
  width: 200px;
}

.card {
  width: 480px;
  height: 500px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 1.2rem;
  padding: 2rem;
  @include card-effect;

  &:hover {
    .card-img {
      transform: scale(1.1);
      transition: 0.3s;
    }
  }
}
</style>
