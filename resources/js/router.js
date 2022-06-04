import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/home', component: () => import('./components/Home'),
            name: 'home.index'
        },
        {
            path: '/login', component: () => import('./components/Login'),
            name: 'user.login'
        },
        {
            path: '/registration', component: () => import('./components/Registration'),
            name: 'user.registration'
        },
        {
            path: '/user/personal', component: () => import('./components/Personal'),
            name: 'user.personal'
        },

    ]
})
