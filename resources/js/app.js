require('./bootstrap');
window.Vue = require('vue');

Vue.component('articals', require('./components/Articals.vue').default);

const app = new Vue({
   el: '#app',
});
