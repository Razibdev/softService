import { createWebHistory, createRouter } from "vue-router";
import Login from "../components/main/auth/Login.vue";
import Home from "../components/main/home/Home.vue";
import ProductDetails from "../components/main/home/ProductDetails.vue";
import ServiceProfile from "../components/main/home/ServiceProfile.vue";
import Register from "../components/main/auth/Register.vue";



const routes = [

    {
        path: "/",
        name: "Home",
        component: Home,
    },

    {
        path: "/login",
        name: "Login",
        component: Login,
    },


    {
        path: "/vue_product",
        name: "Product",
        component: ProductDetails,
    },

    {
        path: "/service",
        name: "Service",
        component: ServiceProfile,
    },
    {
        path: "/register",
        name: "register",
        component: Register,
    },

];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
