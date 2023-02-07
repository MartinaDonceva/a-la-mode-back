<template>
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-lg-8 ms-5">
                <p class="text-color mb-0 py-2 display-2 font-fam" href="#">A La Mode</p>
            </div>
            <div class="col-lg-3 me-0">
                <button class="btn btn-light btn-secondary btn-outline-dark rounded-0">Креирај производ</button>
            </div>
        </div>
        <div class="mt-3">
            <h2 class="fw-bold text-center">Продукти</h2>
        </div>
        <div class="mt-5">
            <slot/>
        </div>
        </div>
</template>

<script>
export default {
    name: "AdminLayout"
}
</script>
<script setup>

import AuthenticationCardLogo from "@/Components/AuthenticationCardLogo.vue";
</script>

<style scoped>
.font-fam {
    font-family: "Brush Script MT", cursive;
}

</style>
