import '../scss/main.scss';

import Vue from "vue";
import Main from './Main';

Vue.component('hello', {
    template: "<h1>Hello Vue Js</h1>"
});

let mycomp = {
    template: "<h1>Hello Local Component</h1>"
}
new Vue({
    render: h => h(Main)

}).$mount('#app');

