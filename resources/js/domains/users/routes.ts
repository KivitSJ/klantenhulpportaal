import Overview from "./pages/User-Overview.vue";
import Create from "./pages/User-Create.vue";
import Edit from "./pages/User-Edit.vue";

export const userRoutes =  [
    { path: '/users', component: Overview, name: 'users.overview' },
    { path: '/users/create', component: Create, name: 'users.create' },
    { path: '/users/:id/edit', component: Edit, name: 'users.edit' }
];