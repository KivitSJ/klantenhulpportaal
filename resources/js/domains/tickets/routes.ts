import Overview from "./pages/Ticket-Overview.vue";
import Create from "./pages/Ticket-Create.vue";
import Edit from "./pages/Ticket-Edit.vue";

export const ticketRoutes =  [
    { path: '/tickets', component: Overview, name: 'tickets.overview' },
    { path: '/tickets/create', component: Create, name: 'tickets.create' },
    { path: '/tickets/:id/edit', component: Edit, name: 'tickets.edit' }
];