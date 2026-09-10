import { createRouter, createWebHistory } from 'vue-router';
import { ticketRoutes } from '../domains/tickets/routes';
import { userRoutes } from '../domains/users/routes';
import { noteRoutes } from '../domains/notes/routes';
import { reactionRoutes } from '../domains/reactions/routes';
import { categoryRoutes } from '../domains/category/routes';

export const router = createRouter({
    history: createWebHistory(),
    routes: [
        ...ticketRoutes, 
        ...userRoutes, 
        ...noteRoutes, 
        ...reactionRoutes, 
        ...categoryRoutes
    ],
});