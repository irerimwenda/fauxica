<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import {Head, Link, router, useForm} from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    phone_number: '',
    password: '',
    remember: false,
});

const submit = () => {
    router.get(route('two-factor'))
    // form.post(route('login'), {
    //     onFinish: () => form.reset('password'),
    // });
};
</script>

<template>
    <authenticated-layout>
        <Head title="Log in" />

        <div>
            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                {{ status }}
            </div>

            <div class="mb-10">
                <application-logo/>
            </div>

            <h4 class="font-inter text-3xl lg:text-5xl text-black font-bold mb-6">Welcome back!</h4>
            <p class="text-base font-medium text-black mb-8">Don't have an account? <Link class="text-amber-700" :href="route('register')">Create an account</Link></p>

            <form @submit.prevent="submit">
                <div>
                    <InputLabel for="phone_number" value="Phone Number" />

                    <TextInput
                        id="phone_number"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.phone_number"
                        required
                        autofocus
                        autocomplete="phone_number"
                        placeholder="Enter your phone number"
                    />

                    <InputError class="mt-2" :message="form.errors.phone_number" />
                </div>

                <div class="mt-4">
                    <InputLabel for="password" value="Password" />

                    <TextInput
                        id="password"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password"
                        required
                        autocomplete="current-password"
                        placeholder="Enter your password"
                    />

                    <InputError class="mt-2" :message="form.errors.password" />
                </div>

                <div class="flex items-center justify-between my-6">
                    <label class="flex items-center">
                        <Checkbox name="remember" v-model:checked="form.remember" />
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                    <Link
                        v-if="canResetPassword"
                        :href="route('password.request')"
                        class="text-base font-medium text-amber-700 lg:hidden"
                    >
                        Forgot your password?
                    </Link>
                </div>

                <div class="mt-4">
                    <div class="mb-6">
                        <button class="bg-primary-100 p-2.5 text-lg font-bold w-full" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Login
                        </button>
                    </div>


                    <Link
                        v-if="canResetPassword"
                        :href="route('password.request')"
                        class="text-base font-medium text-amber-700 hidden lg:flex"
                    >
                        Forgot your password?
                    </Link>
                </div>
            </form>
        </div>
    </authenticated-layout>
</template>
