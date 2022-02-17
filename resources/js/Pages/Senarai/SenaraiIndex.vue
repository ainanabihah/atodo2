<template>
  <app-layout title="Dashboard">
    <template #header>
      <h2 class="h4 font-weight-bold">Dashboard</h2>
    </template>

    <div class="card">
      <div class="card-body">
        <input type="text" class="form-control" placeholder="Nama Senarai" />
        <button class="btn btn-primary text-white float-end mt-2">
          Simpan
        </button>
      </div>
    </div>

    <div class="card mt-4">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div>Senarai</div>
          <div><button class="btn btn-outline-primary">Buka</button></div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";

export default defineComponent({
  components: {
    AppLayout,
  },
});
</script>


 