<template>
    <div class="bg-blue-600 p-5">
        <div class="flex items-end justify-end gap-x-4">
            <Link class="text-white font-semibold lowercase text-lg" :class="{ 'underline': $page.url === '/' }"
                href="/">Home</Link>
            <Link class="text-white font-semibold lowercase text-lg" href="/users"
                :class="{ 'underline': $page.url === '/users' }">Users</Link>
            <Link class="text-white font-semibold lowercase text-lg" href="/settings"
                :class="{ 'underline': $page.url === '/settings' }">Settings</Link>
            <Link class="text-white font-semibold lowercase text-lg" href="/logout" method="post" as="button">Logout
            </Link>
        </div>
    </div>
    <div class="p-4">
        <slot />
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>