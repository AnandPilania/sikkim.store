import {App} from "@inertiajs/inertia-react";
import { render } from 'react-dom'
import { InertiaProgress } from '@inertiajs/progress'
window.config = require('@/Helpers')

InertiaProgress.init({ color: '#6D28D9', showSpinner: true } )

const element = document.getElementById('app')

render(
    <App
        initialPage={JSON.parse(element.dataset.page)}
        resolveComponent={name => import(`./Pages/${name}`).then(module => module.default)}
    />,
    element
)
