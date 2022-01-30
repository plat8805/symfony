<template>
  <div>
    <header-section title="Contact Page" lead="Contact Page..." :breadcrumbs="[{url:'contact', text:'Contact Us'}]"></header-section>
  </div>
</template>
<script>

import {HeaderSection} from "@/components/layouts";

export default {
  name: "Contact",
  components: {
    HeaderSection,
  }
}
</script>

<style scoped>

</style>