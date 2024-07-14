<template>
    <div class="bg-blue-600 p-5">
        <div class="flex items-end justify-end gap-x-4">

            <NavLink href="/" :active="$page.component === 'Home'">Home</NavLink>
            <NavLink href="/users" :active="$page.component === 'Users'">Users</NavLink>
            <NavLink href="/settings" :active="$page.component === 'Settings'">Settings
            </NavLink>
            <Link class="text-white font-semibold lowercase text-lg" href="/logout" method="post" as="button">Logout
            </Link>
        </div>
    </div>
</template>

<script setup>
import NavLink from "./NavLink.vue";
</script>