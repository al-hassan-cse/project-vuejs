// import Vue from 'vue';
import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
//import 'bootstrap'
import Toasted from 'vue-toasted';
import 'bootstrap/dist/css/bootstrap.css';




createApp(App).use(router).mount('#app')
