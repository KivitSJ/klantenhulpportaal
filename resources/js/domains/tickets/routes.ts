import Overview from "./components/Overview.vue";
import Create from "./components/Create.vue";

export const ticketRoutes =  [
    { path: '/tickets', component: Overview, name: 'tickets.overview' },
    { path: '/tickets/create', component: Create, name: 'tickets.create' }
];