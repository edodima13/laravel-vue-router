import VueRouter from 'vue-router'
 import Vue from 'vue'

Vue.use(VueRouter)

import Posts from '../views/Posts.index.vue'
import Post from '../views/Post.show.vue'


const routes = [
    {
        path:'/posts',
        name:'posts.index',
        component: Posts
    },
    {
        path:'/post',
        name:'posts.show',
        component: Post
    }

];

const router = new VueRouter({
    mode:'history',
    routes: routes
});

export default router