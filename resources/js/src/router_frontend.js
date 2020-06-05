import Vue from 'vue'
import Router from 'vue-router'

// Components
import Home from '../components/frontend/Home'
import Registration from '../components/frontend/Registration'
import Institute from '../components/frontend/Institute'
import Gallery from '../components/frontend/Gallery'
import Member from '../components/frontend/Member'
import Profile from '../components/frontend/Profile'
Vue.use(Router)

let router = new Router({
    mode: 'history',
	base: '/chandraghonahub',
    fallback: true,
    routes:[
        {
            path:'/',
            component: Home,
            // meta: {
            //     requiresAuth: true,
            //     isAgencyUser:true,
            //     userType:'agency_user'
            // }
        },
        {
            path:'/registration',
            component: Registration,
            // meta: {
            //     requiresAuth: true,
            //     isAgencyUser:true,
            //     userType:'agency_user'
            // }
        },
        {
            path:'/institute',
            component: Institute,
            // meta: {
            //     requiresAuth: true,
            //     isAgencyUser:true,
            //     userType:'agency_user'
            // }
        },
        {
            path:'/gallery',
            component: Gallery,
            // meta: {
            //     requiresAuth: true,
            //     isAgencyUser:true,
            //     userType:'agency_user'
            // }
        },
        {
            path:'/members',
            component: Member,
            // meta: {
            //     requiresAuth: true,
            //     isAgencyUser:true,
            //     userType:'agency_user'
            // }
        },
        {
            path:'/profile/:user_id',
            component: Profile,
            // meta: {
            //     requiresAuth: true,
            //     isAgencyUser:true,
            //     userType:'agency_user'
            // }
        },
    ]
})

// router.beforeEach((to, from, next) => {
//     next()
//   })

export default router
