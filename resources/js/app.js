/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


import 'jquery/dist/jquery'
import 'jquery-ui-dist/jquery-ui.min'
import 'bootstrap/dist/js/bootstrap.min'
import 'sparklines/source/sparkline'
import 'jqvmap-novulnerability/dist/jquery.vmap.min'
import 'jqvmap-novulnerability/dist/maps/jquery.vmap.usa'
import 'jquery-knob-chif/dist/jquery.knob.min'
import 'daterangepicker/daterangepicker'
import 'tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min'
import 'summernote/dist/summernote-bs4.min'
import 'overlayscrollbars/js/jquery.overlayScrollbars.min'
import 'admin-lte/dist/js/adminlte'

window.Vue = require('vue').default;

import App from './components/App';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import axios from 'axios';
import { routes } from './routes';
import Profile from "../../../vuebloglaravel/resources/js/components/admin/ProfileComponent";
import User from "../../../vuebloglaravel/resources/js/components/admin/UserComponent";

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/App.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('App', require('./components/App.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

import AllCategories from "../js/components/AllCategories";
Vue.component('categories', require('./components/AllCategories').default);

const router = new VueRouter({
    mode: 'history',
    routes: routes
});


const app = new Vue({
    el: '#app',
    router: router,
    components: {AllCategories,},
    render: h => h(App),
});
