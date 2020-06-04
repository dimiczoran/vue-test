import Contact from './components/Contact'
import About from './components/About'
import Welcome from './components/Welcome'
import NotFound from './components/NotFound'

export default {
    mode: 'history',

    routes: [
        {
            path: '*',
            component: NotFound
        },

        {
            path: '/',
            component: Welcome
        },

        {
            path: '/about',
            component: About
        },

        {
            path: '/contact',
            component: Contact
        },

    ]
}
