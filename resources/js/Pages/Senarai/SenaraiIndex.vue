<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="h4 font-weight-bold">Dashboard</h2>
        </template>

        <senarai-form />
        <senarai-list />
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import SenaraiForm from "@/Pages/Senarai/SenaraiForm.vue";
import SenaraiList from "./SenaraiList.vue";

export default defineComponent({
    components: {
        AppLayout,
        SenaraiForm,
        SenaraiList,
    },
});
</script>
