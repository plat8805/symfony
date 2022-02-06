<template>
  <div className="col-lg-6">
    <div className="bg-light rounded-pill px-4 py-3">
      <h5 className="mb-0">New account</h5>
    </div>
    <div className="p-4">
      <p className="lead">Not our registered customer yet?</p>
      <p className="text-muted">With registration with us new world of fashion, fantastic discounts and much more opens
        to you! The whole process will not take you more than a minute!</p>
      <p className="text-muted">If you have any questions, please feel free to
        <router-link to="/contact">contact us</router-link>
        , our customer service center is working for you 24/7.
      </p>
      <hr className="border-bottom border-gray-6">
      <form action="customer-orders" method="get">
        <div className="mb-3">
          <label className="form-label" htmlFor="name">Name</label>
          <input className="form-control" id="name" type="text">
        </div>
        <div className="mb-3">
          <label className="form-label" htmlFor="reg_email">Email</label>
          <input className="form-control" id="reg_email" type="text">
        </div>
        <div className="mb-3">
          <label className="form-label" htmlFor="reg_password">Password</label>
          <input className="form-control" id="reg_password" type="password">
        </div>
        <div className="text-center">
          <button className="btn btn-primary" type="submit"><i className="fas fa-user me-2"></i>Register</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  name: "RegisterForm"
}
</script>

<style scoped>

</style>