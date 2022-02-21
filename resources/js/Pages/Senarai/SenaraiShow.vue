<template>
    <app-layout title="Kerjas">
        <template #header>
            <h2 class="h4 font-weight-bold">Kerjas</h2>
        </template>

        <kerja-form :senarai="senarai" />
        <kerja-list :kerjas="kerjas" />
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import KerjaForm from "@/Pages/Kerja/KerjaForm.vue";
import KerjaList from "@/Pages/Kerja/KerjaList.vue";

export default {
    components: {
        KerjaForm,
        KerjaList,
        AppLayout,
    },

    props: {
        kerjas: {
            type: Array,
            required: true,
        },
        senarai: {
            type: Object,
            required: true,
        },
    },
};
</script>

<style></style>
