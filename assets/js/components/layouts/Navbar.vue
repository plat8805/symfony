<template>
  <div>
    <svg width="0" height="0" class="hidden">
      <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="cart">
        <title>Cart</title>
        <desc>A line styled icon from Orion Icon Library.</desc>
        <path data-name="layer2" fill="none" stroke="#202020" stroke-miterlimit="10" d="M2 6h10l10 40h32l8-24H16" stroke-linejoin="round" stroke-linecap="round" style="stroke:var(--layer1, #202020)"></path>
        <circle data-name="layer1" cx="23" cy="54" r="4" fill="none" stroke="#202020" stroke-miterlimit="10" stroke-linejoin="round" stroke-linecap="round" style="stroke:var(--layer1, #202020)"></circle>
        <circle data-name="layer1" cx="49" cy="54" r="4" fill="none" stroke="#202020" stroke-miterlimit="10" stroke-linejoin="round" stroke-linecap="round" style="stroke:var(--layer1, #202020)"></circle>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="user">
        <title>User</title>
        <desc>A line styled icon from Orion Icon Library.</desc>
        <path data-name="layer1" d="M46 26c0 6.1-3.4 11.5-7 14.8V44c0 2 1 5.1 11 7a15.5 15.5 0 0 1 12 11H2a13.4 13.4 0 0 1 11-11c10-1.8 12-5 12-7v-3.2c-3.6-3.3-7-8.6-7-14.8v-9.6C18 6 25.4 2 32 2s14 4 14 14.4z" fill="none" stroke="#202020" stroke-miterlimit="10" stroke-linejoin="round" stroke-linecap="round" style="stroke:var(--layer1, #202020)"></path>
      </symbol>
    </svg>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-4 px-lg-4">
      <div class="container-fluid">

        <router-link to="/" class="navbar-brand">Shopaholic</router-link>

        <button class="navbar-toggler rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">

            <li class="nav-item">
              <router-link to="/" class="nav-link fw-normal text-uppercase" exact>Home</router-link>
            </li>

            <li class="nav-item">
              <router-link to="/shop" class="nav-link fw-normal text-uppercase" exact>Shop</router-link>
            </li>

            <li class="nav-item">
              <router-link to="/about" class="nav-link fw-normal text-uppercase text-dark">About</router-link>
            </li>

            <li class="nav-item">
              <router-link to="/contact" class="nav-link fw-normal text-uppercase text-dark">Contact</router-link>

            </li>
          </ul>

          <ul class="navbar-nav flex-row mb-2 mb-lg-0 ms-lg-5 actions-nav-menu">


            <li class="nav-item mx-2 mx-lg-0 px-lg-0">
              <router-link to="/customer-auth" class="nav-link">
                <svg class="svg-icon">
                  <use xlink:href="#user"> </use>
                </svg>
              </router-link>
            </li>

            <li class="nav-item dropdown mx-2 mx-lg-0 px-3 px-lg-0 d-none d-lg-block">

              <a class="nav-link position-relative dropdown-toggle no-caret" id="cartDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <svg class="svg-icon">
                  <use xlink:href="#cart"> </use>
                </svg>
                <span class="cart-no">{{numItems}}</span>
              </a>
              <popup-cart></popup-cart>

            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
import {mapActions, mapGetters} from 'vuex';
import PopupCart from "../cart/PopupCart";
export default {
  name: "NavbarComponent",
  components: {
    PopupCart
  },
  computed: {
    ...mapGetters('cart', ['getCartItemsAmount']),
    numItems() {
      return this.getCartItemsAmount
    },
  },
  methods: {
  }
}
</script>

<style scoped>
nav li a:hover,
nav li a.active,
nav li a.exact-active{
  color: #9055A2 !important;
  cursor: pointer;
  font-weight: bolder;
}
</style>