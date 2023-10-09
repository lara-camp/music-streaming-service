<template>
  <div class="w-full h-3/4 bg-dark px-10 pt-20">
    <div class="relative mb-32 max-w-sm mx-auto mt-16">
      <div class="rounded overflow-hidden shadow-md bg-datk">
        <div class="absolute -mt-20 w-full flex justify-center">
          <div class="h-32 w-32">
            <img
              v-if="artistDetail.image_s3_path"
              :src="'/artists/' + artistDetail.image_s3_path"
              class="rounded-full object-cover h-full w-full shadow-md"
            />
            <img
              v-else
              class="rounded-full object-cover h-full w-full shadow-md"
              src="https://yt3.ggpht.com/e9o-24_frmNSSVvjS47rT8qCHgsHNiedqgXbzmrmpsj6H1ketcufR1B9vLXTZRa30krRksPj=s88-c-k-c0x00ffffff-no-rj-mo"
            />
          </div>
        </div>
        <div class="border border-gray-800 px-4 py-5 sm:p-0 mt-12">
          <dl class="sm:divide-y sm:divide-gray-800">
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-white">Name</dt>
              <dd class="mt-1 text-sm text-white sm:mt-0 sm:col-span-2">
                {{ artistDetail.name }}
              </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-white">Display Name</dt>
              <dd class="mt-1 text-sm text-white sm:mt-0 sm:col-span-2">
                {{ artistDetail.display_name }}
              </dd>
            </div>
            <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-white">Email address</dt>
              <dd class="mt-1 text-sm text-white sm:mt-0 sm:col-span-2">
                {{ artistDetail.email }}
              </dd>
            </div>
            <div class="py-3 flex justify-between sm:px-6">
              <div
                @click="edit(artistDetail.id)"
                class="text-sm font-medium text-white rounded-md bg-indigo-500 hover:bg-indigo-600 focus:outline-none py-1.5 px-3 cursor-pointer"
              >
                Edit
              </div>
              <div
                @click="getDelete(artistDetail.id)"
                class="mt-1 text-sm text-white sm:mt-0 sm:col-span-2 rounded-md bg-indigo-500 hover:bg-indigo-600 focus:outline-none py-1.5 px-3 cursor-pointer"
              >
                Delete
              </div>
            </div>
          </dl>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    artistDetail: Object,
  },
  methods: {
    edit(id) {
      var getId = id;
      this.$inertia.get("/artists/" + getId + "/edit");
    },
    getDelete(id) {
      var getId = id;
      this.$inertia.delete("/artist/" + getId + "/delete");
    },
  },
};
</script>
