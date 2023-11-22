<script setup>
import Navbar from "@/Layouts/Partials/Navbar.vue";
import Footer from "@/Layouts/Partials/Footer.vue";
</script>

<template>
    <div class="min-h-screen flex flex-col pt-6 sm:pt-0">
        <div class="relative">
            <Navbar/>
        </div>

        <div class="w-full" >
            <slot/>
        </div>

        <div>
            <Footer/>
        </div>
    </div>
</template>
