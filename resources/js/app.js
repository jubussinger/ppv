import './bootstrap';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';

//import route from 'ziggy';
//import { Ziggy } from 'ziggy';

//route('home', undefined, undefined, Ziggy);

//import { VueMaskDirective } from "v-mask";
/*Vue.directive("mask", VueMaskDirective);*/

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Passaporte para Vitória';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });

