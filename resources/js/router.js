import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const router = new VueRouter({
    routes: [
        {path: '/', name: 'home', component: {
            template: '<h1>I\'m Home</h1>'
        }},
        {path: '/project', name: 'project', component: () => import('./Components/Project')},
        {path: '/task', name: 'task', component: () => import('./Components/Task')},
    ]
})

export default router;