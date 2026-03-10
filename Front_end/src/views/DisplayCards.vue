<script setup>
import { ref, onMounted } from "vue";
import { fetchCards as getCards } from "@/services/fetchCards";
import CardItem from "@/components/CardItem.vue";
import { useCardStore } from "@/stores/cardStore";

const data = ref(null);
const isLoading = ref(false);
const error = ref(null);

const loadCards = async () => {
  isLoading.value = true;
  error.value = null;

  try {
    const cards = await getCards();
    cardStore.cards = cards;
  } catch (err) {
    error.value = err.message;
  } finally {
    isLoading.value = false;
  }
};

onMounted(loadCards);

const cardStore = useCardStore();
</script>

<template>
  <input
    class="search-bar"
    v-model="cardStore.search"
    placeholder="Rechercher une carte..."
  />

  <div v-if="isLoading">Chargement...</div>
  <div v-else-if="error">{{ error }}</div>

  <div v-else class="container-display">
    <CardItem
      v-for="card in cardStore.filteredCards"
      :key="card.id"
      :card="card"
    />
  </div>
</template>
