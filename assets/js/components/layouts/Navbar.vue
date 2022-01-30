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

            <li class="nav-item dropdown mx-2 mx-lg-0 px-3 px-lg-0 d-none d-lg-block"><a class="nav-link position-relative dropdown-toggle no-caret" id="cartDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <svg class="svg-icon">
                <use xlink:href="#cart"> </use>
              </svg><span class="cart-no">1</span></a>
              <div class="dropdown-menu dropdown-menu-end mt-lg-4 p-4" aria-labelledby="cartDropdown">
                <div class="dropdown-item no-hover d-flex justify-content-between px-0 pb-3">
                  <div class="d-flex me-2"><a class="d-block bg-light p-2" href="detail.html"><img src="../../assets/p1.jpg" alt="" width="60"></a>
                    <div class="ms-2">
                      <h5 class="mb-1"><a class="reset-anchor" href="detail.html">Heather Gray Hoodie</a></h5>
                      <p class="small text-gray-6 mb-1">Quantity: 1</p>
                      <h6 class="mb-0">$75.00 </h6>
                    </div>
                  </div><a class="reset-anchor ms-4" href="#"><i class="far fa-trash-alt"></i></a>
                </div>
                <div class="dropdown-item no-hover border-top border-bottom border-gray-3 px-0 py-2">
                  <div class="d-flex justify-content-between align-items-center">
                    <p class="text-gray-6 mb-0">Total</p>
                    <p class="fw-bold text-primary mb-0">$75.00</p>
                  </div>
                </div>
                <div class="dropdown-item no-hover px-0 pt-3">
                  <div class="row gx-2">
                    <div class="col-lg-6">
                      <router-link to="/cart" class="btn btn-primary w-100">View cart</router-link>
                    </div>
                    <div class="col-lg-6"><a class="btn btn-primary w-100" href="checkout1.html">Checkout</a></div>
                  </div>
                </div>
              </div>
            </li>



          </ul>
        </div>
      </div>
    </nav>
  </div>
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