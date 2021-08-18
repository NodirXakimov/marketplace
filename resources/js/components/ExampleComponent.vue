<template>
    <div class="container-fluid">
        <main-header></main-header>
        <product-item></product-item>
    </div>
</template>

<script>
    import MainHeader from './MainHeader.vue'
    import ProductItem from './ProductItem.vue'

    export default {
        data(){
            return {
                number: 10
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
            console.log('Component mounted.')
        }
    }
</script>
