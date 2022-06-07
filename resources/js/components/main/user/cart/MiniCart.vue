<template>
    <div>

      <!-- <button type="button" class="btn btn-demo">
        Right Sidebar Modal
    </button> -->

    <div class="minicart_main" @click="cartOpenNow">
        <div class="minicart">
            <div class="minicart_header">
                <p><i class="fa fa-shopping-bag" aria-hidden="true"></i></p>
                <p>{{countCount}} Items</p>
            </div>
            <div class="minicart_footer">
                <p> <span style="width:10%; float:left; display:block;">ট </span> <span style="text-align:center; width:90%; display:block;" v-if="cartTotalPrice">  {{cartTotalPrice}}</span> <span style="text-align:center; width:90%; display:block;" v-else>  000</span></p>
            </div>

        </div>
    </div>

        <!-- <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
            <div class="modal-dialog" role="document"> -->
                <div class="card mini_cart_cart" id="cart_open">
                    <div class="card-header">
                        <h4 class="modal-title" id="myModalLabel2" style="width:80%; float:left; padding:7px;"> <i class="fa fa-shopping-bag" aria-hidden="true"></i> {{countCount}} ITEMS </h4>
                      <span aria-hidden="true" style="font-size: 30px; float: right; cursor:pointer" @click="closeCart">&times;</span>
                    </div>
    
                    <div class="card-body" style="padding:0px !important; height:80vh; overflow-y:auto; overflow-x:hidden;">
                       <ul class="list-group" v-if="cart.length" style="">
                        <li class="list-group-item"  v-for="item in cart" :key="item.product.id">
                            <span class="single-list-group"><img :src="'/storage/product/serviceproduct/'+item.product.feature_image_name" alt=""></span>
                            <span class="single-list-group">{{item.product.name}} <br> <span class="small-span">240/ 24.5ml</span></span>
                            <span class="single-list-group"><i @click="updateQuantityDcrease(item)" class="fa fa-angle-left quantity_arraw" aria-hidden="true"></i> &nbsp;{{item.quantity}}&nbsp; <i @click="updateQuantityIncrease(item)" class="fa fa-angle-right quantity_arraw" aria-hidden="true"></i></span>
                            <span class="single-list-group">{{item.product.sale_price}}</span>

                            <span class="single-list-group" @click="removeProductFromCart(item.id)"><i class="fa fa-times quantity_arraw" aria-hidden="true"></i></span>

                            </li>
                        </ul>


                        <ul class="list-group" v-else>
                         <li class="list-group-item" style="text-align:center">
                             Product not found in cart
                         </li>
                        </ul>


                    </div>
                    <div class="card-footer cas_footer">
                        <div class="footer-main">
                            <div class="footer-left">
                                <p>

                                    <a v-if="countCount > 0" href="/mypanel/carts/service/product">Place Order</a>
                                    <a v-else href="#" @click="alertMethod">Place Order</a>

                                    
                                    </p>
                            </div>

                            <div class="footer-right">
                                <p><span>ট </span> {{cartTotalPrice}} </p>
                            </div>
                        </div>
                    </div>
    
                </div><!-- modal-content -->
            </div><!-- modal-dialog -->
        <!-- </div>

    </div> -->
</template>

<script>
export default {
   mounted() {

  this.emitter.on("receiveEventCartPart", (product) => {
     this.$store.dispatch('addProductToCart',{
         product:product,
         quantity:1
     })
    });

    this.$store.dispatch('getProducts');

    this.$store.dispatch('getCartItem');

   },

   methods: {
       cartOpenNow(){
           let id = document.getElementById('cart_open');
           id.style.display = "block";
       },

       closeCart(){
            let id = document.getElementById('cart_open');
           id.style.display = "none";
       },

       removeProductFromCart(id){
           this.$store.dispatch('removeProductFromCart', id);
       },

       updateQuantityIncrease(item){

           item.quantity++;
        //    if(item.quantity == 0){
        //    this.$store.dispatch('removeProductFromCart', id);
        //    }
           this.$store.dispatch('updateCartQuanityIncrease', {item});

       },

       updateQuantityDcrease(item){
             item.quantity--;
           if(item.quantity == 0){
           this.$store.dispatch('removeProductFromCart', item.id);
           }
           this.$store.dispatch('updateCartQuanityDcrease', {item});
       },

       alertMethod(){
           alert('Cart has no product');
       }


   },

   computed:{
       cart(){
           return this.$store.state.cart;
       },
       countCount(){
           return this.$store.getters.cartItemCount;
       },

       cartTotalPrice(){
           return this.$store.getters.cartTotalPrice;
       }
   },



}
</script>


<style>
    .cas_footer{
       height: 7vh;
       margin-top: 40px;
    }
    .mini_cart_cart{
        height:100vh; 
        width:322px;right:0;
        position:fixed; 
        z-index:620000; 
        top:-1px;
        display: none;
    }


    .footer-main{
        width: 100%;
        background-color: rgb(151, 16, 16);
        height: 6vh;
    }

    .footer-main .footer-left{
        background: #ff8182;
        padding-bottom: 20px;
        height: 6vh;


    }

    .footer-main .footer-left, .footer-main .footer-right{
        width: 50%;
        float: left;
        color: white;
        padding: 10px;

    }




    .list-group-item{
        width: 320px;
        padding-left: 0;
        padding-right: 0;

    }
    .single-list-group{
            width: 15%;
            display: block;
            float: left;
            padding: 2px;
        }

        .single-list-group img{
            width: 100% !important;
            height: 100% !important;
        }

        .single-list-group:nth-child(2){
            width:40%;
        }

        .single-list-group:nth-child(3){
            width:25%;
        }

        .single-list-group:nth-child(5){
            cursor: pointer;
            width:5%;
            padding-right: 2px;
        }

        .small-span{
            font-size: 10px;
        }

        .quantity_arraw{
            font-weight: 600 !important;
            font-size: 15px !important;
            cursor: pointer !important;
            opacity: .6 !important;
        }


    .minicart_main{
        width: 75px;
        height: 75px;
        position: fixed;
        z-index: 200;
        right: 15px;
        top: 40%;
        background: white;
        box-shadow: 0 0 16px -1px rgb(0 0 0 / 75%);
        cursor: pointer;
        opacity: .7;

    }

    .minicart_main:hover{
        opacity: 1;
    }
    .minicart{
        height: 75px;
    }
    .minicart .minicart_header {
        height: 50px;
        background-color: #212121;
        text-align: center;
        padding: 2px;

    }

    .minicart .minicart_header p{
        color: white;
    }

    .minicart .minicart_header p i{
        color: white;
        font-size: 23px;
    }


    .minicart .minicart_footer {
        height: 25px;
        padding: 2px;

    }
    .minicart .minicart_footer p span{
        padding-top: 2px;
        font-size: 10px;
    }



</style>

<style>



    /*Right*/
	.modal.right.fade .modal-dialog {
		right: 0px;
		-webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
		   -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
		     -o-transition: opacity 0.3s linear, right 0.3s ease-out;
		        transition: opacity 0.3s linear, right 0.3s ease-out;
	}
	
	.modal.right.fade.in .modal-dialog {
		right: 0;
	}


    .modal-dialog {
    position: fixed;
    margin: auto;
    width: 320px;
    height: 100%;
    right: 0px;
}
.modal-content {
    height: 100%;
}



/* ----- MODAL STYLE ----- */
	.modal-content {
		border-radius: 0;
		border: none;
	}

	.modal-header {
		border-bottom-color: #EEEEEE;
		background-color: #FAFAFA;
	}


</style>
