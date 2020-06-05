
require('./bootstrap');

window.Vue = require('vue');

import router from './router_frontend'

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('../components/ExampleComponent.vue').default);
Vue.component('navbar', require('../components/frontend/layouts/Navbar.vue').default)
Vue.component('footerBottom', require('../components/frontend/layouts/Footer.vue').default)
Vue.component('master', require('../components/frontend/layouts/Master.vue').default)
Vue.component('navbartwo', require('../components/frontend/layouts/NavbarTwo.vue').default)
Vue.component('header-component', require('../components/frontend/layouts/Header.vue').default)


const app = new Vue({
    el: '#app_frontend',
    router
});
