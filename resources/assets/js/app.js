require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import VueForm from 'vform'
import Vue2Filters from 'vue2-filters'

import Example from './components/Example.vue'

import Users from './components/Users/Users.vue'
import UsersIndex from './components/Users/UsersIndex.vue'
import UsersCreate from './components/Users/UsersCreate.vue'

Vue.use(VueRouter)
Vue.use(VueForm, { http: Vue.http })
Vue.use(Vue2Filters)

const router = new VueRouter({
    mode: 'history',
    base: '/',
    routes: [
        {
            path: '/dashboard',
            name: 'dashboard',
            component: Example
        },
        {
            path: '/users',
            name: 'users',
            component: Users,
            children: [
                {
                    path: 'index',
                    name: 'users-index',
                    component: UsersIndex
                },
                {
                    path: 'create',
                    name: 'users-create',
                    component: UsersCreate
                }
            ]
        }
    ]
})

new Vue({
    router
}).$mount('#app')
