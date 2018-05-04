
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// import fontawesome from '@fortawesome/fontawesome';
// import solid from '@fortawesome/fontawesome-pro-solid';
// import brands from '@fortawesome/fontawesome-free-brands';

// fontawesome.library.add(solid);
// fontawesome.library.add(brands);

window.Vue = require('vue');

// const FontAwesomeIcon = require('@fortawesome/vue-fontawesome');
// Vue.component('font-awesome-icon', FontAwesomeIcon);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});
