<template>

        <button class="btn btn-danger btn-block text-center"
            @click="addProductToCart(); itemCount++ ">
            <!-- v-on:click.prevent="addProductToCart(), "> -->
            Add To Cart
        </button>

</template>

<script>
    export default {
        data(){
            return {

            }
        },
        props:['productId'],

        methods:{
            async addProductToCart(){

                // Checking if user logged in.

            //    if(this.userId == 0){
            //         alert('You Need to login, To add this product in Cart');
            //         return;
            //     }

                // If user logged in then add item to cart.

                let response = await axios.post('/cart', {
                    pid: this.productId
                }).then(function(res){console.log(res.data)});

                // alert(this.productId);

                // this.$root.$emit('changeInCart', response.data.items)

            }
        },


    }
</script>
