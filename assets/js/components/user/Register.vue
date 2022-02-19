<template>
  <div className="col-lg-6 mx-auto">
    <div className="bg-light rounded-pill px-4 py-3">
      <h5 className="mb-0">New account</h5>
    </div>

    <div className="p-4">
      <p className="lead">Already our customer? <router-link to="/login">Login</router-link></p>
      <p className="text-muted">With registration with us new world of fashion, fantastic discounts and much more opens
        to you! The whole process will not take you more than a minute!</p>
      <p className="text-muted">If you have any questions, please feel free to
        <router-link to="/contact">contact us</router-link>
        , our customer service center is working for you 24/7.
      </p>
      <hr className="border-bottom border-gray-6">

      <form role="form">

        <div className="mb-3">
          <label className="form-label" htmlFor="reg_email">Email</label>
          <input className="form-control" id="reg_email" type="email" name="email" v-model="email">
        </div>

        <div className="mb-3">
          <label className="form-label" htmlFor="reg_password">Password</label>
          <input className="form-control" id="reg_password" type="password" name="password" v-model="password">
        </div>

        <div className="text-center">
          <button className="btn btn-primary" type="submit" @click.prevent="register"><i className="fas fa-user me-2"></i>Register
          </button>
        </div>

      </form>
    </div>

  </div>
</template>

<script>
import {mapActions} from 'vuex';
import {AuthAction} from "@/store/types.actions";
export default {
  name: "RegisterForm",
  data() {
    return {
      email: '',
      password: '',
    }
  },
  methods: {
    ...mapActions('auth', {registerUser: AuthAction.remote.REGISTER}),
    register() {
      let data = {
        email: this.email,
        password: this.password
      };
      this.registerUser(data)
          .then(()=>{
            this.$router.push({name:'login'});
          }).catch(error=>{
        console.log('Register error: ', error);
      })
    }
  }
}
</script>


<style scoped>
</style>