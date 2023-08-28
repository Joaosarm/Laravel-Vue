import {createRouter, createWebHashHistory} from 'vue-router'
import MainPage from '../components/MainPage.vue'
import ServicePage from '../components/ServicePage.vue'

const routes = [
    {
        path: '/',
        name: 'main-page',
        component: MainPage
    },
    {
        path:'/service/:id',
        name:'service',
        component: ServicePage
    }
]

const router = createRouter({
    history: createWebHashHistory(),
    routes
})

export default router;