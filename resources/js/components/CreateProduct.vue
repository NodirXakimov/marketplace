<template>
    <div>
        <div class="mb-3">
            <label for="productName" class="form-label">Product name</label>
            <input type="text" class="form-control" id="productName" placeholder="New product" v-model="newProduct.name">
        </div>
        <div class="mb-3">
            <label for="productPrice" class="form-label">Price</label>
            <input type="number" class="form-control" id="productPrice" placeholder="Pruduct price" v-model="newProduct.price">
        </div>
        <button class="mt-3 btn btn-sm btn-outline-success" @click="createProduct">Create</button>
    </div>
</template>
<script>
export default {
    data(){
        return {
            newProduct: {
                name:'',
                price: null
            }
        }
    },
    methods: {
        createProduct(){
            axios({
                method:'post',
                url: 'api/products',
                data: this.newProduct,
                headers: {
                    'Accept': 'application/json',
                    'Authorization': `Bearer 1|98ZtUlpNFxC4Bc41vlJuzWNJlTVf1SDXpDuiKqAm` 
                } 
            }).then((data) => {
                console.log(data.data);
                this.$emit("newItemAdded", data.data)
            }).catch(err => {
                console.log(err);
                alert('An error occured');
            })
        }
    },
}
</script>