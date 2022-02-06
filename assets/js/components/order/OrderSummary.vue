<template>
  <div class="card rounded-0">
    <div class="card-body px-4 py-5">
      <h6 class="text-uppercase">Order Summary</h6>
      <p class="fw-normal text-muted">Shipping and additional costs are calculated based on values you have entered</p>
      <ul class="list-unstyled mb-0">
        <li class="d-flex justify-content-between py-3 border-bottom"><span>Order Subtotal </span><strong class="fw-normal">$390.00</strong></li>
        <li class="d-flex justify-content-between py-3 border-bottom"><span>Shipping and handling</span><strong class="fw-normal">$10.00</strong></li>
        <li class="d-flex justify-content-between py-3 border-bottom"><span>Tax</span><strong class="fw-normal">$0.00</strong></li>
        <li class="d-flex justify-content-between py-3"><span>Total</span><strong class="text-primary h5 mb-0">$400.00</strong></li>
      </ul>
    </div>
  </div>
</template>

<script>

export default {
  name: "OrderSummary"
}
</script>

<style scoped>

</style>