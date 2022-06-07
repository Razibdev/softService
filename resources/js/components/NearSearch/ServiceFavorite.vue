<template>
    <h5 class="font-weight-bold mb-0 d-block">
                                            
             <i v-if="countItemsServic" class="fas fa-save w3-text-red"></i>
            <i v-else class="fas fa-save w3-text-gray color"></i>
        
    </h5>
</template>

<script>
export default {
    props:["id"],
    data(){
        return{
            countItemsServic:0
        }
    },

    methods: {
          countItemsfavorite(){
            axios.get(`/mypanel/user/dashboard/fetchfavorite/${this.id}`)
          .then(res =>{
              this.countItemsServic = res.data.item;
              console.log(this.countItems);
          });
        }
    },

    mounted() {
        this.countItemsfavorite();
    },
}
</script>