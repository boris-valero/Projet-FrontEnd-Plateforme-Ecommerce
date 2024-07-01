<template>
<<<<<<< HEAD
  <h1> Bienvenue sur notre plateforme de vente de meuble</h1>
  <img class="photo" src="/photo1.jpg" alt="Photo 1">
  <img class="photo" src="/photo2.jpg" alt="Photo 2">
  <img class="photo" src="/photo3.jpg" alt="Photo 3">
</template>

<script>
export default {
methods: {
  toggleMenu() {
    // Logique pour ouvrir/fermer le menu
    console.log('Menu toggle');
  }
}
}
=======
<div class="search-bar mx-auto">
        <form class="form-inline w-auto" action="#" method="GET">
          <input class="form-control mr-xl-5 search-input" type="search" placeholder="Rechercher un produit" aria-label="Search">
        </form>
      </div>
    <!--  <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="btn btn-outline-primary" href="/connexion">Connexion</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary ml-2" href="/inscription">Inscription</a>
        </li>
      </ul>  -->
  
    <h1>Bienvenue sur notre plateforme de vente de meuble</h1>
   
    <img class="photo" src="/photo1.jpg" alt="Photo 1">
    <img class="photo" src="/photo2.jpg" alt="Photo 2">
    <img class="photo" src="/photo3.jpg" alt="Photo 3">
</template>

<script>



  
>>>>>>> ac82ff79e6af51055e0ae5324b7813d86f0e008d
</script>

<style>

.search-bar {
  display: flex;
  justify-content: center; /* Centre horizontalement */
  align-items: center;     /* Centre verticalement */
  height: 10vh;           /* Utiliser toute la hauteur de la vue */
}

.form-inline {
  display: flex;
}

.search-input {
  width: 100%;
  max-width: 400px; /* Limite la largeur maximale de l'input */
  padding: 12px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-shadow: 0 2px 7px rgba(0, 0, 0, 0.1);
}
.burger-menu {
  cursor: pointer;
  height: 30px;
  width: 40px;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  position: absolute;
  top: 20px;
  left: 20px;
}

.burger-menu span {
  display: block;
  height: 4px;
  width: 100%;
  background-color: black;
}
h1 {
  font-family: 'Leckerli One', cursive;
<<<<<<< HEAD
  font-size: 65px;
  text-align: center;
}

.photo {
  width: 575px; 
  margin: 10px;
=======
  font-size: 65px
}

.photo {
    width: 370px; 
    margin: 23px;
>>>>>>> ac82ff79e6af51055e0ae5324b7813d86f0e008d
}

navbar-list {
  display: flex;
}
.navbar-list li {
  margin: 0 15px;
  list-style: none;
}
.navbar-list li a {
  font-size: 20px;
  text-decoration: none;
  color: rgb(45, 47, 47);
  position: relative;
}
.navbar-list li a::before {
  position: absolute ;
  top: -5px;
  left: 0;
  content: "";
  width: 0;
  height: 2px;
  border-radius: 6px;
  background-color: rgb(20, 20, 127);
  transition: 0.5s;
  z-index: -1
}
.navbar-list li a:hover::before {
  width: 100%;
}
</style>