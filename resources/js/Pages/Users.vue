<script setup lang="ts">
import { ref, watch } from "vue";
import { router } from "@inertiajs/vue3";
import Pagination from "../Components/Pagination.vue"
interface IUser {
    id: number;
    name: string;
    email: string
}

interface IPaginatorLink {
    active: boolean;
    label: string;
    url: string | null;
}

interface UsersProps {
    data: IUser[]
    links: IPaginatorLink[],
}
interface FiltersProps {
    search: string | null;
}
let props = defineProps<{ users: UsersProps, filters: FiltersProps }>();

let search = ref(props.filters.search);

watch(search, value => {
    router.get('/users', {
        search: value
    }, { preserveState: true })
});
</script>
<template>

    <Head title="App - Users" />
    <div>
        <div class="flex justify-between mb-8">
            <h2 class="text-2xl font-semibold">Users List</h2>
            <input type="text" v-model="search" class="border px-4 py-1 rounded-md" placeholder="Search...">
        </div>

        <!--Users Table-->
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Names
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            ...
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b" v-for="user in users.data" :key="user.id">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ user.name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ user.email }}
                        </td>
                        <td class="px-6 py-4">
                            <Link :href="`/users/${user.id}`" class="text-blue-400 font-semibold">
                            Edit
                            </Link>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!--Users paginator-->
        <div class="mt-8 flex justify-center">
            <Pagination :links="users.links" />
        </div>
    </div>
</template>