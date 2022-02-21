<template>
    <div class="card mt-4">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in kerjas" :key="index">
                        <td>{{ index + 1 }}</td>
                        <td>{{ item.name }}</td>
                        <td>
                            <Link
                                class="btn btn-primary text-white mx-1"
                                :href="'kerjas/' + item.id"
                                >Buka
                            </Link>
                            <button
                                class="btn btn-danger text-white mx-1"
                                @click="deleteItem(item.id)"
                            >
                                Padam
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link,
    },
    props: {
        kerjas: {
            type: Array,
            required: true,
        },
    },
    methods: {
        deleteItem(id) {
            console.log("item nak delete", id);
            this.$inertia.delete("kerjas/" + id); //kerjas/1/2/3
        },
    },
};
</script>

<style></style>
