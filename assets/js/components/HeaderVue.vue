<template>
  <div>
    <h2>{{ message }}</h2>
  </div>
</template>

<script>
export default {
  name: "HeaderVue",
  props:{
    message: String
  }
}
</script>

<style scoped>
</style>