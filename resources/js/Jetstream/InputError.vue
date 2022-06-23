<template>
  <div v-show="message" class="alert alert-danger my-2" role="alert">
    <i class="bi bi-exclamation-triangle me-2"></i>{{message}}
  </div>
</template>

<script>
  import { defineComponent } from 'vue'

  export default defineComponent({
    props: ['message']
  })
</script>
