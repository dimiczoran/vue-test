import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';

import button from './components/ui/Button'
import card from './components/ui/Card'

Vue.use(VueRouter);

Vue.component('component-button', button);
Vue.component('component-card', card);

new Vue({
    el: '#app',

    router: new VueRouter(routes)
})

