
<template>
    <div class="search-bar">
      <input
        type="search"
        v-model="query"
        @input="onSearch"
        placeholder="Rechercher..."
      />
    </div>
  </template>
  
  <script>
  export default {
    name: 'SearchBar',
    data() {
      return {
        query: ''
      };
    },
    methods: {
      onSearch() {
        this.$emit('search', this.query);
      }
    }
  };
  </script>
  
  <style scoped>
  .search-bar {
    margin-bottom: 20px;
  }
  input[type="search"] {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
  }
  </style>