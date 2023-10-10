<template>
  <Link :href="changeRoute('albumDetail')">
    <div class="relative group">
      <div
        class="bg-[#111111] p-4 rounded-md m-2 hover:bg-[#252525] cursor-pointer"
      >
        <img class="rounded-md" :src="image" alt="" />
        <div class="text-white pt-4 font-semibold text-[17px]">{{ title }}</div>
        <div class="text-gray-400 pt-1 pb-3 text-[14px]">{{ subTitle }}</div>
        <button
          class="hidden absolute inset-y-0 right-10 hover:scale-105 group-hover:block"
        >
          <font-awesome-icon
            :icon="'fa ' + 'fa-play'"
            class="text-black p-[14px] w-[19px] h-[19px] rounded-full bg-[#1bd760]"
          />
        </button>
      </div>
    </div>
  </Link>
</template>

<script>
export default {
  props: {
    image: String,
    title: String,
    subTitle: String,
  },
  methods: {
    changeRoute(routeName) {
      return "/" + this.$i18n.locale + "/album/detail";
    },
  },
};
</script>

<style>
</style>
