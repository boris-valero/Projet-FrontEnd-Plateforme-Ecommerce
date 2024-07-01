<template>
    <H1>Catalogue de tous les meubles de notre magasin</H1>
    <div class="meuble-container">
        <div class="meuble-card" v-for="meuble in meubles" :key="meuble.id">
          <img :src="meuble.imageSrc" :alt="meuble.nom" class="meuble-photo">
          <h2>{{ meuble.nom }}</h2>
          <p>{{ meuble.description }}</p>
        </div>
      </div>
</template>

<script>
export default {
    data() {
      return {
        meubles: [
          { id: 1, nom: 'Meuble 1', imageSrc: '/photo1.jpg', description: 'Description du meuble 1.' },
          { id: 2, nom: 'Meuble 2', imageSrc: '/photo2.jpg', description: 'Description du meuble 2.' },
          { id: 3, nom: 'Meuble 3', imageSrc: '/photo3.jpg', description: 'Description du meuble 3.' },
          { id: 4, nom: 'Meuble 4', imageSrc: '/photo4.jpeg', description: 'Description du meuble 4.' },
          { id: 5, nom: 'Meuble 5', imageSrc: '/photo5.jpeg', description: 'Description du meuble 5.' },
        ]
      }
    }
  }
</script>

<style>
.meuble-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: space-around;
  }
  
  .meuble-card {
    width: 300px;
    margin: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    overflow: hidden;
  }
  
  .meuble-photo {
    cursor: pointer;
    width: 100%;
    height: 200px;
    object-fit: cover;
  }
  
  h2, p {
    padding: 0 15px;
  }
  
  h2 {
    margin-top: 10px;
  }
  
  p {
    margin-top: 5px;
    color: #666;
  }
  </style>