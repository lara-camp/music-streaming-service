<template>
  <Head title="Soul" />
  <div class="p-8">
    <button
        type="button"
        class="text-white text-2xl font-semibold hover:underline cursor-pointer"
    >
        Your Library
    </button>

    <div class="py-1.5"></div>

    <div class="flex items-center">
        <ImgCard image="https://picsum.photos/id/30/300/300" title="Title is here" subTitle="Subtitle is here" />
        <ImgCard class="md:block hidden" image="https://picsum.photos/id/65/300/300" title="Title is here" subTitle="Subtitle is here" />
        <ImgCard image="https://picsum.photos/id/45/300/300" title="Title is here" subTitle="Subtitle is here" />
        <ImgCard class="lg:block hidden" image="https://picsum.photos/id/67/300/300" title="Title is here" subTitle="Subtitle is here" />
        <ImgCard class="xl:block hidden" image="https://picsum.photos/id/100/300/300" title="Title is here" subTitle="Subtitle is here" />
    </div>
</div>
</template>

<script>
import ImgCard from '../Components/ImgCard.vue';

export default {
components: {
    ImgCard,
},
props: {
}
}
</script>