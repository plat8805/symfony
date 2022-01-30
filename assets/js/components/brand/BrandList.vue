<template>
  <div>
    <h6 class="text-uppercase mb-4">Show ny brand</h6>

    <div class="mb-2 form-check" v-for="brand in brands['hydra:member']" :key="brand.id">
      <input class="form-check-input" :id="'brand-'+brand.id" type="checkbox" checked>
      <label class="form-check-label" :for="'brand-'+brand.id">{{brand.name}}</label>
    </div>
  </div>
</template>

<script>
export default {
  name: "BrandList",
  computed: {
    brands() {
      return this.$store.state.brands.all;
    }
  }
}
</script>

<style scoped>
</style>