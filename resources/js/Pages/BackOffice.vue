<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';


</script>

<template>
    <Head title="BackOffice" />
    <AuthenticatedLayout>
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img
                id="background"
                class="absolute -left-20 top-0 max-w-[877px]"
                src="https://laravel.com/assets/img/welcome/background.svg"
            />
            <div
                class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white"
            >
                <div v-if="$page.props.auth.user.admin" class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <nav  class="-mx-3 flex flex-1 justify-end">
                            Admin
                        </nav>
                    </header>

                    <main class="mt-6">

                    </main>

                </div>
                {{ $page.props.auth.user }}
                <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Bonjour {{ $page.props.auth.user.name }}
                    </footer>
            </div>
        </div>
    </AuthenticatedLayout>
</template>