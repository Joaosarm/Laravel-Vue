import {createRouter, createWebHashHistory} from 'vue-router'
import MainPage from '../components/MainPage.vue'

const routes = [
    {
        path: '/',
        name: 'home',
        component: MainPage
    },
    {
        path:'/service',
        name:'service',
    }
]

const router = createRouter({
    history: createWebHashHistory(),
    routes
})

export default router;