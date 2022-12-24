import { createRouter,createWebHistory } from 'vue-router'
import Posts from '../components/Posts.vue'
import Contact from '../components/Contact.vue'
import Register from '../components/Register.vue'
import Post from '../components/Post.vue'

const routes = [
    { 
        path: '/',
        name:'Posts',
        component: Posts,
        props:true
    },
    { 
        path: '/post/:id',
        name:'Post',
        component: Post,
        props:true
    },
    { 
        path: '/contact',
        name:'Contact',
        component: Contact
    }
    ,
    { 
        path: '/register',
        name:'Register',
        component: Register
    }
  ]

  const router = createRouter({
    // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
    history: createWebHistory(),
    routes, // short for `routes: routes`
  })
  export default router;
  
