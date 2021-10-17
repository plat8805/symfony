import Vue from 'vue';
import router from '@/router';
import BootstrapIcon from '@dvuckovic/vue-bootstrap-icons';
Vue.component('BootstrapIcon', BootstrapIcon);

import App from '@/App.vue';

//new import './styles/app.scss';


new Vue({
    router,
    render: h=>h(App),
}).$mount('#app');