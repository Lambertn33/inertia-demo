<script setup lang="ts">
import { Link } from "@inertiajs/vue3"
</script>
<template>
    <div>
        <h2>Home Page</h2>
        <nav>
            <ul>
                <li>
                    <Link href="/">Home</Link>
                    <Link href="/users">Users</Link>
                    <Link href="/settings">Settings</Link>
                </li>
            </ul>
        </nav>
    </div>
</template>