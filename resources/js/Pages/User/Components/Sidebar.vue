<template>
  <div id="SideNav" class="h-[100%] p-6 w-[240px] fixed z-50 bg-black">
    <div class="my-8"></div>
    <ul>
      <Link :href="changeRoute('top')" class="ml-[0.5px]">
        <NavLink :linkLabel="$t('message.home')" aweIcon="fa-house"></NavLink>
      </Link>
      <Link :href="changeRoute('search')" class="ml-[0.5px]">
        <NavLink
          :linkLabel="$t('message.search')"
          aweIcon="fa-magnifying-glass"
        ></NavLink>
      </Link>
      <Link :href="changeRoute('library')" class="ml-[0.5px]">
        <NavLink :linkLabel="$t('message.library')" aweIcon="fa-book"></NavLink>
      </Link>
      <Link :href="changeRoute('liked')" class="ml-[0.5px]">
        <NavLink :linkLabel="$t('message.liked')" aweIcon="fa-star"></NavLink>
      </Link>
      <div class="py-3.5"></div>
    </ul>
    <div class="border-b border-b-gray-700"></div>
    <ul>
      <li class="font-semibold text-[13px] mt-3 text-gray-300 hover:text-white">
        My Playlist #1
      </li>
    </ul>
  </div>
</template>

<script>
import NavLink from "./NavLink.vue";

export default {
  components: { NavLink },
  methods: {
    changeRoute(routeName) {
      const currentUrl = "/" + this.$i18n.locale;
      return routeName == "top" ? currentUrl : currentUrl + "/" + routeName;
    },
  },
};
</script>

<style>
</style>
