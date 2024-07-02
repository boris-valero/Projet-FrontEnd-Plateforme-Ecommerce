import { createRouter } from "vue-router";
import { createWebHistory } from "vue-router";

import HomeFeed from "../views/HomeFeed.vue"
import MeubleDetails from "../views/MeubleDetails.vue"
import RegistrationForm from "../views/RegistrationForm.vue"
import MeublesGlobal from "../views/MeublesGlobal.vue"
import MeContacter from "../views/MeContacter.vue"


const routes = [
    {
        path: '/',
        name: "Home",
        component: HomeFeed
    },
    {
        path: '/meubles',
        name: "Catalogue de tous les meubles",
        component: MeublesGlobal
    },
    {
        path: '/meuble/:id',
        name: "Meuble",
        component: MeubleDetails
    },
    {
        path: '/registrationform',
        name: "Registration Form",
        component: RegistrationForm
    },
    {
        path: '/mecontacter',
        name: "Me contacter",
        component: MeContacter
    },

]

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
