require('./bootstrap');
require('alpinejs');




import {createApp} from 'vue';
import axios from 'axios'
import VueAxios from 'vue-axios'
import store from './store';

import mitt from 'mitt';
const emitter = mitt();



import NearShop from './components/NearShop.vue';
import MiniCart from './components/main/user/cart/MiniCart.vue';

import CartButton from './components/main/user/cart/CartButton.vue';


const app =  createApp({});
app.component("near-shop", NearShop); 
app.component("mini-cart", MiniCart); 
app.component("cart-button", CartButton); 
app.config.globalProperties.emitter = emitter;
app.use(VueAxios, axios);
app.use(store);
app.mount('#app');























// const app = new createApp({
//     components:{
//         NearShop,
//         MiniCart
//     },
//     mounted(){
//         console.log('this is fine ok')
//     }
// });



// app.use(BootstrapVue);

// window.Vue = require('vue');
// import * as Vue from 'vue'
// import * as Vue from 'vue'
// import BootstrapVue from 'bootstrap-vue'
// import './app.scss'

// Import Bootstrap and BootstrapVue CSS files (order is important)
// import 'bootstrap/dist/css/bootstrap.css'
// import 'bootstrap-vue/dist/bootstrap-vue.css'


// import { createApp } from 'vue';
// import App from "./App.vue"; 

// import router from './router.js'; 
// import store from "./store.js";

// const app = createApp(App)

// app.use(router);

// app.use(store);

// app.mount('#app');