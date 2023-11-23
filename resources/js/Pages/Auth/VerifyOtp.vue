<script setup>
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <div>
        <Head title="Verify OTP Code" />

        <div class="min-h-screen container mx-auto">
            <div class="pt-24">
                <div class="flex justify-center">
                    <div class="mb-10">
                        <div class="text-center">
                            <h1 class="text-3xl font-playfair mb-4">Verify OTP Code</h1>
                            <p class="text-lg font-light mb-16">Enter the OTP Verification code sent to your email at johnd.......@gmail.com</p>
                        </div>

                        <div class="flex flex-col justify-center mb-8">
                            <form action="" method="post">
                                <div class="flex flex-col mb-16">
                                    <div class="flex flex-row items-center justify-between mx-auto w-full max-w-xs">
                                        <div class="w-16 h-16 ">
                                            <input class="w-full h-full flex flex-col items-center justify-center text-center px-5 outline-none rounded-xl border border-gray-200 text-lg bg-white focus:bg-gray-50 focus:ring-1 ring-blue-700" type="text" name="">
                                        </div>
                                        <div class="w-16 h-16 ">
                                            <input class="w-full h-full flex flex-col items-center justify-center text-center px-5 outline-none rounded-xl border border-gray-200 text-lg bg-white focus:bg-gray-50 focus:ring-1 ring-blue-700" type="text" name="">
                                        </div>
                                        <div class="w-16 h-16 ">
                                            <input class="w-full h-full flex flex-col items-center justify-center text-center px-5 outline-none rounded-xl border border-gray-200 text-lg bg-white focus:bg-gray-50 focus:ring-1 ring-blue-700" type="text" name="">
                                        </div>
                                        <div class="w-16 h-16 ">
                                            <input class="w-full h-full flex flex-col items-center justify-center text-center px-5 outline-none rounded-xl border border-gray-200 text-lg bg-white focus:bg-gray-50 focus:ring-1 ring-blue-700" type="text" name="">
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button class="bg-primary-100 p-2.5 text-lg w-2/4 font-bold text-center">
                                        Verify OTP
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="flex justify-center text-center">
                            <Link class="bg-white p-2.5 text-lg block w-2/4 font-light border-2 border-primary-100" :href="route('login')">Back</Link>
                        </div>
                    </div>
                </div>

                <p class="text-center">Powered by Fauxica</p>
            </div>
        </div>
    </div>
</template>
