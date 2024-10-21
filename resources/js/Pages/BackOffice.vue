<script setup lang="ts">
import { Head, Link, usePage } from '@inertiajs/vue3';
import AdminLayout from '@/Layouts/AdminLayout.vue';
import { User } from '@/types';

defineProps<{
    users: Array<User>;
}>();

const user = usePage().props.auth.user;
</script>

<template>
    <Head title="BackOffice" />
    <AdminLayout>
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img
                id="background"
                class="absolute -left-20 top-0 max-w-[877px]"
                src="https://laravel.com/assets/img/welcome/background.svg"
            />
            <div
                class="relative min-h-screen flex flex-col items-center selection:bg-[#FF2D20] selection:text-white"
            >
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <main class="mt-6 ">
                        {{ user.email }}
                        <div class="py-12">

                            <div class="relative overflow-x-auto rounded-xl" >
                                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">ID </th>
                                                <th scope="col" class="px-6 py-3">Name</th>
                                                <th scope="col" class="px-6 py-3">Email</th>
                                                <th scope="col" class="px-6 py-3">Verified ?</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr v-for="user in $props.users" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{user.id}}</th>
                                                    <td class="px-6 py-4">{{user.name}}</td>
                                                    <td class="px-6 py-4">{{user.email}}</td>
                                                    <td class="px-6 py-4">{{user.email_verified_at !== undefined}}</td>
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">id</th>
                                                    <td class="px-6 py-4">name</td>
                                                    <td class="px-6 py-4">email</td>
                                                    <td class="px-6 py-4">email_verified_at</td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </main>

                </div>
               
                
            </div>
        </div>
        <footer class="py-16 text-center justify-flex-end text-sm text-black dark:text-white/70">
                    Back Office Admin - 2024
        </footer>
    </AdminLayout>
</template>