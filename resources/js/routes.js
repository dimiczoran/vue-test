import Home from './components/Home'
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
            path: '/Home',
            component: Home
        },

    ]
}