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
  <button class="reset-button" @click="cardStore.resetFilters()">
    Réinitialiser les filtres
  </button>
  <div class="container-search-type">
    <div class="container-input">
      <label class="radio">
        <input
          class="input-type"
          type="radio"
          value="Monstre"
          v-model="cardStore.selectedType"
        />
        Monstre
      </label>
      <label class="radio">
        <input
          class="input-type"
          type="radio"
          value="Normal"
          v-model="cardStore.selectedType"
        />Monstre Normal
      </label>
      <label class="radio">
        <input
          class="input-type"
          type="radio"
          value="Effet"
          v-model="cardStore.selectedType"
        />Monstre à Effet
      </label>
      <label class="radio">
        <input
          class="input-type"
          type="radio"
          value="Fusion"
          v-model="cardStore.selectedType"
        />Monstre Fusion
      </label>
      <label class="radio">
        <input
          class="input-type"
          type="radio"
          value="Lien"
          v-model="cardStore.selectedType"
        />Monstre Lien
      </label>
      <label class="radio">
        <input
          class="input-type"
          type="radio"
          value="Xyz"
          v-model="cardStore.selectedType"
        />Monstre XYZ
      </label>
      <label class="radio">
        <input
          class="input-type"
          type="radio"
          value="Magie"
          v-model="cardStore.selectedType"
        />
        Magie
      </label>

      <label class="radio">
        <input
          class="input-type"
          type="radio"
          value="Piège"
          v-model="cardStore.selectedType"
        />
        Piège
      </label>

      <label class="radio">
        <input
          class="input-type"
          type="radio"
          value="spell_continue"
          v-model="cardStore.selectedType"
        />
        Magie Continue
      </label>

      <label class="radio">
        <input
          class="input-type"
          type="radio"
          value="spell_speed"
          v-model="cardStore.selectedType"
        />
        Magie Rapide
      </label>

      <label class="radio">
        <input
          class="input-type"
          type="radio"
          value="field_spell"
          v-model="cardStore.selectedType"
        />
        Magie Terrain
      </label>

      <label class="radio">
        <input
          class="input-type"
          type="radio"
          value="ritual_spell"
          v-model="cardStore.selectedType"
        />
        Magie Rituelle
      </label>

      <label class="radio">
        <input
          class="input-type"
          type="radio"
          value="trap_continue"
          v-model="cardStore.selectedType"
        />
        Piège Continue
      </label>
      <label class="radio">
        <input
          class="input-type"
          type="radio"
          value="counter_trap"
          v-model="cardStore.selectedType"
        />
        Piège Contre
      </label>
      <label class="radio">
        <input
          class="input-type"
          type="radio"
          value=""
          v-model="cardStore.selectedType"
        />
        Toutes les cartes
      </label>
    </div>
    <div class="container-filter-attributes">
      <img
        class="icon-attribute-filter"
        src="/src/assets/icons/attributes-icons/divin.webp"
        @click="cardStore.selectedAttribute = 'Divin'"
        alt="Filtre attribut Divin"
      />
      <img
        class="icon-attribute-filter"
        src="/src/assets/icons/attributes-icons/earth.webp"
        @click="cardStore.selectedAttribute = 'Terre'"
        alt="Filtre attribut Terre"
      />
      <img
        class="icon-attribute-filter"
        src="/src/assets/icons/attributes-icons/fire.webp"
        @click="cardStore.selectedAttribute = 'Feu'"
        alt="Filtre attribut Feu"
      />
      <img
        class="icon-attribute-filter"
        src="/src/assets/icons/attributes-icons/light.webp"
        @click="cardStore.selectedAttribute = 'Lumière'"
        alt="Filtre attribut Lumière"
      />
      <img
        class="icon-attribute-filter"
        src="/src/assets/icons/attributes-icons/shadow.webp"
        @click="cardStore.selectedAttribute = 'Ténèbres'"
        alt="Filtre attribut Ténèbres"
      />
      <img
        class="icon-attribute-filter"
        src="/src/assets/icons/attributes-icons/water.webp"
        @click="cardStore.selectedAttribute = 'Eau'"
        alt="Filtre attribut Eau"
      />
      <img
        class="icon-attribute-filter"
        src="/src/assets/icons/attributes-icons/wind.webp"
        @click="cardStore.selectedAttribute = 'Vent'"
        alt="Filtre attribut Vent"
      />
    </div>
  </div>
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
