<template>
    <Link class="text-white font-semibold lowercase text-lg" :class="active" :href="href">
    <slot />
    </Link>
</template>

<script setup lang="ts">
interface NavLinkProps {
    active: boolean,
    href: string
}
defineProps<NavLinkProps>();
</script>