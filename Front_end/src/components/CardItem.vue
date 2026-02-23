<script setup>
import CardInfos from "./CardInfos.vue";
import CardStats from "./CardStats.vue";
import { cardColors } from "@/utils/cardColors";

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

      <p class="container-description">Descritpion : {{ card.description }}</p>
    </div>
  </div>
</template>
