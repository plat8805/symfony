import 'styles/main.scss';

import Vue from "vue";
import Main from '@/Main';
import router from '@/router';

new Vue({
    router,
    render: h => h(Main)
}).$mount('#app');

