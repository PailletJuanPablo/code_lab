require('./bootstrap');
import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.min.css'
import 'vue-material/dist/theme/default.css'

import Vue from 'vue'


Vue.use(VueMaterial)

const app = new Vue({
    el: '#app',
});
