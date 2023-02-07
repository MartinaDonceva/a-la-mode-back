<template>
    <div class="container">
        <table class="table text-center table-striped table-hover table-bordered">
            <thead>
            <tr>
                <th class="col">Индекс</th>
                <th class="col">Наслов</th>
                <th class="col">Цена</th>
                <th class="col">Опис</th>
                <th class="col">Слика</th>
                <th class="col">Акции</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="product in products.data" :key="product">
                <td>{{product.id}}</td>
                <td>{{product.name}}</td>
                <td>{{product.price}}</td>
                <td>{{product.description}}</td>
                <td>{{product.image}}</td>
                <td>
                    <div class="d-flex gap-3 justify-content-center">
                        <button class="btn text-white btn-info rounded-0">Измени</button>
                        <button class="btn text-white btn-danger rounded-0">Избриши</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>


</template>


<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";
export default {
    name: "Index",
    layout:AdminLayout,
}
</script>
<script setup>
defineProps({
    products:{
        default:null,
        type:Object
    }
})
</script>

<style scoped>

</style>
