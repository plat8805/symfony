<template>
  <!-- Checkout Forms-->
  <section class="py-5">
    <div class="container py-5">
      <div class="row gy-5 gx-5">
        <div class="col-lg-8">

          <ul class="nav nav-pills rounded-lg-pill flex-column flex-lg-row nav-fill pills-lg-rounded list-separated-lg-secondary mb-5">
            <li class="nav-item my-1 my-lg-0"><a class="nav-link py-3 small text-uppercase active" href="checkout1.html">Address</a></li>
            <li class="nav-item my-1 my-lg-0"><a class="nav-link py-3 small text-uppercase disabled" href="#">Delivery Method </a></li>
            <li class="nav-item my-1 my-lg-0"><a class="nav-link py-3 small text-uppercase disabled" href="#">Payment Method </a></li>
            <li class="nav-item my-1 my-lg-0"><a class="nav-link py-3 small text-uppercase disabled" href="#">Order Review</a></li>
          </ul>

          <div id="address">
            <form action="#">
              <!-- Invoice Address-->
              <div class="bg-light rounded-pill px-4 py-3">
                <h6 class="mb-0">Invoice address                    </h6>
              </div>
              <div class="row gy-3 py-5">
                <div class="col-md-6">
                  <label class="form-label" for="firstname">First Name</label>
                  <input class="form-control" id="firstname" type="text" name="first-name" placeholder="Enter you first name">
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="lastname">Last Name</label>
                  <input class="form-control" id="lastname" type="text" name="last-name" placeholder="Enter your last name">
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="email">Email Address</label>
                  <input class="form-control" id="email" type="email" name="email" placeholder="enter your email address">
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="street">Street</label>
                  <input class="form-control" id="street" type="text" name="address" placeholder="Your street name">
                </div>
                <div class="col-md-3">
                  <label class="form-label" for="city">City</label>
                  <input class="form-control" id="city" type="text" name="city" placeholder="Your city">
                </div>
                <div class="col-md-3">
                  <label class="form-label" for="zip">ZIP</label>
                  <input class="form-control" id="zip" type="text" name="zip" placeholder="ZIP code">
                </div>
                <div class="col-md-3">
                  <label class="form-label" for="state">State</label>
                  <input class="form-control" id="state" type="text" name="state" placeholder="Your state">
                </div>
                <div class="col-md-3">
                  <label class="form-label" for="country">Country</label>
                  <input class="form-control" id="country" type="text" name="country" placeholder="Your country">
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="phone-number">Phone Number</label>
                  <input class="form-control" id="phone-number" type="tel" name="phone-number" placeholder="Your phone number">
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="company">Company</label>
                  <input class="form-control" id="company" type="text" name="company" placeholder="Your company name">
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" id="another-address" type="checkbox" onclick="toggleAddress()">
                    <label class="form-check-label" for="another-address" data-bs-toggle="collapse" href="#shippingAddress" role="button" aria-expanded="false" aria-controls="shippingAddress">Use different shipping address</label>
                  </div>
                </div>
              </div>
              <!-- /Invoice Address-->
              <!-- Shippping Address-->
              <div class="collapse" id="shippingAddress">
                <div class="bg-light rounded-pill px-4 py-3">
                  <h6 class="mb-0">Shipping address</h6>
                </div>
                <div class="row gy-3 py-5">
                  <div class="col-md-6">
                    <label class="form-label" for="shipping_firstname">First Name</label>
                    <input class="form-control" id="shipping_firstname" type="text" name="shipping_first-name" placeholder="Enter you first name">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="shipping_lastname">Last Name</label>
                    <input class="form-control" id="shipping_lastname" type="text" name="shipping_last-name" placeholder="Enter your last name">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="shipping_email">Email Address</label>
                    <input class="form-control" id="shipping_email" type="email" name="shipping_email" placeholder="enter your email address">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="shipping_street">Street</label>
                    <input class="form-control" id="shipping_street" type="text" name="shipping_address" placeholder="Your street name">
                  </div>
                  <div class="col-md-3">
                    <label class="form-label" for="shipping_city">City</label>
                    <input class="form-control" id="shipping_city" type="text" name="shipping_city" placeholder="Your city">
                  </div>
                  <div class="col-md-3">
                    <label class="form-label" for="shipping_zip">ZIP</label>
                    <input class="form-control" id="shipping_zip" type="text" name="shipping_zip" placeholder="ZIP code">
                  </div>
                  <div class="col-md-3">
                    <label class="form-label" for="shipping_state">State</label>
                    <input class="form-control" id="shipping_state" type="text" name="shipping_state" placeholder="Your state">
                  </div>
                  <div class="col-md-3">
                    <label class="form-label" for="shipping_country">Country</label>
                    <input class="form-control" id="shipping_country" type="text" name="shipping_country" placeholder="Your country">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="shipping_phone-number">Phone Number</label>
                    <input class="form-control" id="shipping_phone-number" type="tel" name="shipping_phone-number" placeholder="Your phone number">
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="shipping_company">Company</label>
                    <input class="form-control" id="shipping_company" type="text" name="shipping_company" placeholder="Your company name">
                  </div>
                </div>
              </div>
              <!-- /Shipping Address-->
              <div class="d-flex justify-content-between flex-column flex-lg-row"><a class="btn btn-outline-secondary px-sm-5 my-1" href="cart.html"> <i class="fas fa-angle-left me-2"></i>Back to basket</a><a class="btn btn-primary px-sm-5 my-1" href="checkout2.html">Choose delivery method<i class="fas fa-angle-right ms-2"></i></a></div>
            </form>
          </div>
        </div>

        <div class="col-lg-4">
          <order-summary></order-summary>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import OrderSummary from '@/components/order/OrderSummary';

export default {
  name: "CheckoutForm",
  components: {
    OrderSummary,
  },
}
</script>

<style scoped>

</style>