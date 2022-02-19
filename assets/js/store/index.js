import Vue from 'vue';
import Vuex from 'vuex';

// import categories from './modules/categories';
import brands from './modules/brands';
import products from './modules/products';
import {cart} from './modules/cart';
import {auth} from './modules/auth';

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        brands,
        products,
        cart,
        auth
    }
});