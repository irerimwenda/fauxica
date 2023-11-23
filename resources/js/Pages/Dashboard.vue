<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue';
import TickIcon from "@/Assets/Icons/TickIcon.vue";
import { Head, Link } from '@inertiajs/vue3';
import {ref} from "vue";

const wizardStep = ref(1)

const proceedToStep = (step) => {
    wizardStep.value = step
}
</script>

<template>
    <Head title="Dashboard" />

    <dashboard-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="container mx-auto py-12">
            <div class="flex mb-10">
                <div class="mr-auto">
                    <h5 class="text-3xl font-bold font-playfair mb-4">Hi John,</h5>
                    <p class="text-lg font-light">Welcome back!</p>
                </div>

                <p class="text-lg font-semibold font-playfair">Thur, 23rd Nov 2023</p>
            </div>

            <div class="flex justify-center">
                <div class="w-2/4 bg-white w-full mx-auto p-6">
                    <template v-if="wizardStep === 1">
                        <div>
                            <p class="text-xl font-semibold mb-1">Checkout your items</p>
                            <p class="text-lg font-light mb-8">Confirm all your basket items</p>
                        </div>

                        <div v-for="item in 4" :key="item" class="mb-5">
                            <div class="flex gap-x-5">
                                <div>
                                    <img src="/images/socks.png" alt="Socks" class="w-20 rounded-lg" />
                                </div>

                                <div class="mr-auto">
                                    <h5 class="font-bold text-lg">Running Socks</h5>
                                    <p class="font-light mb-2">Size 2XL</p>
                                    <p class="text-lg">Ksh 350</p>
                                </div>

                                <div>
                                    <button class="bg-white border-2 border-primary-100 py-2.5 px-4 text-lg font-bold w-full">Remove</button>
                                </div>
                            </div>

                            <hr class="mt-4"/>
                        </div>

                        <button class="bg-primary-100 p-2.5 text-lg font-bold w-full" @click.prevent="proceedToStep(2)">Proceed to Pay</button>
                    </template>


                    <template v-else-if="wizardStep === 2">
                        <div>
                            <p class="text-xl font-semibold mb-1">Choose payment method</p>
                            <p class="text-lg font-light mb-8">Confirm method of payment to use</p>
                        </div>

                        <div class="mb-5">
                            <ul class="grid w-full gap-6 md:grid-cols-1">
                                <li>
                                    <input type="radio" id="hosting-small" name="hosting" value="hosting-small" class="hidden peer" required>
                                    <label for="hosting-small" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">Method 1</div>
                                            <div class="w-full">Recommended for fast checkout</div>
                                        </div>
                                        <tick-icon/>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="hosting-big" name="hosting" value="hosting-big" class="hidden peer">
                                    <label for="hosting-big" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">
                                        <div class="block">
                                            <div class="w-full text-lg font-semibold">Method 2</div>
                                            <div class="w-full">Quick and effective checkout</div>
                                        </div>
                                        <tick-icon/>
                                    </label>
                                </li>
                            </ul>
                        </div>

                        <div class="flex items-center gap-x-4">
                            <button class="bg-white border-2 border-primary-100 p-2.5 text-lg font-bold w-full" @click.prevent="proceedToStep(1)">Back</button>
                            <button class="bg-primary-100 p-2.5 text-lg font-bold w-full" @click.prevent="proceedToStep(3)">Pay</button>
                        </div>
                    </template>

                    <template v-else-if="wizardStep === 3">
                        <div class="flex flex-col justify-center">
                            <div class="text-center">
                                <h5 class="text-xl font-semibold font-playfair mb-1">Your order is being processed. Check your mail.</h5>
                                <p class="text-lg font-light">Thank you for shopping with us.</p>
                            </div>

                            <div class="flex justify-center my-10 mx-auto text-center">
                                <img src="/images/confetti.png" alt="Order success" class="w-2/4"/>
                            </div>

                            <div class="mx-auto">
                                <Link class="block bg-primary-100 py-2.5 px-4 text-lg font-bold w-full" :href="route('home')">Continue Shopping</Link>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </dashboard-layout>
</template>
