import { defineStore } from "pinia";
import { ref, computed } from "vue";

export const useCardStore = defineStore("cardStore", () => {
  const cards = ref([]);
  const search = ref("");
  const selectedType = ref(null);
  const selectedAttribute = ref(null);

  const filteredCards = computed(() => {
    return cards.value.filter((card) => {
      const matchAttribute = selectedAttribute.value
        ? card.attribute?.name === selectedAttribute.value
        : true;
      const matchSearch = card.name
        .toLowerCase()
        .includes(search.value.toLowerCase());

      let matchType = true;

      if (selectedType.value === "spell_continue") {
        matchType =
          card.type?.name === "Magie" && card.spellType === "Continue";
        console.log("matchType result:", matchType);
      } else if (selectedType.value === "spell_speed") {
        matchType = card.type?.name === "Magie" && card.spellType === "Rapide";
      } else if (selectedType.value === "field_spell") {
        matchType = card.type?.name === "Magie" && card.spellType === "Terrain";
      } else if (selectedType.value === "ritual_spell") {
        matchType =
          card.type?.name === "Magie" && card.spellType === "Rituelle";
      } else if (selectedType.value === "trap_continue") {
        matchType = card.type?.name === "Piège" && card.trapType === "Continue";
      } else if (selectedType.value === "counter_trap") {
        matchType = card.type?.name === "Piège" && card.trapType === "Contre";
      } else if (selectedType.value) {
        matchType = [
          card.type?.name,
          card.monster_primary_type?.name,
          card.monster_secondary_type?.name,
          card.monster_tertiary_type?.name,
        ].includes(selectedType.value);
      }

      return matchSearch && matchType && matchAttribute;
    });
  });

  function resetFilters() {
    selectedType.value = null;
    selectedAttribute.value = null;
    search.value = "";
  }

  return {
    cards,
    search,
    selectedType,
    selectedAttribute,
    filteredCards,
    resetFilters,
  };
});
