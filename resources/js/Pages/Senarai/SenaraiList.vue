<template>
    <div class="card mt-4">
        <div class="card-body">
            <!-- <div
                class="d-flex justify-content-between my-2"
                v-for="(item, index) in list"
                :key="index"
            >
                <div>{{ item.name }}</div>
                <div>
                    <button class="btn btn-outline-primary mx-1">Buka</button>
                    <button class="btn btn-danger text-white mx-1">
                        Padam
                    </button>
                    <button class="btn btn-secondary text-white mx-1">
                        Kemaskini
                    </button>
                </div>
            </div> -->

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in senarais" :key="index">
                        <td>{{ index + 1 }}</td>
                        <!-- <td>{{ item.id }}</td> -->
                        <td>{{ item.name }}</td>
                        <td>
                            <button class="btn btn-primary mx-1">Buka</button>
                            <button class="btn btn-secondary text-white mx-1">
                                Kemaskini
                            </button>
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
export default {
    props: {
        senarais: {
            type: Array,
            required: true,
        },
    },
    methods: {
        deleteItem(id) {
            console.log("item nak delete", id);
            this.$inertia.delete("senarais/" + id); //senarais/1/2/3
        },
    },
    // data() {
    //     return {
    //         list: this.senarais,
    //     };
    // },
};
</script>

<style></style>
