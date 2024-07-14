<template>
    <Navbar />
    <div class="p-4">
        <slot />
    </div>
</template>

<script setup>
import Navbar from "./Navbar.vue"
</script>