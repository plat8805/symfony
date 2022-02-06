<template>
  <div class="shop">
    <header-section title="Customer zone" lead="Customer zone" :breadcrumbs="[{url:'customer-auth', text:'Customer zone'}]"></header-section>

    <section class="py-5">
      <div class="container py-4">
        <div class="row gy-5 gx-5">

          <login-form></login-form>
          <register-form></register-form>

        </div>
      </div>
    </section>

  </div>
</template>

<script>

import {HeaderSection} from '@/components/layouts';
import LoginForm from '@/components/user/Login';
import RegisterForm from '@/components/user/Register';

export default {
  name: "Auth",
  components: {
    HeaderSection,
    LoginForm,
    RegisterForm
  },
}
</script>

<style scoped>

</style>