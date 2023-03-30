<template>
    <Head title="Open APIs Dashboard" />

    <div class="max-w-7xl m-auto rounded-md shadow p-4 mt-5 border">
        <div class="flex justify-start items-center gap-5">
            <h1 class="text-2xl inline-block">Public APIs</h1>
            <span>A list of publically available, free to use APIs</span>
        </div>

        <div class="mt-5">
            <NavLink :href="'/categories'" class="float-right mb-2 bg-blue-500 hover:bg-blue-700 text-white font-bold px-2 py-1 text-sm rounded" :active='true'>Categories</NavLink>
            <table class="w-full border">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>API</th>
                        <th>Auth</th>
                        <th>HTTPS</th>
                        <th>Cors</th>
                        <th>Description</th>
                        <th>Link</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in data?.entries" :key="index">
                        <td>{{ item.Category }}</td>
                        <td>{{ item.API }}</td>
                        <td>{{ item.Auth }}</td>
                        <td>{{ item.HTTPS }}</td>
                        <td>{{ item.Cors }}</td>
                        <td>{{ item.Description }}</td>
                        <td>{{ item.Link }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import { Head, Link } from "@inertiajs/vue3";
import NavLink from "../Components/NavLink.vue"
export default {
    components: {
        NavLink
    },
    props: {
        data: Object,
    }
};
</script>
