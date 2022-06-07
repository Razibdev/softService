<template>
    <span>{{countItemServic}}</span>
</template>

<script>
export default {
    props:["id"],
    data(){
        return{
            countItemServic:0
        }
    },

    methods: {
          countItem(){
            axios.get(`/mypanel/user/dashboard/fetchproduct/${this.id}`)
          .then(res =>{
              this.countItemServic = res.data.item;
          });
        }
    },

    mounted() {
        this.countItem();
    },
}
</script>