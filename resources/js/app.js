import { createApp, h } from 'vue'
import { createInertiaApp, Link, Head } from '@inertiajs/vue3'
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m'

import DefaultLayout from './Pages/User/Layout/DefaultLayout.vue';

/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

/* import specific icons */
import { faHouse, faBook, faStar, faCirclePlay, faHeart, faEllipsis, faClock, faMagnifyingGlass, faMusic, faPlus, faPlay } from '@fortawesome/free-solid-svg-icons'

import { createI18n } from "vue-i18n";

/* add icons to the library */
library.add(faHouse, faBook, faStar, faCirclePlay, faHeart, faEllipsis, faClock, faMagnifyingGlass, faMusic, faPlus, faPlay)

import en from "./lang/en.json";
import my from "./lang/my.json";

const i18n = createI18n({
    locale: "en",
    messages: {
        en,
        my,
    },
});

const app = createInertiaApp({
    progress: {
      color: '#4d0ac9',
    },
    resolve: name => {
      const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });

      let page = pages[`./Pages/${name}.vue`];

      page.default.layout ??= DefaultLayout;

      return page;
    },
    setup({ el, App, props, plugin }) {
      createApp({ render: () => h(App, props) })
        .use(plugin)
        .component('font-awesome-icon', FontAwesomeIcon)
        .component("Link", Link)
        .component("Head", Head)
        .use(ZiggyVue)
        .use(i18n)
        .mount(el)
    }
});

