<template>
    <div class="contact-form-container">
      <form @submit.prevent="submitForm">
        <div class="form-group">
          <label for="name">Nom :</label>
          <input type="text" id="name" v-model="form.name" required>
        </div>
        <div class="form-group">
          <label for="email">Email :</label>
          <input type="email" id="email" v-model="form.email" required>
        </div>
        <div class="form-group">
          <label for="message">Message :</label>
          <textarea id="message" v-model="form.message" required></textarea>
        </div>
        <button type="submit">Envoyer</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        form: {
          name: '',
          email: '',
          message: ''
        }
      }
    },
    methods: {
      submitForm() {
        // Ici, vous pouvez valider et traiter le formulaire ou envoyer les données à un serveur
        console.log("Form submitted:", this.form);
      }
    }
  }
  </script>
  
  <style>
  /* Ajoutez ou modifiez votre CSS existant pour inclure ces styles */
  .contact-form-container {
    max-width: 600px;
    margin: auto;
    padding: 20px;
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  label {
    display: block;
    margin-bottom: 5px;
  }
  
  input[type="text"],
  input[type="email"],
  textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  
  button[type="submit"] {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  button[type="submit"]:hover {
    background-color: #0056b3;
  }
  </style>