<template>
    <div class="card">
        <div class="card-body">
            <form @submit.prevent="form.post('/kerjas')">
                <input
                    type="text"
                    class="form-control"
                    placeholder="Nama Kerja"
                    v-model="form.name"
                />
                <div v-if="form.errors.name">{{ form.errors.name }}</div>
                <button
                    type="submit"
                    :disabled="form.processing"
                    class="btn btn-primary text-white float-end mt-2"
                >
                    Simpan
                </button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        senarai: {
            type: Object,
            required: true,
        },
    },
    data() {
        return {
            form: this.$inertia.form({
                name: null,
                senarai_id: this.senarai.id,
            }),
        };
    },
};
</script>

<style></style>
