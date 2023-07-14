<script setup>
import {Head} from '@inertiajs/vue3'

defineProps({auth: Object})
</script>

<template>
    <Head title="Welcome"><title>Welcome</title></Head>
    <h1>Welcome</h1>
    <p>Hello {{ auth.user.name }}, welcome to your first Inertia app!</p>
</template>
