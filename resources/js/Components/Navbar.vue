<template>
    <div class="bg-blue-600 p-5">
        <div class="flex items-end justify-end gap-x-4">

            <NavLink href="/" :active="{ 'underline font-bold': $page.component === 'Home' }">Home</NavLink>
            <NavLink href="/users" :active="{ 'underline font-bold': $page.component === 'Users' }">Users</NavLink>
            <NavLink href="/settings" :active="{ 'underline font-bold': $page.component === 'Users' }">Settings
            </NavLink>
            <Link class="text-white font-semibold lowercase text-lg" href="/logout" method="post" as="button">Logout
            </Link>
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import NavLink from "./NavLink.vue";
</script>