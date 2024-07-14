<script setup lang="ts">
interface IPaginatorLink {
    active: boolean;
    label: string;
    url: string | null;
}

interface PaginationProps {
    links: IPaginatorLink[]
}
defineProps<PaginationProps>();
</script>

<template>
    <template v-for="link in links">
        <Link v-if="link.url" :key="link.url" v-html="link.label" :href="link.url" class="border px-3 py-2"
            :class="link.active ? 'bg-blue-600 text-white' : ''" />
        <span v-else v-html="link.label" class="border px-3 py-2" />
    </template>
</template>