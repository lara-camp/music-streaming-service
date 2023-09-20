<template>
  <li class="flex items-center justify-start pb-4 cursor-pointer">
    <font-awesome-icon :icon="'fa ' + aweIcon" style="color: #f7f7f8" />
    <div class="text-gray-400 font-semibold text-[14px] ml-4">
      <span>{{ linkLabel }}</span>
    </div>
  </li>
</template>

<script>
export default {
  components: {},
  props: {
    linkLabel: String,
    aweIcon: String,
  },
};
</script>

<style>
</style>