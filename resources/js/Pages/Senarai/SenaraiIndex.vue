<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="h4 font-weight-bold">Dashboard</h2>
        </template>

        <senarai-form />
        <senarai-list :senarais="senarais" />

        <!-- <p class="text-danger" v-for="(item, index) in list" :key="index">
            {{ item.name }}
        </p> -->
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import SenaraiForm from "@/Pages/Senarai/SenaraiForm.vue";
import SenaraiList from "@/Pages/Senarai/SenaraiList.vue";
// import SenaraiList from "./SenaraiList.vue";  dia direct create ritu

export default defineComponent({
    components: {
        AppLayout,
        SenaraiForm,
        SenaraiList,
    },
    props: {
        senarais: {
            type: Array,
            required: true,
        },
    },
    // data() {
    //     return {
    //         list: this.senarais,
    //     };
    // },
});
</script>
