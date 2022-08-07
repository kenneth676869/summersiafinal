<template>
  
  <h1 class="text-center">Home</h1><br>
  <p class="d-flex justify-content-center">{{ message }}

    <button @click="decrement" class="">-</button>
    &nbsp;{{ number }}&nbsp;
    <button @click="increment">+</button>

  </p>

</template>



<script setup>
import {ref} from 'vue'
import Layout from '../Shared/Layout.vue'

const message = "Hello I Am an Inertia App";

const number = ref(0)

function increment() {
  number.value++;
}

function decrement() {
  number.value--;
}

</script>

<script>
  export default {
    layout: Layout
  }
</script>

<style>
p{
  color: rgb(229, 255, 0);
  font-size: 30px;
}
h1 {
  color: white;
}
</style>



