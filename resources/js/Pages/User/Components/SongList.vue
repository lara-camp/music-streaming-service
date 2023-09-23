<template>
  <li
    v-for="track in tracks"
    :key="track.id"
    class="flex items-center justify-between rounded-md hover:bg-[#2A2929]"
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
      <div class="text-xs mx-5 text-gray-400">1:02</div>
    </div>
  </li>
</template>
<script>
export default {
  props: { tracks: Array },
};
</script>
