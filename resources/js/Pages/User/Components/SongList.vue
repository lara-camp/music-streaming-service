<template>
  <li
    v-for="(track, index) in tracks"
    :key="track.id"
    class="flex items-center justify-between rounded-md hover:bg-[#2A2929] relative"
    @mouseenter="setIsHover(index, true)"
    @mouseleave="setIsHover(index, false)"
  >
    <div class="flex items-center w-full py-1.5">
      <div class="text-white font-semibold w-[40px] ml-5">
        <span
          :class="{
            'text-green-500': currentTrack && currentTrack.name === track.name,
          }"
        >
          {{ track.id }}
        </span>
      </div>
      <div>
        <div class="text-white font-semibold">
          {{ track.name }}
        </div>
        <div class="text-sm font-semibold text-gray-400">Blackpink</div>
      </div>
    </div>
    <div class="flex items-center">
      <button type="button" v-if="isHoverState[index]">
        <font-awesome-icon
          :icon="'fa ' + 'fa-heart'"
          style="color: #1bd760; width: 25px; height: 25px"
        />
      </button>
      <button
        type="button"
        @click="createPlaylist(index)"
        class="ms-5"
        v-if="isHoverState[index]"
      >
        <font-awesome-icon
          :icon="'fa ' + 'fa-plus'"
          style="color: #bbb; width: 20px; height: 20px"
        />
      </button>

      <div class="text-xs mx-5 text-gray-400">1:02</div>
    </div>
    <div
      v-if="isPlaylist[index]"
      class="text-white absolute z-10 right-10 top-10"
    >
      <ul
        class="py-2 block w-full border-gray-200 bg-black rounded-md text-sm text-white"
      >
        <li v-if="isNewPlaylist[index]" class="text-white px-6">
          <p class="text-lg text-center pb-3">New Playlist</p>
          <form action="" class="w-full">
            <div class="w-full">
              <input
                type="text"
                name="title"
                id="title"
                placeholder="Title"
                class="w-full p-1 text-md border border-gray-500 rounded-sm bg-black text-white"
              />
            </div>

            <div class="pt-4 flex justify-between">
              <button
                @click="createNewPlaylist(index)"
                class="rounded-md uppercase block p-1 text-sm bg-gray-500 hover:bg-gray-700 focus:outline-none"
              >
                cancel
              </button>
              <button
                @click="createNewPlaylist(index)"
                class="rounded-md uppercase block p-1 text-sm bg-indigo-500 hover:bg-indigo-700 focus:outline-none"
              >
                create
              </button>
            </div>
          </form>
        </li>
        <div v-else>
          <li
            class="hover:bg-[#2A2929] w-full cursor-pointer px-6 py-2"
            @click="createNewPlaylist(index)"
          >
            New Playlist
            <font-awesome-icon
              :icon="'fa ' + 'fa-plus'"
              style="color: #bbb; width: 12px; height: 12px"
              class="border border-white rounded-md ms-3"
            />
          </li>
          <li
            @click="createPlaylist(index)"
            v-for="playlist in playlists"
            :key="playlist.id"
            class="hover:bg-[#2A2929] w-full cursor-pointer px-6 py-2"
          >
            {{ playlist.name }}
          </li>
        </div>
      </ul>
    </div>
  </li>
</template>
<script>
export default {
  data() {
    return {
      isHoverState: Array(this.tracks.length).fill(false),
      isPlaylist: Array(this.tracks.length).fill(false),
      isNewPlaylist: Array(this.tracks.length).fill(false),
      playlists: [
        {
          id: 1,
          name: "first",
        },
        {
          id: 2,
          name: "second",
        },
        {
          id: 3,
          name: "third",
        },
      ],
    };
  },
  props: { tracks: [] },
  methods: {
    setIsHover(index, value) {
      this.isHoverState[index] = value;
    },
    createPlaylist(index) {
      this.isPlaylist[index] = !this.isPlaylist[index];
    },
    createNewPlaylist(index) {
      this.isNewPlaylist[index] = !this.isNewPlaylist[index];
    },
  },
};
</script>
