<script setup>
import CardInfos from "./CardInfos.vue";
import CardStats from "./CardStats.vue";
import { useCardColor } from "../../composables/useCardColors";
import { ref } from "vue";


defineProps({
  card: Object,
});

const { getCardColor } = useCardColor();

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

      <button class="card-button" @click="toggleDescription">
        description
      </button>
      <p v-if="showDescription" class="container-description">
        {{ card.description }}
      </p>
    </div>
  </div>
</template>

<style scoped lang="scss">
@use "@/assets/scss/abstracts/_mixins.scss" as *;

.container-infos {
  display: flex;
  flex-direction: column;
  gap: 2rem;
}

.card-img {
  width: 200px;
}

.card {
  width: 100%;
  max-width: 530px;
  min-height: 550px;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  gap: 1.2rem;
  padding: 2rem;
  @include card-effect;
  backdrop-filter: blur(0.5px);

  &:hover {
    .card-img {
      transform: scale(1.1);
      transition: 0.3s;
    }
  }
}
</style>
