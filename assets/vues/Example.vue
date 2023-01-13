<!-- assets/vues/Example.vue -->

<template>
    <h2>The is the Example component</h2>
  </template>
  
  <script>
  import axios from 'axios'
  export default {
    name: "Example",
    mounted(){
      axios.get('/api/user1').then((response)=>{console.log(response.data)})
    }
  }
  
  </script>