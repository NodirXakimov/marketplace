<template>
    <div class="container-fluid">
        <main-header></main-header>
        <product-item></product-item>
        <h3>{{ productName }}</h3>
    </div>
</template>

<script>
    import MainHeader from './MainHeader.vue'
    import ProductItem from './ProductItem.vue'

    export default {
        data(){
            return {
                number: 10,
                productName: ''
            }
        },
        components: {
            'main-header': MainHeader,
            'product-item': ProductItem
        },
        methods: {
            increase(){
                if(this.number < 20) 
                    this.number++;
                else this.number = 0;
            }
        },
        mounted() {
            axios({
                method:'get',
                url: '/test',
                data: {
                    id:'/test'
                }
            }).then((data) => {
                console.log(data.data);
                this.productName = data.data[0].name;
            }).catch(err => {
                console.log(err);
            })
        }
    }
</script>
