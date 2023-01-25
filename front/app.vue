<script setup>
const {data:user}= await useFetch('http://localhost:3200/api/user2')

</script>

<template>
  <div>
    <h1>Entrée de l'application</h1>
    <h2>{{ user }}</h2>
  </div>
</template>
