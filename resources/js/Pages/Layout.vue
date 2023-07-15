<script setup>
import {Link} from '@inertiajs/vue3'
</script>

<template>
    <main>
        <header>
            <div class="fixed z-50 top-0 left-0 right-0">
                <nav class="flex justify-between px-20 py-10 items-center bg-transparent text-white">
                    <h1 class="text-xl font-bold" v-text="$page.props.appName"></h1>
                    <div class="flex items-center">

                        <ul class="flex items-center space-x-6">
                            <li class="font-semibold">
                                <Link href="/guides">Guides</Link>
                            </li>
                            <li class="font-semibold">
                                <Link href="/docs">Docs</Link>
                            </li>

                            <li class="font-semibold">
                                <Link href="/login">Login</Link>
                            </li>
                            <!-- <li>
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"/>
                                </svg>
                            </li>-->
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <section class="menu-header-section relative pt-40 pb-10 overflow-hidden text-white">
            <div class="grid container grid-cols-2 mx-auto pr-4">
                <div>
                    <h1 class="font-bold text-5xl pb-5">Authastic</h1>
                    <p class="font-semibold text-2xl pb-5">

                        Build rich, interactive web applications quickly, with less code and fewer moving parts. Join
                        our growing community of developers using Phoenix to craft APIs, HTML5 apps and more, for fun or
                        at scale.

                    </p>

                    <button class="rounded-bl-md rounded-tr-md px-10 font-semibold py-2 bg-purple-950">Get started
                    </button>
                </div>

                <div>
                    <h1 class="font-bold text-5xl">Authastic1</h1>

                    <p class="font-semibold text-2xl">

                        Build rich, interactive web applications quickly, with less code and fewer moving parts. Join
                        our growing community of developers using Phoenix to craft APIs, HTML5 apps and more, for fun or
                        at scale.

                    </p>
                </div>
            </div>
            <div class="overlay"></div>
        </section>
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
