import 'styles/main.scss';

import Vue from "vue";
import Main from '@/Main';
import router from '@/router';
import axios from '@/config/axios';
window.axios = axios;
import store from '@/store';

new Vue({
    router,
    store,
    render: h => h(Main)
}).$mount('#app');

