import Home from '@/views/Home.vue';
const routes = [
    {
        path: '/',
        component: Home,
        meta: {
            guest: true
        }
    },
    {
        path: '/about',
        component: () => import(
            /* webpackChunkName: "contact" */
            "@/views/About.vue"
            ),
        meta: {
            guest: true
        }
    },
    {
        path: '/contact',
        component: () => import(
            /* webpackChunkName: "contact" */
            "@/views/Contact.vue"
            ),
        meta: {
            isAuthenticated: true
        }
    },
    {
        path: '/shop',
        component: () => import(
            /* webpackChunkName: "shop" */
            "@/views/Shop.vue"
            ),
        meta: {
            guest: true
        }
    },
    {
        path: '/cart',
        component: () => import(
            /* webpackChunkName: "cart" */
            "@/views/Cart.vue"
            ),
        meta: {
            guest: true
        }
    },
    {
        path: '/login',
        name: 'login',
        component: () => import(
            /* webpackChunkName: "auth" */
            "@/views/Auth.vue"
            ),
        meta: {
            isAuthenticated: false
        }
    },
    {
        path: '/profile',
        name: 'profile',
        component: () => import(
            /* webpackChunkName: "profile" */
            "@/views/Profile.vue"
            ),
        meta: {
            isAuthenticated: true,
        }
    },
    {
        path: '/checkout',
        name: 'checkout',
        component: () => import(
            /* webpackChunkName: "checkout" */
            "@/views/Checkout.vue"
            ),
        meta: {
            isAuthenticated: true,
        }
    },
    {
        path: '/register',
        component: () => import(
            /* webpackChunkName: "auth" */
            "@/views/Register.vue"
            ),
        meta: {
            isAuthenticated: false
        }
    },
    {
        path: '/not-found',
        alias: '*',
        component: {
            render: h => h('div', ['404! Page not found!'])
        }
    }

];

export default routes;