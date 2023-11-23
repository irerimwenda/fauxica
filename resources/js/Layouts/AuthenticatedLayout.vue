<script setup>
import {Link} from "@inertiajs/vue3";
</script>

<template>
    <div class="lg:h-screen flex flex-col bg-white">
        <div class="w-full h-full" >
            <div class="grid grid-cols-1 lg:grid-cols-2 h-full">
                <div class="flex justify-center h-full">
                    <div class="py-10 lg:py-20 lg:w-1/2 px-5 lg:px-0 flex flex-col justify-between">
                        <slot/>
                        <div>
                            <p class="text-sm text-black font-medium mb-3 text-center lg:text-start">Copyright @2023. All Rights Reserved.</p>
                            <p class="text-sm text-black font-medium m-0"><Link class="text-amber-700 underline">Terms and Conditions</Link> , <Link class="text-amber-700 underline"> Privacy Policy</Link> and <Link class="text-amber-700 underline">Cookie Policy</Link></p>
                        </div>
                    </div>
                </div>

                <div class="hidden bg-auth-banner bg-cover bg-no-repeat bg-center h-full lg:flex flex-col justify-end py-20 px-32"></div>
            </div>
        </div>
    </div>
</template>
