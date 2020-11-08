import VueRouter from 'vue-router'
import Home from './views/Home';
import Resume from './views/Resume';
import Projects from './views/Projects';
import Project from './views/Project'


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
    },
    {
        path: '/projects/:slug',
        component: Project,
    }
];

export default new VueRouter({
    routes,
    mode: 'history',
    linkActiveClass: 'active',
})
