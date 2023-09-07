// import Vue from 'vue';
import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
//import 'bootstrap'
// import Toasted from 'vue-toasted';
import 'bootstrap/dist/css/bootstrap.css'

//import axios from 'axios'
//createApp.prototype.$http = axios
import axios from 'axios';
import vmodal from 'vue-js-modal'
//const app = createApp(App);

//app.config.globalProperties.$http = axios;

//createApp.$http = axios;

const app = createApp(App);

 
  
app.use(router, axios, vmodal).mount('#app')



