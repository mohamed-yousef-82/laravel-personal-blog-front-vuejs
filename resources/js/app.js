import './bootstrap';
import { createApp } from 'vue';
import App from '../js/App.vue';
// import Posts from './components/Posts.vue';
// import Posts from '../js/components/Posts.vue'
import router from './router';
import './assets/css/plugin.css';
import './assets/css/style.css';
createApp(App).use(router).mount('#app')


// import '../css/app.css';
// import '../css/plugin.css';
// import '../css/bootstrap.min.css';
// import router from './router';
// const app = createApp({})
// app.component('posts',Posts)
// app.mount('#app')

// createApp(App).use(router).mount('#app')
// window.Vue = require('Vue')
// import Posts from './components/Posts.vue';
// const app = new Vue({
//     el:'#app'
// })