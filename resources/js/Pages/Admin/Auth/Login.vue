<script>
import {Head} from '@inertiajs/vue3'

export default {
    layout: null,
}
</script>

<script setup>
import {useForm} from "@inertiajs/vue3";

let form = useForm({
    email: '',
    password: ''
})

const login = () => {
    form.post('/admin/login')
}
</script>

<template>
    <section class="gradient-form  bg-neutral-200 dark:bg-neutral-700">
        <Head title="Authastic Login"/>
        <div class="container h-screen p-10 mx-auto">
            <div
                class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
                <div class="w-full">
                    <div
                        class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800 lg:w-6/12 mx-auto">
                        <div class="px-4 md:px-0 ">
                            <div class="md:p-12">
                                <!--Logo-->
                                <div class="text-center">
                                    <img
                                        alt="logo"
                                        class="mx-auto w-48"
                                        src="https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"/>

                                    <h1 class="mb-12 mt-1 pb-1 text-xl font-semibold" title="login">
                                        We are Authastic Team
                                    </h1>
                                </div>

                                <form @submit.prevent="login">
                                    <p class="mb-4">Please login to your account</p>
                                    <!--Username input-->
                                    <div class="relative mb-4" data-te-input-wrapper-init>
                                        <input
                                            id="exampleFormControlInput1"
                                            v-model="form.email"
                                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent border border-white/10 px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                            placeholder="Email"
                                            required type="email"/>
                                        <label
                                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                            for="exampleFormControlInput1"
                                        >Email
                                        </label>
                                        <span v-if="form.errors.email" class="text-sm text-red-500"
                                              v-text="form.errors.email"></span>
                                    </div>

                                    <!--Password input-->
                                    <div class="relative mb-4" data-te-input-wrapper-init>
                                        <input
                                            id="exampleFormControlInput11"
                                            v-model="form.password"
                                            class="peer block min-h-[auto] w-full rounded border-0 bg-transparent border border-white/10 px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                            placeholder="Password"
                                            required type="password"/>
                                        <label
                                            class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                                            for="exampleFormControlInput11"
                                        >Password
                                        </label>
                                        <span v-if="form.errors.password" v-text="form.errors.password"></span>

                                    </div>

                                    <!--Submit button-->
                                    <div class="mb-12 pb-1 pt-1 text-center">
                                        <button
                                            :disabled="form.processing"
                                            class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]"
                                            data-te-ripple-color="light"
                                            data-te-ripple-init style="
                    background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
                  "
                                            type="submit">
                                            Log in
                                        </button>

                                        <!--Forgot password link-->
                                        <a href="#!">Forgot password?</a>
                                    </div>

                                    <!--Register button-->
                                    <div class="flex items-center justify-between pb-6">
                                        <p class="mb-0 mr-2">Don't have an account?</p>
                                        <button
                                            class="inline-block rounded border-2 border-danger px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-danger transition duration-150 ease-in-out hover:border-danger-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-danger-600 focus:border-danger-600 focus:text-danger-600 focus:outline-none focus:ring-0 active:border-danger-700 active:text-danger-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                                            data-te-ripple-color="light"
                                            data-te-ripple-init
                                            type="button">
                                            Register
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
