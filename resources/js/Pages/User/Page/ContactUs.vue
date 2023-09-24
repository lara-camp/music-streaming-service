<template>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">
                Contact Us
            </h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">
                Got a technical issue? Want to send feedback about a beta feature? Need
                details about our Business plan? Let us know.
            </p>
            <form @submit.prevent="submit" @focusout="validate" class="space-y-8">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                        Name</label>
                    <input type="name" id="name" v-model="form.name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="John Wick" />
                    <div v-if="errors.name" class="text-red-600">{{ errors.name }}</div>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                        email</label>
                    <input type="email" id="email" v-model="form.email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="name@flowbite.com" />
                    <div v-if="errors.email" class="text-red-600">{{ errors.email }}</div>
                </div>
                <div>
                    <label for="subject"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                    <input type="text" id="subject" v-model="form.subject"
                        class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                        placeholder="Let us know how we can help you" />
                    <div v-if="errors.subject" class="text-red-600">
                        {{ errors.subject }}
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your
                        message</label>
                    <textarea id="message" rows="6" v-model="form.message"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Leave a comment..."></textarea>
                </div>
                <button
                    :disabled="form.processing"
                    class="hover:shadow-form flex mx-auto rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                    Send message
                </button>
            </form>
        </div>
    </section>
</template>

<script>
import { useForm } from "@inertiajs/vue3";

export default {
    props: {
        errors: Object,
    },
    setup() {
        const form = useForm({
            name: "",
            email: "",
            subject: "",
            message: "",
        });
        return { form };
    },
    methods: {
        submit() {
            this.$inertia.post('/contactus', this.form, {
                preserveScroll: true
            })
        },
    },
};
</script>

<style></style>