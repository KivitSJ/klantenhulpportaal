import Overview from "./pages/Category-Overview.vue";
import Create from "./pages/Category-Create.vue";
import Edit from "./pages/Category-Edit.vue";

export const ticketRoutes =  [
    { path: '/categories', component: Overview, name: 'tickets.overview' },
    { path: '/categories/create', component: Create, name: 'tickets.create' },
    { path: '/categories/:id/edit', component: Edit, name: 'tickets.edit' }
];