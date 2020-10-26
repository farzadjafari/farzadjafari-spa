import VueRouter from 'vue-router'
import Home from './views/Home';
import Resume from './views/Resume';
import Projects from './views/Projects';


let routes = [
    {
        path: '/',
        component: Home,
    },
    {
        path: '/resume',
        component: Resume,
    },
    {
        path: '/projects',
        component: Projects,
    }
];

export default new VueRouter({
    routes,
    linkActiveClass: 'active',
})
