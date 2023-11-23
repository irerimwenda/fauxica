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

           <hr class="my-10"/>

           <div class="text-center">
               <h1 class="text-3xl font-playfair mb-4">Our Products</h1>
               <p class="text-lg font-light mb-11">Browse through a variety of our products available</p>
           </div>

           <div class="grid grid-cols-4 gap-x-4">
                <div>
                    <img src="/images/socks.png" alt="Handbag" class="mb-3 w-full"/>
                    <h5 class="font-bold text-lg">Running Socks</h5>
                    <p class="font-light mb-3">Size 2XL</p>
                    <div class="flex justify-between mb-5">
                        <div>
                            <p class="font-light line-through text-gray-500 mb-1">Ksh 500</p>
                            <p class="font-bold text-lg">Ksh 350</p>
                        </div>

                        <div>
                            <span class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded mb-1">Price dropped</span>
                            <p class="font-light text-gray-700">You save Ksh 150</p>
                        </div>
                    </div>
                    <button class="bg-primary-100 p-2.5 text-lg font-bold w-full">Add to Cart</button>
                </div>
           </div>
       </div>
   </guest-layout>
</template>
