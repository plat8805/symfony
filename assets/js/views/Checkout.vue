<template>

  <div class="checkout">
    <header-section title="Checkout" lead="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt." :breadcrumbs="[{url:'checkout', text:'Checkout cart'},]"></header-section>
    <section class="py-5">
      <div class="container py-4">
        <div class="row gx-5 gy-5">
          <checkout-form></checkout-form>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import {HeaderSection} from '@/components/layouts';
import CheckoutForm from "@/components/order/CheckoutForm";

export default {
  name: "Checkout",
  components: {
    HeaderSection,
    CheckoutForm
  }
}
</script>

<style scoped>

</style>