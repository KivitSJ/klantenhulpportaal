import Overview from "./pages/Note-Overview.vue";
import Create from "./pages/Note-Create.vue";
import Edit from "./pages/Note-Edit.vue";

export const ticketRoutes =  [
    { path: '/notes', component: Overview, name: 'notes.overview' },
    { path: '/notes/create', component: Create, name: 'notes.create' },
    { path: '/notes/:id/edit', component: Edit, name: 'notes.edit' }
];