<template>
    <div class="bg-blue-600 p-5">
        <div class="flex items-end justify-end gap-x-4">
            <Link class="text-white font-semibold lowercase text-lg" href="/">Home</Link>
            <Link class="text-white font-semibold lowercase text-lg" href="/users">Users</Link>
            <Link class="text-white font-semibold lowercase text-lg" href="/settings">Settings</Link>
            <Link class="text-white font-semibold lowercase text-lg" href="/logout" method="post" as="button">Logout
            </Link>
        </div>
    </div>
    <slot />
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>