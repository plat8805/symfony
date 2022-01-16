<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-4 px-lg-4">
    <div class="container-fluid">

      <router-link to="/" class="navbar-brand">Shopaholic</router-link>

      <button class="navbar-toggler rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">

          <li class="nav-item">
<!--            <a class="nav-link fw-normal text-uppercase text-dark" href="/">Home</a>-->
            <router-link to="/" class="nav-link fw-normal text-uppercase" exact>Home</router-link>
          </li>

          <li class="nav-item">
<!--            <a class="nav-link fw-normal text-uppercase text-dark" href="/">Shop</a>-->
            <router-link to="/shop" class="nav-link fw-normal text-uppercase" exact>Shop</router-link>
          </li>

          <li class="nav-item">
<!--            <a class="nav-link fw-normal text-uppercase text-dark" href="/">About</a>-->
            <router-link to="/about" class="nav-link fw-normal text-uppercase text-dark">About</router-link>
          </li>

          <li class="nav-item">
<!--            <a class="nav-link fw-normal text-uppercase text-dark" href="/">Contact</a>-->
            <router-link to="/contact" class="nav-link fw-normal text-uppercase text-dark">Contact</router-link>
          </li>
        </ul>

        <ul class="navbar-nav flex-row mb-2 mb-lg-0 ms-lg-5 actions-nav-menu">


        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  name: "NavbarComponent"
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