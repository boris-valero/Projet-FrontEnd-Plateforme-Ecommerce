
<<<<<<< HEAD

=======
>>>>>>> ac82ff79e6af51055e0ae5324b7813d86f0e008d
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
<<<<<<< HEAD
  </style>
=======
  </style>
>>>>>>> ac82ff79e6af51055e0ae5324b7813d86f0e008d
