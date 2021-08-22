<template>
    <div class="card">
        <div class="card-header text-center">
            <h4 class="text-success">
                Total price: <span class="text-danger">{{ totalPrice }} $</span>
            </h4>
        </div>
        <div class="card-body">
            <ul>
                <li v-for="(product, index) in products" 
                :key="index"
                >
                   {{ product.name }} <span class="text-danger">{{ product.price }} $</span>
                </li>
            </ul>
        </div>
        <div class="card-footer text-center" v-if="products.length">
            <button class="btn btn-outline-danger" @click="cartCleared">Clear cart</button>
            <button class="btn btn-outline-success">Buy</button>
        </div>
    </div>
</template>
<script>
export default {
    props: ['products'],
    methods: {
        cartCleared(){
            this.$emit('cartCleared');
        },
    },
    computed: {
        totalPrice(){
            return this.products.reduce( (sum, product) => {
                return sum + product.price;
            }, 0)
        }
    }
}
</script>