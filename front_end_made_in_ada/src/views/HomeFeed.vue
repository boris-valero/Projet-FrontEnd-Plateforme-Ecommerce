<template>
    <h1>Bienvenue sur notre plateforme de vente de meuble</h1>
    
</template>

<script>

</script>

<style>
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
    font-size: 65px
}

.photo {
    width: 575px; 
    margin: 10px;
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

.meuble-container {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}

.meuble-card {
  width: 300px;
  border: 1px solid #ccc;
  border-radius: 8px;
  overflow: hidden;
}

.meuble-photo {
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