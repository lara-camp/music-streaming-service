<template>
  <div class="p-8 overflow-x-hidden">
    <button
      type="button"
      class="text-white text-2xl font-semibold hover:underline cursor-pointer"
    >
      {{ albumDetail.name }}
    </button>

    <div class="py-1.5"></div>
    <div class="flex items-center w-full relative h-full">
      <img width="140" :src="albumDetail.albumCover" />

      <div class="w-full ml-5">
        <div
          style="font-size: 33px"
          class="text-white absolute w-full hover:underline cursor-pointer top-0 font-bosemiboldld"
        >
          {{ albumDetail.name }}
        </div>

        <div class="text-gray-300 text-[13px] flex">
          <div class="flex">Album</div>
          <div class="ml-2 flex">
            <div class="circle mt-2 mr-2" />
            <span class="-ml-0.5">{{ albumDetail.releaseYear }}</span>
          </div>
          <div class="ml-2 flex">
            <div class="circle mt-2 mr-2" />
            <span class="-ml-0.5">{{ albumDetail.tracks.length }}songs</span>
          </div>
        </div>

        <div
          class="absolute flex gap-4 items-center justify-start bottom-0 mb-1.5"
        >
          <button class="">
            <font-awesome-icon
              :icon="'fa ' + 'fa-circle-play'"
              style="color: #f7f7f8; width: 30px; height: 30px"
            />
          </button>
          <button class="">
            <font-awesome-icon
              :icon="'fa ' + 'fa-heart'"
              style="color: #1bd760; width: 25px; height: 25px"
            />
          </button>
          <button class="">
            <font-awesome-icon
              :icon="'fa ' + 'fa-ellipsis'"
              style="color: #f7f7f8; width: 25px; height: 25px"
            />
          </button>
        </div>
      </div>
    </div>

    <div class="mt-6"></div>
    <div class="flex items-center justify-between px-5 pt-2">
      <div class="flex items-center justify-between text-gray-400">
        <div class="mr-7">#</div>
        <div class="text-sm">Title</div>
      </div>
      <div>
        <font-awesome-icon
          :icon="'fa ' + 'fa-clock'"
          style="color: #f7f7f8; width: 15px; height: 15px"
        />
      </div>
    </div>
    <div class="border-b border-b-[#2A2A2A] mt-2"></div>
    <div class="mb-4"></div>
    <ul class="w-full">
      <SongList :tracks="albumDetail.tracks" />
    </ul>
  </div>
</template>

<script>
import SongList from "../Components/SongList.vue";
export default {
  data() {
    return {
      albumDetail: {
        name: "The Album",
        albumCover: "https://picsum.photos/id/30/300/300",
        releaseYear: "2014",
        tracks: [
          {
            id: 1,
            name: "How You Like That",
          },
          {
            id: 2,
            name: "You Never Know",
          },
          {
            id: 3,
            name: "STAY",
          },
        ],
      },
    };
  },
  components: {
    SongList,
  },
};
</script>

<style scoped>
.circle {
  width: 4px;
  height: 4px;
  background-color: rgb(189, 189, 189);
  border-radius: 100%;
}
</style>
