<template>
  <main>
    <div>
      <Header />
      <Sidebar />
    </div>
  </main>
  <article>
    <div
      class="fixed right-0 top-0 w-[calc(100%-240px)] overflow-auto h-full bg-gradient-to-b from-[#1C1C1C] to-black"
    >
      <div class="mt-[70px]"></div>
      <slot />
      <div class="mb-[100px]"></div>
    </div>
  </article>
</template>

<script>
import Header from "../Components/Header.vue";
import Sidebar from "../Components/Sidebar.vue";
export default {
  components: {
    Header,
    Sidebar,
  },
  props: {},
};
</script>