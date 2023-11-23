<script setup>
import MailIcon from "@/Assets/Icons/MailIcon.vue";
import PhoneIcon from "@/Assets/Icons/PhoneIcon.vue";
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <div>
        <Head title="Two Factor" />

        <div class="min-h-screen container mx-auto">
            <div class="pt-24">
                <div class="flex justify-center">
                    <div class="mb-10">
                        <div class="text-center">
                            <h1 class="text-3xl font-playfair mb-4">OTP Verification</h1>
                            <p class="text-lg font-light mb-11">Choose where to send the verification code.</p>
                        </div>

                        <div class="flex flex-col justify-center">
                            <Link :href="route('verify-otp')" class="bg-white hover:bg-primary-100 border-2 border-primary-100 py-5 px-5 flex items-center gap-x-5 rounded-lg mb-4">
                                <span class="block">
                                    <mail-icon/>
                                </span>
                                <span class="block text-lg text-start">
                                    <span class="block font-semibold">Send to my email</span>
                                    <span>johndoe.....@gmail.com</span>
                                </span>
                            </Link>

                            <Link :href="route('verify-otp')" class="bg-white border-2 border-primary-100 py-5 px-5 flex items-center gap-x-5 rounded-lg mb-10">
                                <span class="block">
                                    <phone-icon/>
                                </span>
                                <span class="block text-lg text-start">
                                    <span class="block font-semibold">Send to my phone</span>
                                    <span>+2547......90</span>
                                </span>
                            </Link>

                            <Link class="bg-primary-100 p-2.5 text-lg font-bold w-full text-center" :href="route('login')">
                                Back
                            </Link>
                        </div>
                    </div>
                </div>

                <p class="text-center">Powered by Fauxica</p>
            </div>
        </div>
    </div>
</template>
