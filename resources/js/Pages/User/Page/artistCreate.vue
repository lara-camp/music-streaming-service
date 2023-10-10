<template>
  <div class="w-full h-3/4 flex items-center justify-center">
    <div class="lg:w-2/4">
      <form
        @submit.prevent="create"
        id="artistsCreate"
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
            class="block w-full p-2 text-md rounded-sm bg-black text-white"
            type="password"
            name="password"
            id="password"
            placeholder="Password"
            v-model="form.password"
          />
          <div v-if="errors.password" class="text-red-600">
            {{ errors.password }}
          </div>
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
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRW-Ueno4FN01-ZCrL2gQkHH6uqJvjQhBVcusA4gNhT&s"
            class="w-1/4 h-[100px]"
          />
        </div>
        <div class="px-4 pb-2 pt-4">
          <button
            type="submit"
            class="uppercase block w-full p-2 text-md rounded-full bg-indigo-500 hover:bg-indigo-600 focus:outline-none"
          >
            create
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
  },
  setup() {
    const form = useForm({
      name: "",
      displayName: "",
      email: "",
      password: "",
      profileImg: "",
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
    create() {
      this.$inertia.post("/artists/create", this.form, {
        preserveScroll: true,
      });
    },
  },
};
</script>
