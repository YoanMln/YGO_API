<template>
    <div class="pagination">
      <button 
        @click="$emit('change-page', 1)" 
        :disabled="currentPage === 1"
        class="pagination-btn"
      >
        ⏮ Première
      </button>
      
      <button 
        @click="$emit('change-page', currentPage - 1)" 
        :disabled="currentPage <= 1"
        class="pagination-btn"
      >
        ◀ Précédent
      </button>
      
      <span class="pagination-info">
        Page {{ currentPage }} / {{ lastPage }}
      </span>
      
      <button 
        @click="$emit('change-page', currentPage + 1)" 
        :disabled="currentPage >= lastPage"
        class="pagination-btn"
      >
        Suivant ▶
      </button>
      
      <button 
        @click="$emit('change-page', lastPage)" 
        :disabled="currentPage === lastPage"
        class="pagination-btn"
      >
        Dernière ⏭
      </button>
    </div>
  </template>
  
  <script setup>
  defineProps({
    currentPage: { type: Number, required: true },
    lastPage: { type: Number, required: true }
  });
  
  defineEmits(['change-page']);
  </script>
  
  <style scoped lang="scss">
  .pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
    margin: 3rem 0;
    padding: 2rem;
  }
  
  .pagination-btn {
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 10px;
    padding: 0.8rem 1.5rem;
    color: white;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
  
    &:hover:not(:disabled) {
      background: rgba(255, 255, 255, 0.3);
      transform: translateY(-2px);
    }
  
    &:disabled {
      opacity: 0.3;
      cursor: not-allowed;
    }
  }
  
  .pagination-info {
    color: white;
    font-weight: 600;
    padding: 0 1rem;
    font-size: 1.1rem;
  }
  </style>