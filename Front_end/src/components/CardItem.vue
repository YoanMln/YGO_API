<script setup>
import CardInfos from "./CardInfos.vue";
import CardStats from "./CardStats.vue";
import { cardColors } from "@/utils/cardColors";

defineProps({
  card: Object,
});

const getCardColor = (type) => {
  return cardColors[type?.name] ?? "#cccccc";
};
</script>

<template>
  <div class="card" :style="{ '--card-bg': getCardColor(card.type) }">
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
