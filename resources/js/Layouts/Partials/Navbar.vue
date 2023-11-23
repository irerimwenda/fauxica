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
                    <Link class="uppercase hover:underline underline-offset-8" :href="route('home')">Home</Link>

                    <template v-if="route().current('dashboard')">
                        <Link class="uppercase hover:underline underline-offset-8" :href="route('login')">Sign Out</Link>
                    </template>
                    <template v-else>
                        <Link class="uppercase hover:underline underline-offset-8" :href="route('login')">Log In</Link>
                        <Link class="uppercase hover:underline underline-offset-8" :href="route('register')">Sign Up</Link>
                    </template>
                </li>
            </ul>
        </div>
    </div>
</template>
