import Login from 'pages/Login'
import Reporte from "pages/Reporte";
import Index from "pages/index";
import MainLayout from "layouts/MainLayout";
const routes = [
  {
    path: '/',
    component: () => MainLayout,
    children: [
      { path: '', component: Index,meta: {requiresAuth: true} },
      { path: '/reporte',component:Reporte,meta: {requiresAuth: true} },
      { path: '/login',component:Login}
    ]
  },

  // Always leave this as last one,
  // but you can also remove it
  {
    path: '/:catchAll(.*)*',
    component: () => import('pages/Error404.vue')
  }
]

export default routes
