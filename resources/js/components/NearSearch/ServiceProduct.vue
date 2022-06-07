<template>
   <span>{{productCount}}</span>
</template>

<script>
export default {

    props:["id"],
    data(){
        return{
            countProduct:0
        }
    },

    methods: {
         countItemP(){
            axios.get(`/mypanel/user/dashboard/fetchproduct/${this.id}`)
          .then(res =>{
              this.countProduct = res.data.item;
          });
         }
    },

    mounted() {
        this.countItemP();

    },

    computed:{
        productCount(){
            return this.countProduct;
        }
    }
}
</script>