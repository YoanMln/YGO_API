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

      const matchType = selectedType.value
        ? [
            card.monster_primary_type?.name,
            card.monster_secondary_type?.name,
            card.monster_tertiary_type?.name,
            card.type.name,
          ].includes(selectedType.value)
        : true;
      return matchSearch && matchType;
    });
  });
  return { cards, search, selectedType, filteredCards };
});
