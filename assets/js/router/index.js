import Vue from 'vue';
import VueRouter from "vue-router";
import routes from "./routes";
import {UsersService} from "@/services/local/users";

Vue.use(VueRouter);

const router = new VueRouter({
    base: process.env.BASE_URL,
    linkActiveClass: 'active',
    linkExactActiveClass: 'exact-active',
    routes
});

router.beforeEach((to, from, next) => {
    const user = UsersService.getUser();

    if (to.matched.some((routeRecord) => routeRecord.meta.isAuthenticated)) {
        // User should be authenticated
        if (user == null) {
            return next({
                path: '/customer-auth',
                params: {nextUrl: to.fullPath}
            });
        } else {
            return next();
        }
    } else if (to.matched.some((routeRecord) => routeRecord.meta.isAuthenticated === false)) {
        // User should NOT be authenticated
        if (user) {
            // If he is redirect it to profile from there he should logout
            return next({
                name: 'profile'
            });
        } else {
            return next();
        }
    }
    else if(to.matched.some(routeRecord => routeRecord.meta.guest)) {
        return next()
    }

});

export default router;