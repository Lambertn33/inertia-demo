<template>
    <Navbar />
    <div class="p-4 max-w-3xl mx-auto">
        <slot />
    </div>
</template>

<script setup>
import Navbar from "./Navbar.vue"
</script>