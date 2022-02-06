<template>
  <div class="dropdown-menu dropdown-menu-end mt-lg-4 p-4" aria-labelledby="cartDropdown">

    <div class="dropdown-item no-hover d-flex justify-content-between px-0 pb-3" v-for="(product, index) in getProductsInCart" :key="index">

      <div class="d-flex me-2">
        <a class="d-block bg-light p-2" href="detail.html"><img :src="'/images/products/'+product.cover" alt="" width="60"></a>

        <div class="ms-2">
          <h5 class="mb-1"><router-link to="/detail" class="reset-anchor">{{product.name}}</router-link></h5>
          <p class="small text-gray-6 mb-1">Quantity: {{product.quantity}}</p>
          <h6 class="mb-0">${{product.quantity * product.price}} </h6>
        </div>
      </div>
      <a class="reset-anchor ms-4" @click="removeFromCart(product)"><i class="far fa-trash-alt"></i></a>
    </div>

    <div class="dropdown-item no-hover border-top border-bottom border-gray-3 px-0 py-2">
      <div class="d-flex justify-content-between align-items-center">
        <p class="text-gray-6 mb-0">Total</p>
        <p class="fw-bold text-primary mb-0">${{totalPrice().toFixed(2)}}</p>
      </div>
    </div>
    <div class="dropdown-item no-hover px-0 pt-3">
      <div class="row gx-2">
        <div class="col-lg-6">
          <router-link to="/cart" class="btn btn-primary w-100">View cart</router-link>
        </div>
        <div class="col-lg-6">
          <router-link to="/checkout" class="btn btn-primary w-100">Checkout</router-link></div>
      </div>
    </div>
  </div>
</template>

<script>
import {mapActions, mapGetters} from 'vuex';
import {CartAction} from "@/store/types.actions";

export default {
  name: "PopupCart",

  methods: {
    ...mapActions('cart', {
          removeProductFromCart: CartAction.REMOVE_FROM_CART
        }
    ),
    removeFromCart(item) {
      this.removeProductFromCart(item);
    },

    totalPrice() {
      return this.getProductsInCart.reduce((accomulator, item) => accomulator + item.quantity * item.price, 0);
    }
  },

  computed: {
    ...mapGetters('cart', [
      'getProductsInCart'
    ]),
  },
}
</script>

<style scoped>

</style>