import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
        path: '/home',
        name: 'Index',
        component: () => import('../views/main/index.vue')
    }
  ]
})

export default router
