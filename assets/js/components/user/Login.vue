<template>
  <div class="col-lg-6">
    <div class="bg-light rounded-pill px-4 py-3">
      <h5 class="mb-0">Login</h5>
    </div>
    <div class="p-4">
      <p class="lead">Already our customer?</p>
      <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
      <hr class="border-bottom border-gray-6">
      <form action="customer-orders" method="get">
        <div class="mb-3">
          <label class="form-label" for="email">Email</label>
          <input class="form-control" id="email" type="text">
        </div>
        <div class="mb-3">
          <label class="form-label" for="password">Password</label>
          <input class="form-control" id="password" type="password">
        </div>
        <div class="text-center">
          <button class="btn btn-primary" type="submit"><i class="fas fa-sign-in-alt me-2"></i>Log in</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  name: "LoginForm"
}
</script>

<style scoped>

</style>