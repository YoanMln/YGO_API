import { defineStore } from "pinia";
import { ref, computed } from "vue";

export const useCardStore = defineStore("cardStore", () => {
  const cards = ref([]);
  const search = ref("");
  const selectedType = ref(null);

  const filteredCards = computed(() => {
    return cards.value.filter((card) => {
      const matchSearch = card.name
        .toLowerCase()
        .includes(search.value.toLowerCase());

      let matchType = true;

      if (selectedType.value === "spell_continue") {
        matchType =
          card.type?.name === "Magie" && card.spell_type?.name === "Continue";
      } else if (selectedType.value === "spell_speed") {
        matchType =
          card.type?.name === "Magie" && card.spell_type?.name === "Rapide";
      } else if (selectedType.value === "field_spell") {
        matchType =
          card.type?.name === "Magie" && card.spell_type?.name === "Terrain";
      } else if (selectedType.value === "ritual_spell") {
        matchType =
          card.type?.name === "Magie" && card.spell_type?.name === "Rituelle";
      } else if (selectedType.value === "trap_continue") {
        matchType =
          card.type?.name === "Piège" && card.trap_type?.name === "Continue";
      } else if (selectedType.value) {
        matchType = [
          card.type?.name,
          card.monster_primary_type?.name,
          card.monster_secondary_type?.name,
          card.monster_tertiary_type?.name,
        ].includes(selectedType.value);
      }

      return matchSearch && matchType;
    });
  });

  return { cards, search, selectedType, filteredCards };
});
