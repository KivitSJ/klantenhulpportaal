import Overview from "./pages/Category-Overview.vue";
import Create from "./pages/Category-Create.vue";
import Edit from "./pages/Category-Edit.vue";

export const categoryRoutes =  [
    { path: '/categories', component: Overview, name: 'categories.overview' },
    { path: '/categories/create', component: Create, name: 'categories.create' },
    { path: '/categories/:id/edit', component: Edit, name: 'categories.edit' }
];