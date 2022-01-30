import {CartService} from '@/services/local/cart';
import {CartAction} from "../types.actions";

const state = {
    all: [],
}

const getters = {};

const mutations = {
    'SET_CART_ITEMS' (state, cartItems){
        state.all = cartItems;
    }
};

const actions = {
    [CartAction.ADD_PRODUCT_TO_CART]: (context, {product, quantity }) => {
        const cartItems = CartService.addItem(product, quantity);
        context.commit(CartAction.SET_CART_ITEMS, cartItems);
    }

};

export default {
    namespaced: true,
    state,
    getters,
    mutations,
    actions
};