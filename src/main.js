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
//const app = createApp(App);

//app.config.globalProperties.$http = axios;

//createApp.$http = axios;
  
createApp(App).use(router, axios).mount('#app')



