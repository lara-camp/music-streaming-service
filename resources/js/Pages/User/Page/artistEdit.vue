<template>
  <div class="w-full h-3/4 flex items-center justify-center">
    <div class="lg:w-2/4">
      <form
        @submit.prevent="update(artistDetail.id)"
        id="artistsEdit"
        action=""
        class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto"
      >
        <div class="pb-2 pt-4">
          <input
            type="text"
            name="name"
            id="name"
            placeholder="Name"
            class="block w-full p-2 text-md rounded-sm bg-black text-white"
            v-model="form.name"
          />
          <div v-if="errors.name" class="text-red-600">{{ errors.name }}</div>
        </div>
        <div class="pb-2 pt-4">
          <input
            type="text"
            name="displayname"
            id="displayname"
            placeholder="Display Name"
            class="block w-full p-2 text-md rounded-sm bg-black text-white"
            v-model="form.displayName"
          />
          <div v-if="errors.displayName" class="text-red-600">
            {{ errors.displayName }}
          </div>
        </div>
        <div class="pb-2 pt-4">
          <input
            type="email"
            name="email"
            id="email"
            placeholder="Email"
            class="block w-full p-2 text-md rounded-sm bg-black text-white"
            v-model="form.email"
          />
          <div v-if="errors.email" class="text-red-600">{{ errors.email }}</div>
        </div>
        <div class="pb-2 pt-4">
          <input
            v-on:change="imagePreview"
            class="block w-full p-2 mb-4 text-md rounded-sm bg-black text-white"
            type="file"
            name="profile"
            id="profile"
            placeholder="profile"
          />
          <div v-if="errors.profileImg" class="text-red-600">
            {{ errors.profileImg }}
          </div>
          <img
            id="image-preview"
            v-if="artistDetail.image_s3_path"
            :src="'/artists/' + artistDetail.image_s3_path"
            class="w-1/4 h-[100px]"
          />
        </div>
        <div class="px-4 pb-2 pt-4 flex justify-between">
          <button
            @click="back(artistDetail.id)"
            type="button"
            class="uppercase block w-1/4 p-1.5 text-md text-white rounded-full bg-gray-700 hover:bg-indigo-600 focus:outline-none"
          >
            back
          </button>
          <button
            type="submit"
            class="uppercase block w-1/4 p-1.5 text-md rounded-full bg-indigo-500 hover:bg-indigo-600 focus:outline-none"
          >
            update
          </button>
        </div>
      </form>
    </div>
  </div>
</template>
<script>
import { useForm, post, route } from "@inertiajs/inertia-vue3";
export default {
  props: {
    type: String,
    errors: Object,
    artistDetail: Object,
  },
  setup(props) {
    const form = useForm({
      name: props.artistDetail.name || "",
      displayName: props.artistDetail.display_name || "",
      email: props.artistDetail.email || "",
      profileImg: props.artistDetail.image_s3_path || "",
    });
    return {
      form,
    };
  },
  methods: {
    imagePreview(event) {
      const input = event.target;
      const imagePreview = document.getElementById("image-preview");

      if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = function (e) {
          imagePreview.src = e.target.result;
        };
        this.form.profileImg = input.files[0];

        reader.readAsDataURL(input.files[0]);
      }
    },
    back(id) {
      var getId = id;
      this.$inertia.get("/artist/" + getId + "/show");
    },
    update(id) {
      var getId = id;
      this.$inertia.post("/artist/" + getId + "/update", this.form, {
        preserveScroll: true,
      });
    },
  },
};
</script>
