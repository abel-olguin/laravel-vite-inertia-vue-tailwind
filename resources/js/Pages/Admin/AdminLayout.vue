<script setup>
import {Link} from '@inertiajs/vue3'
</script>

<template>
    <main>
        <header>
            <Link href="/">Home</Link>
            <Link href="/about">About</Link>
            <Link href="/contact">Contact</Link>
        </header>
        <content>
            <div v-if="$page.props.flash.message" class="alert">
                {{ $page.props.flash.message }}
            </div>

            <article>
                <slot/>
            </article>
        </content>
    </main>
</template>
