<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th class="col ">id</th>
                <th class="col">Name</th>
                <th class="col">Price</th>
                <th class="col">Description</th>
                <th class="col">Image</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="product in products.data" :key="product">
                <td>{{product.id}}</td>
                <td>{{product.name}}</td>
                <td>{{product.price}}</td>
                <td>{{product.description}}</td>
                <td>{{product.image}}</td>
            </tr>
            </tbody>
        </table>
    </div>


</template>
<script>
export default {
    name: "Index"
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
