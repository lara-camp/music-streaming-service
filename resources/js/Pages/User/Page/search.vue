<template>
  <div class="p-8">
    <button
      type="button"
      class="text-white text-2xl font-semibold hover:underline cursor-pointer pb-5 px-4"
    >
      Browse All
    </button>

    <form class="flex items-center px-4 pb-5">
      <label for="simple-search" class="sr-only">Search</label>
      <div class="relative w-full">
        <div
          class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
        >
          <font-awesome-icon
            :icon="'fa ' + 'fa-music'"
            style="color: #bbb; width: 20px; height: 20px"
          />
        </div>
        <input
          type="text"
          id="simple-search"
          class="bg-black border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2"
          placeholder="Search ......"
          required
        />
      </div>
      <button
        type="submit"
        class="p-2 ml-2 text-sm font-medium text-white bg-black rounded-lg border border-gray-600 focus:ring-4 focus:outline-none focus:ring-blue-300"
      >
        <font-awesome-icon
          :icon="'fa ' + 'fa-magnifying-glass'"
          style="width: 20px; height: 20px"
        />
      </button>
    </form>

    <div class="py-1.5"></div>

    <div class="flex items-center">
      <ImgCard
        image="https://picsum.photos/id/30/300/300"
        title="Title is here"
        subTitle="Subtitle is here"
      />
      <ImgCard
        class="md:block hidden"
        image="https://picsum.photos/id/65/300/300"
        title="Title is here"
        subTitle="Subtitle is here"
      />
      <ImgCard
        image="https://picsum.photos/id/45/300/300"
        title="Title is here"
        subTitle="Subtitle is here"
      />
      <ImgCard
        class="lg:block hidden"
        image="https://picsum.photos/id/67/300/300"
        title="Title is here"
        subTitle="Subtitle is here"
      />
      <ImgCard
        class="xl:block hidden"
        image="https://picsum.photos/id/100/300/300"
        title="Title is here"
        subTitle="Subtitle is here"
      />
    </div>
  </div>
</template>

<script>
import ImgCard from "../Components/ImgCard.vue";

export default {
  components: {
    ImgCard,
  },
  props: {},
};
</script>
