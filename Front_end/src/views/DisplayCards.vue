<script setup>
import { ref, onMounted, watch } from "vue";
import { fetchCards as getCards } from "@/services/fetchCards";
import CardItem from "@/components/CardItem.vue";
import { useCardStore } from "@/stores/cardStore";
import Pagination from "@/components/Pagination.vue";

const isLoading = ref(false);
const error = ref(null);
const cardStore = useCardStore();

const loadCards = async (page = 1) => {
  isLoading.value = true;
  error.value = null;

  try {
    const filters = {};
    if (cardStore.search) filters.search = cardStore.search;
    if (cardStore.selectedType) filters.type = cardStore.selectedType;
    if (cardStore.selectedAttribute)
      filters.attribute = cardStore.selectedAttribute;

    const response = await getCards(page, filters);
    cardStore.cards = response.data;
    cardStore.setPaginationData(response.meta);
    console.log("Cartes recues :", response.data?.length);
  } catch (err) {
    error.value = err.message;
    console.error("Erreur:", err);
  } finally {
    isLoading.value = false;
  }
};

const typeFilters = [
  { label: "Monstre", value: "Monstre" },
  { label: "Monstre Normal", value: "Normal" },
  { label: "Monstre à Effet", value: "Effet" },
  { label: "Monstre Fusion", value: "Fusion" },
  { label: "Monstre Lien", value: "Lien" },
  { label: "Monstre XYZ", value: "Xyz" },
  { label: "Magie", value: "Magie" },
  { label: "Piège", value: "Piège" },
  { label: "Magie Continue", value: "spell_continue" },
  { label: "Magie Rapide", value: "spell_speed" },
  { label: "Magie Terrain", value: "field_spell" },
  { label: "Magie Rituelle", value: "ritual_spell" },
  { label: "Piège Continue", value: "trap_continue" },
  { label: "Piège Contre", value: "counter_trap" },
];

const attributeFilters = [
  { name: "Divin", icon: "divin.webp" },
  { name: "Terre", icon: "earth.webp" },
  { name: "Feu", icon: "fire.webp" },
  { name: "Lumière", icon: "light.webp" },
  { name: "Ténèbres", icon: "shadow.webp" },
  { name: "Eau", icon: "water.webp" },
  { name: "Vent", icon: "wind.webp" },
];

const changePage = (page) => {
  if (page >= 1 && page <= cardStore.lastPage) {
    loadCards(page);
    window.scrollTo({ top: 0, behavior: "smooth" });
  }
};

let debounceTimer = null;
watch(
  [
    () => cardStore.search,
    () => cardStore.selectedType,
    () => cardStore.selectedAttribute,
  ],
  () => {
    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(() => {
      loadCards(1);
    }, 300);
  }
);

onMounted(() => loadCards(1));
</script>

<template>
  <input
    class="search-bar"
    v-model="cardStore.search"
    placeholder="Rechercher une carte..."
  />
  <button class="filter-btn reset-btn" @click="cardStore.resetFilters()">
    Réinitialiser les filtres
  </button>
  <div class="container-search-type">
    <!--Types-->
    <div class="container-filter-types">
      <button
        v-for="filter in typeFilters"
        :key="filter.value"
        :class="[
          'filter-btn',
          cardStore.selectedType === filter.value ? 'active' : '',
        ]"
        @click="cardStore.selectedType = filter.value"
      >
        {{ filter.label }}
      </button>

      <button class="filter-btn" @click="cardStore.selectedType = null">
        Toutes les cartes
      </button>
    </div>
    <!--Attributes-->
    <div class="container-filter-attributes">
      <img
        v-for="attr in attributeFilters"
        :key="attr.name"
        :src="`/src/assets/icons/attributes-icons/${attr.icon}`"
        :class="[
          'icon-attribute-filter',
          cardStore.selectedAttribute === attr.name ? 'active' : '',
        ]"
        @click="cardStore.selectedAttribute = attr.name"
      />
    </div>
  </div>
  <div v-if="isLoading">Chargement...</div>
  <div v-else-if="error">{{ error }}</div>
  <div v-else>
    <div class="container-display">
      <CardItem v-for="card in cardStore.cards" :key="card.id" :card="card" />
    </div>
    <Pagination
      :current-page="cardStore.currentPage"
      :last-page="cardStore.lastPage"
      @change-page="changePage"
    />
  </div>
</template>
