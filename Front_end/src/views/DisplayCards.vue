<script setup>
import { ref, onMounted } from "vue";
import { fetchCards as getCards } from "@/services/fetchCards";

import CardItem from "@/components/CardItem.vue";

const data = ref(null);
const isLoading = ref(false);
const error = ref(null);

const loadCards = async () => {
  isLoading.value = true;
  error.value = null;

  try {
    data.value = await getCards();
  } catch (err) {
    error.value = err.message;
  } finally {
    isLoading.value = false;
  }
};

onMounted(() => {
  loadCards();
});
</script>

<template>
  <div>
    <div v-if="isLoading">Chargement...</div>
    <div v-else-if="error">{{ error }}</div>

    <div v-else class="container-display">
      <CardItem
        v-for="card in data"
        :key="card.id"
        :card="card"
      />
    </div>
  </div>
</template>