<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div>{{ message }}</div>
        <div class="card">
          <div class="card-header">Example Component</div>

          <div class="card-body">I'm an example component.</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref, onMounted } from 'vue';

const message = ref('Hello Laravel Vue 3');

onMounted(() => {
  console.log('Component mounted.');
});
</script>
