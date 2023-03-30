<template>
    <Head title="Open APIs Dashboard" />

    <div class="max-w-7xl m-auto rounded-md shadow p-4 mt-5 border">
        <div class="flex justify-start items-center gap-5">
            <h1 class="text-2xl inline-block">List of Public Categories</h1>
            <span>A list of publically available categories</span>
        </div>

        <div class="mt-5">
            <table class="w-full border">
                <thead>
                    <tr>
                        <th align="left">Category Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in data?.categories" :key="index">
                        <td>{{ item }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        data: Object,
    },
};
</script>
