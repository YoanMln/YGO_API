<script setup>
import { ref, onMounted } from "vue";
import { fetchCards as getCards } from "@/services/fetchCards";

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
    <div v-if="error" class="error">{{ error }}</div>
    <div v-if="data">
      <div v-for="card in data" :key="card.id">
        <h3>{{ card.name }}</h3>
        <p>Niveau: {{ card.level }}</p>
        <p>{{ card.description }}</p>
        <p>Type: {{ card.type?.name }}</p>
        <p>Attaque: {{ card.attack }}</p>
        <p>Défense: {{ card.defense }}</p>
        <img v-if="card.image" :src="card.image" :alt="card.name" />
      </div>
    </div>
  </div>
</template>
