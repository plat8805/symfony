<template>
  <div class="row d-flex align-items-center bord">
    <div class="col-5">
      <div class="d-flex align-items-center">
        <img v-if="product.image" class="img-fluid" :src=" require('../../assets/' + product.image)"
             alt="product"
             width="75">
        <div class="ms-3"><a href="detail.html">
          <h5 class="mb-0 text-dark fw-normal">Loose Oversised Shirt</h5><span class="text-muted">Size: Large</span></a></div>
      </div>
    </div>
    <div class="col-2"><span>$65.00</span></div>
    <div class="col-2">
      <div class="d-flex align-items-center">
        <div class="quantity d-flex align-items-center me-4">
          <div class="dec-btn" onclick="decrease(this)">-</div>
          <input class="quantity-no" type="text" value="1">
          <div class="inc-btn" onclick="increase(this)">+</div>
        </div>
      </div>
    </div>
    <div class="col-2"><span>$325.00</span></div>
    <div class="col-1 text-center">
      <button class="delete btn btn-link text-dark p-0"><i class="fas fa-trash-alt"></i></button>
    </div>
  </div>
</template>

<script>
export default {
  name: "CartItem",
  props: {
    product: {
      type: Object,
      default() {
        return {}
      }
    }
  },

}
</script>

<style scoped>

.quantity .inc-btn,
.quantity .dec-btn {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  line-height: 30px;
  border: 1px solid #999;
  text-align: center;
  cursor: pointer;
  -moz-user-select: none !important;
  -ms-user-select: none !important;
  user-select: none !important;
  -webkit-user-select: none !important
}
.quantity input {
  width: 30px;
  height: 30px;
  border: none;
  text-align: center;
  color: #333;
  font-weight: 400;
  line-height: 30px;
  outline: none
}
@media (max-width: 991.98px) {
  .cart-outer {
    overflow: auto
  }
}
@media (max-width: 991.98px) {
  .cart-inner {
    min-width: 991px
  }
}

</style>