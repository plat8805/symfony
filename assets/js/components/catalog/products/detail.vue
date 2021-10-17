<template>
  <div>
    <navbar-component></navbar-component>
    <h1>{{product.name}}</h1>
  </div>
</template>

<script>
import NavbarComponent from '@/components/layouts/navbar';

import axios from "axios";

export default {
  name: "ProductDetails",
  components: {
    NavbarComponent,
  },
  data: () => (
      {
        //title: 'Products Catalog',
        product:{}
      }
  ),
  mounted() {
    this.getProduct();
  },
  methods:{
    async getProduct(){
      this.product = {};
      const response = await this.fetchProduct(this.$route.params.id);
      this.product = response.data;
    },
    fetchProduct(id){
      return axios({
        method: 'get',
        url: `/api/products/${id}`
      })
    }
  }
}
</script>


<style scoped>

</style>