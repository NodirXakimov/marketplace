<template>
    <div class="card d-inline-block m-2 text-center" style="width: 12rem;">
        <div class="card-header">
            <p class="text-primary">{{ name }}</p>
        </div>
        <div class="card-body">
            <p class="text-danger">
                {{ price }} $
            </p>
        </div>
        <div class="card-footer">
            <button class="btn btn-sm btn-outline-primary"
                @click="addToCartClicked"
            >
                Add to cart
            </button>
        </div>
    </div>
</template>
<script>
export default {
    props: ['name', 'price', 'index'],
    methods: {
        addToCartClicked(){
            this.$emit('addToCartClicked', this.index);
        }
    }
}
</script>