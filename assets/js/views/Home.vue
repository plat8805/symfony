<template>
  <div>
    <header-vue message="test"></header-vue>
    <h1>Home Page</h1>
    <hello-vue message="Welcome to my Site"></hello-vue>
  </div>
</template>

<script>

import HelloVue from "../components/HelloVue";
import HeaderVue from "../components/HeaderVue";


export default {
  name: "Home",
  components:{
    HelloVue,
    HeaderVue,
  }
}
</script>

<style scoped>
</style>