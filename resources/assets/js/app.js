require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'

import Example from './components/Example.vue'
import Test from './components/Test.vue'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/dashboard',
            name: 'dashboard',
            component: Example
        },
        {
            path: '/test',
            name: 'test',
            component: Test
        }
    ]
})

new Vue({
    router
}).$mount('#app')
