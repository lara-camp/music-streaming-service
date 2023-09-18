<template>
    <Layout>
      <Head title="User Home" />
      <h1 class="text-3xl font-bold underline">User home</h1>
      <p>Hello {{ name }}, welcome to your first Inertia app!</p>
    </Layout>
  </template>
  
  <!-- <script setup>
  import Layout from './../Layout.vue'
  import { Head } from '@inertiajs/vue3'
  
  defineProps({ name: String })
  </script> -->

<script>
import Layout from './../Layout.vue';
import { Head } from '@inertiajs/vue3'

export default {
    components: {
        Layout, Head
    },
    props: {
        name : String,
    }
}
</script>