import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

let router = new Router({
    mode: 'history',
	base: '/',
    fallback: true,
    router:[
        {
            path:'/admin',
            component: Home,
            // meta: {
            //     requiresAuth: true,
            //     isAgencyUser:true,
            //     userType:'agency_user'
            // }
        },
    ]
})

export default router