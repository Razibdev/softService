import { createStore } from 'vuex';

import axios from 'axios';


// import state from './state';
// import * as getters from './getters';
// import * as actions from './actions';
// import * as mutations from './mutations';

export default createStore({
    state: {
       products:[],
       cart:[]
      },
    mutations: {
        GET_PRODUCT_MUTATION(state, payload) {
            state.products = payload
          },

          ADD_TO_CART(state, {product, quantity}){

            let productInCart = state.cart.find(item =>{
                return item.product.id == product.id;
            });

            if(productInCart){
                productInCart.quantity += quantity;
                return;
            }
              state.cart.push({
                  product,
                  quantity
              });
          },

          SET_CART(state, cartItem){
              state.cart = cartItem;
          },

          REMOVE_PRODUCT_FROM_CART(state, id){
              state.cart = state.cart.filter((item) =>{
                  return item.id !== id;
              })
          }
    },
    actions: {
        getProducts(context, playload){
            axios.get('/mypanel/get-service-all-product')
            .then(res =>{
                console.log(res.data.data);
                context.commit('GET_PRODUCT_MUTATION', res.data.data)

            });

        },


        addProductToCart({commit}, {product, quantity}){
            axios.post('/mypanel/user-service-product-cart',{
                product_id: product.id,
                quantity
            });
           
            commit('ADD_TO_CART', {product, quantity});
        },

        getCartItem({commit}){
            axios.get('/mypanel/user-service-product-cart')
            .then(res=>{
                console.log('ok data', res.data);

                commit('SET_CART', res.data);
            });
        },

        updateCartQuanityIncrease({commit}, {item}){
            axios.post('/mypanel/user-service-product-cart-increase/',{
                id:item.id
            
            });
        },


        updateCartQuanityDcrease({commit}, {item}){
            axios.post('/mypanel/user-service-product-cart-decrease/',{
                id:item.id
            
            });
        },

        removeProductFromCart({commit}, id){
            commit('REMOVE_PRODUCT_FROM_CART', id);
            axios.delete(`/mypanel/user-service-product-cart/${id}`)
        }


    },
    getters: {
    cartItemCount(state){
        return state.cart.length;
    },

    cartTotalPrice(state){

        let total = 0;

        state.cart.forEach(item=>{
            total += item.product.sale_price * item.quantity;
        });
        return total;

    }
    }
});