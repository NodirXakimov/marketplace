<template>
    <div class="container-fluid">
        <main-header></main-header>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-2">
                    <button class="btn btn-sm btn-outline-success mt-3">Add product</button>
                </div>
                <div class="col-sm-9 col-md-7">
                    <h2>Products</h2>
                    <product-item 
                    v-for="(product, index) in products" 
                    :key="index" 
                    :name="product.name" 
                    :price="product.price"
                    :index="index"
                    @addToCartClicked="clicked"
                    ></product-item>
                </div>
                <div class="col-sm-12 col-md-3">
                    <h2>Cart</h2> 
                    <cart :products="selectedProducts" @cartCleared="cartCleared"></cart>   
                </div>   
            </div>
        </div>
    </div>
</template>

<script>
    import MainHeader from './MainHeader.vue'
    import ProductItem from './ProductItem.vue'
    import Cart from './Cart.vue'

    export default {
        data(){
            return {
                number: 10,
                productName: '',
                products: [],
                selectedProducts: [],
            }
        },
        components: {
            'main-header': MainHeader,
            'product-item': ProductItem,
            'cart': Cart,
        },
        methods: {
            clicked(index){
                this.selectedProducts.push(this.products[index]);
            },
            cartCleared(){
                this.selectedProducts = [];
            }
        },
        mounted() {
            axios({
                method:'get',
                url: '/products',
                data: {
                    id:'/products'
                }
            }).then((data) => {
                // console.log(data.data);
                this.products = data.data;
                // this.productName = data.data[0].name;
            }).catch(err => {
                console.log(err);
            })
        }
    }
</script>