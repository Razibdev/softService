<template>
    <p data-toggle="tooltip" title="Add To Cart" @click="eventMiniCartSend"><i class="fas fa-shopping-cart w3-text-gray" style='font-size:18px; cursor:pointer;'></i></p>
</template>

<script>
export default {
    props:['product'],
    methods: {
        eventMiniCartSend(){
               this.emitter.emit("receiveEventCartPart", this.product);
        }
    },
}
</script>