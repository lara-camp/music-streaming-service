<template>
  <div
    id="TopNav"
    class="w-[calc(100%-240px)] h-[60px] fixed right-0 z-20 bg-[#101010] bg-opacity-80 flex items-center justify-between"
  >
    <div class="flex items-center ml-6">
      <button
        type="button"
        class="rounded-full bg-black p-[1px] cursor-pointer"
      >
        <!-- <ChevronLeft fillColor="#FFFFFF" :size="30" /> -->
      </button>
      <button
        type="button"
        class="rounded-full bg-black p-[1px] hover:bg-[#] ml-4 cursor-pointer"
      >
        <!-- <ChevronRight fillColor="#FFFFFF" :size="30" /> -->
      </button>
    </div>

    <button
      class="bg-black hover:bg-[#282828] rounded-full p-0.5 mr-8 mt-0.5 cursor-pointer"
    >
      <div class="flex items-center">
        <div>
          <button
            type="button"
            class="text-white hover:underline cursor-pointer px-4"
            @click="changeLocale('en')"
          >
            English
          </button>
          <button
            type="button"
            class="text-white hover:underline cursor-pointer px-4"
            @click="changeLocale('my')"
          >
            မြန်မာ
          </button>
        </div>
        <div class="">
          <Link :href="changeRoute('login', { type: 'signup' })">
            <p class="text-white inline mr-3">Sign Up</p>
          </Link>
          <Link :href="changeRoute('login', { type: 'signin' })">
            <p class="text-white inline mr-3">Sign In</p>
          </Link>
          <Link method="post" as="button" :href="route('user.logout')">
            <p class="text-white inline mr-3">Sign Out</p>
          </Link>
        </div>
        <img
          class="rounded-full"
          width="27"
          src="https://yt3.ggpht.com/e9o-24_frmNSSVvjS47rT8qCHgsHNiedqgXbzmrmpsj6H1ketcufR1B9vLXTZRa30krRksPj=s88-c-k-c0x00ffffff-no-rj-mo"
        />
        <div class="text-white text-[14px] ml-1.5 font-semibold">
          John Weeks Dev
        </div>
        <!-- <ChevronDown v-if="!openMenu" @click="openMenu = true" fillColor="#FFFFFF" :size="25" />
                    <ChevronUp v-else @click="openMenu = false" fillColor="#FFFFFF" :size="25" /> -->
      </div>
    </button>

    <span
      v-if="false"
      class="fixed w-[190px] bg-[#282828] shadow-2xl z-50 rounded-sm top-[52px] right-[35px] p-1 cursor-pointer"
    >
      <ul class="text-gray-200 font-semibold text-[14px]">
        <li class="px-3 py-2.5 hover:bg-[#3E3D3D] border-b border-b-gray-600">
          Profile
        </li>
        <li class="px-3 py-2.5 hover:bg-[#3E3D3D]">Log out</li>
      </ul>
    </span>
  </div>
</template>

<script>
export default {
  methods: {
    changeLocale(locale) {
      this.$i18n.locale = locale;
    },
    changeRoute(routeName, params) {
      return "/" + this.$i18n.locale + "/" + routeName + "?type=" + params.type;
    },
  },
};
</script>

<style>
</style>
