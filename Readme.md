# Front-End d'un site de E-commerce

## Description
Ce projet est une application front-end développée avec Vue.js. Il s'agit d'un catalogue en ligne pour un magasin de meubles, permettant aux utilisateurs de parcourir et de visualiser les détails des meubles disponibles.

## Fonctionnalités

### 1. Navigation
- **Accueil** : Page d'accueil présentant les nouveautés et les promotions.
- **Catalogue de meubles** : Affiche une liste de tous les meubles disponibles avec leurs images et descriptions. Voir [`MeublesGlobal`](src/views/MeublesGlobal.vue).
- **Détails du meuble** : Affiche les détails d'un meuble spécifique. Voir [`MeubleDetails`](src/views/MeubleDetails.vue).
- **Inscription** : Formulaire d'inscription pour les nouveaux utilisateurs. Voir [`RegistrationForm`](src/views/RegistrationForm.vue).
- **Contacts** : Formulaire de contact pour que les utilisateurs puissent envoyer des messages. Voir [`MeContacter`](src/views/MeContacter.vue).

### 2. Barre de recherche
- **Recherche** : Permet aux utilisateurs de rechercher des meubles par nom. Voir [`SearchBar`](src/components/SearchBar.vue).

### 3. Formulaire de contact
- **Formulaire de contact** : Permet aux utilisateurs d'envoyer des messages via un formulaire. Voir [`MeContacter`](src/views/MeContacter.vue).

### 4. Composants réutilisables
- **Composants Vue** : Utilisation de composants réutilisables pour une meilleure organisation du code. Par exemple, [`HelloWorld`](src/components/HelloWorld.vue) et [`SearchBar`](src/components/SearchBar.vue).


## Installation du Projet

### Prérequis
- Node.js
- pnpm (gestionnaire de paquets)

### Étapes d'installation
1. Clonez le dépôt :
    ```sh
    git clone <url-du-dépôt>
    cd front_end_made_in_ada
    ```

2. Installez les dépendances :
    ```sh
    pnpm install
    ```

### Lancer le projet en mode développement
```sh
pnpm run serve
```

### Compiler et minifier pour la production
```sh
pnpm run build
```

## Configuration
Pour personnaliser la configuration, consultez la [référence de configuration](https://cli.vuejs.org/config/).





