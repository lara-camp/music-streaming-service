<template>
    <main>
      <header>
        <Link :href="route('admin.home')">Home</Link>
        <Link :href="route('user.home')">User</Link>
        <Link href="/logout" method="post" as="button" type="button">Logout</Link>
      </header>
      <article>
        <slot />
      </article>
    </main>
  </template>

<script>
import { Link } from '@inertiajs/vue3';

export default {
    components: {
        Link
    },
    props: {
      name: String
    }
}
</script>