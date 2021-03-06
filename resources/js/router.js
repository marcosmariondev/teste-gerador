import Vue from "vue";
import VueRouter from "vue-router";
import DashboardComponent from "./components/dashboard/DashboardComponent";
import NotFoundComponent from "./components/NotFoundComponent";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history", // hash history abstract
    routes: [
        {
            path: "/",
            name: "dashboard",
            component: DashboardComponent,
            meta: {
                auth: true
            }
        },
        {
            name: 'not-found',
            path: '/not-found',
            component: NotFoundComponent,
        },
        {
            path: '*',
            redirect: '/not-found',
        }
    ],
    scrollBehavior(to, from, savedPosition) {
        return {x: 0, y: 0};
    }
});

router.beforeEach((to, from, next) => {
    console.info(to.meta.auth ? 'Precisa estar logado' : 'Não Precisa estar logado');
    /*if (to.meta.auth) {
        return router.push({name: 'login'});
    }*/
    next();
});

export default router;
