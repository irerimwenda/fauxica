<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
</script>

<template>
   <guest-layout>
       <Head title="Home" />

       <div class="container mx-auto">
            <div class="pt-24">
                <div class="grid grid-cols-2 gap-x-24">
                    <div>
                        <h1 class="text-5xl font-playfair leading-[64px] mb-11">Quality apparel <br class="hidden lg:block"/> without the pricing tag</h1>
                        <p class="text-lg font-light mb-11">Get started with a high saving scheme that works for you.</p>
                        <div class="flex items-center gap-x-6 mb-16">
                            <button class="bg-primary-100 p-2.5 text-lg font-bold">Browse our collection</button>
                            <button class="bg-white p-2.5 text-lg font-light border-2 border-primary-100">Spring 23’ Collection</button>
                        </div>

                        <div class="border border-[#EBEBEB] py-11 px-6 bg-primary-200">
                            <div class="flex gap-x-6">
                                <p class="text-3xl">50K</p>
                                <p class="text-base">Lorem ipsum dolor sit amet consectetur. Ut ultrices nulla vulputate leo nulla proin id maecenas. Quis sed dolor eleifend senectus enim a in urna.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-x-5">
                        <div class="h-full px-5 bg-sport-shoe bg-no-repeat flex flex-col justify-end py-5">
                            <div class="bg-white flex gap-x-10 h-max py-1.5 px-2.5">
                                <div>
                                    <p class="font-bold">Fauxica Sport</p>
                                    <p class="font-light">Running Shoes</p>
                                </div>
                                <p class="font-light">Ksh 200</p>
                            </div>
                        </div>

                        <div class="flex flex-col gap-y-5">
                            <div class="h-full px-5 bg-handbag bg-no-repeat py-5">
                                <div class="bg-white flex gap-x-10 h-max py-1.5 px-2.5">
                                    <div>
                                        <p class="font-bold">Leather Bags</p>
                                        <p class="font-light">Handbags</p>
                                    </div>
                                    <p class="font-light">Ksh 500</p>
                                </div>
                            </div>

                            <div class="h-full px-5 bg-socks bg-no-repeat flex flex-col justify-end py-5">
                                <div class="bg-white flex gap-x-10 h-max py-1.5 px-2.5">
                                    <div>
                                        <p class="font-bold">Happy Socks</p>
                                        <p class="font-light">Clothing</p>
                                    </div>
                                    <p class="font-light">Ksh 80</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
   </guest-layout>
</template>
