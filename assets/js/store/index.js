import Vue from 'vue';
import Vuex from 'vuex';
 import brands from './modules/brands';
import products from './modules/products';
import cart from './modules/cart';

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        brands,
        products,
        cart
    }
});