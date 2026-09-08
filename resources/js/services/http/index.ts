import axios from 'axios';
import { destroyErrors, destroyMessage, setErrorBag, setMessage } from '../error';

const http = axios.create({
    baseURL: '/api',
    headers: {
        'Content-Type': 'application/json'
    }
});

http.interceptors.request.use(
    config => {
        destroyErrors(); // Wis oude fouten voordat een nieuw verzoek wordt uitgevoerd
        destroyMessage(); // Wis oude "messages" voordat een nieuw verzoek wordt uitgevoerd
        return config;
    },
    error => Promise.reject(error)
);

http.interceptors.response.use(
    response => response,
    error => {
        if (error.response && error.response.status === 422) {
            setErrorBag(error.response.data.errors); // Sla validatiefouten op in de error bag
            setMessage(error.response.data.message); // Sla de algemene foutmelding op
        }
        return Promise.reject(error);
    }
);

export const getRequest = (endpoint: string) => http.get(endpoint);
export const postRequest = <T>(endpoint: string, data: T) => http.post(endpoint, data);
export const putRequest = <T>(endpoint: string, data: T) => http.put(endpoint, data);
export const deleteRequest = (endpoint: string) => http.delete(endpoint);