import { defineStore } from "pinia";
import { ref, computed } from "vue";

export const useCardStore = defineStore("cardStore", () => {
  const cards = ref([]);
  const search = ref("");
  const selectedType = ref(null);
  const selectedAttribute = ref(null);

  const currentPage = ref(1);
  const lastPage = ref(1);
  const total = ref(0);
  const perPage = ref(20);

  function setPaginationData(meta) {
    currentPage.value = meta.current_page;
    lastPage.value = meta.last_page;
    total.value = meta.total;
    perPage.value = meta.per_page;
  }

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
    currentPage,
    lastPage,
    total,
    perPage,

    setPaginationData,
    resetFilters,
  };
});
