<script>
  export default {
  name:"appVue",
    data() {
    return {
      name: '',
      hello: ''
    }
  },
  methods: {
    refreshHello() {
      if (this.name) {
        fetch("/api/helloword/" + this.name, {"method": "GET"})
        .then(response => response.json())
        .then(result => this.hello = result);
      }
    }
  }
}
</script>

<template>
  <router-view />
</template>
