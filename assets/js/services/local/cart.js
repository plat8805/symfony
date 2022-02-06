import {LocalStorageService} from "./local-storage";

const CART_KEY = 'cart';

export const CartService = {

    itemTotal() {
        if (typeof window !== 'undefined') {
            if (LocalStorageService.get()) {
                return JSON.parse(LocalStorageService.get('cart')).length
            }
        }
        return 0
    },

    addItem(product, quantity) {
        let cartItems = JSON.parse(LocalStorageService.get(CART_KEY)) || [];
        let cartItem = cartItems.find(item => item.id === product.id);
        if (cartItem) {

            cartItem.quantity += quantity;
        } else {
            const {id, name, price, cover} = product;
            cartItem = {
                id, name, price, quantity, cover
            };
            cartItems.push(cartItem);
        }
        localStorage.setItem(CART_KEY, JSON.stringify(cartItems));

        return cartItems; // return!
    },

    getCart() {
        if (typeof window !== "undefined") {
            if (LocalStorageService.get(CART_KEY)) {
                const cart = JSON.parse(LocalStorageService.get(CART_KEY));
                return cart;
            }
        }
        return []
    },
    removeItem(product) {
        if (LocalStorageService.get(CART_KEY)) {
            let cartItems = JSON.parse(LocalStorageService.get(CART_KEY));

            cartItems = cartItems.filter(item => item.id !== product.id);
            LocalStorageService.set(CART_KEY, JSON.stringify(cartItems));
            return cartItems
        }

        debugger;
        return [];
    },
    emptyCart() {
        if (typeof window !== 'undefined') {
            LocalStorageService.remove(CART_KEY);
        }
    },
};