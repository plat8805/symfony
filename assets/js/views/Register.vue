<template>
  <div class="shop">
    <header-section title="Customer zone" lead="Sign up" :breadcrumbs="[{url:'register', text:'Register'}]"></header-section>

    <section class="py-5">
      <div class="container py-4">
        <div class="row gy-5 gx-5">
          <register-form></register-form>
        </div>
      </div>
    </section>

  </div>
</template>

<script>
import {HeaderSection} from '@/components/layouts';
import RegisterForm from '@/components/user/Register';
export default {
  name: "Register",
  components: {
    HeaderSection,
    RegisterForm
  },
}
</script>

<style scoped>
</style>