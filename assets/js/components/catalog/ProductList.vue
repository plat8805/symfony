<template>
  <div class="col-xl-9 col-lg-8">
    <div class="row gy-5 mb-5">
      <div class="item col-xl-4 col-md-6" v-for="product in products" v-bind:key="product.name">
        <product-item :product="product"></product-item>
      </div>
    </div>
  </div>
</template>

<script>
import ProductItem from './ProductItem';
export default {
  name: "ProductList",
  data() {
    return {
      products: [
        {name: 'Elegant Lake', price: '40.00', 'category': 'Men Wear', 'image': 'p1.jpg', 'ribbon': 'Sale'},
        {name: 'Elegant Blue', price: '40.00', 'category': 'Men Wear', 'image': 'p2.jpg', 'ribbon': ''},
        {name: 'Elegant Black', price: '40.00', 'category': 'Men Wear', 'image': 'p3.jpg', 'ribbon': 'New'},
      ],
    }
  },
  components: {
    ProductItem,
  },
}

</script>

<style scoped>

</style>