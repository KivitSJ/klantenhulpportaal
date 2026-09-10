import Overview from "./pages/Reaction-Overview.vue";
import Create from "./pages/Reaction-Create.vue";
import Edit from "./pages/Reaction-Edit.vue";

export const reactionRoutes =  [
    { path: '/reaction', component: Overview, name: 'reactions.overview' },
    { path: '/reaction/create', component: Create, name: 'reactions.create' },
    { path: '/reaction/:id/edit', component: Edit, name: 'reactions.edit' }
];