<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="container mx-auto pt-10">
        <div class="flex items-center">
            <div class="mr-auto">
                <Link href="/">
                    <ApplicationLogo />
                </Link>
            </div>

            <ul>
                <li class="flex items-center gap-x-16">
                    <Link class="uppercase hover:underline underline-offset-8">Home</Link>
                    <Link class="uppercase hover:underline underline-offset-8">Products</Link>
                    <Link class="uppercase hover:underline underline-offset-8">Gallery</Link>
                    <Link class="uppercase hover:underline underline-offset-8">Contact Us</Link>
                </li>
            </ul>
        </div>
    </div>
</template>
