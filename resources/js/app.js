import './bootstrap';
import {createApp, h} from 'vue'
import {createInertiaApp} from '@inertiajs/vue3'
import AdminLayout from "@/Pages/Admin/AdminLayout.vue";
import DashboardLayout from "@/Pages/Dashboard/DashboardLayout.vue";
import Layout from "@/Pages/Layout.vue";

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', {eager: true})
        let page = pages[`./Pages/${name}.vue`].default
        const parts = name.split('/');
        const layouts = {
            Admin: AdminLayout,
            Dashboard: DashboardLayout
        }
        let layout = Layout;

        if (page.layout === undefined) {
            if (parts.length > 1) {
                layout = layouts[parts[0]] || layout;
            }
            page.layout = layout;
        }
        return pages[`./Pages/${name}.vue`]
    },
    setup({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .mount(el)
    },
})
