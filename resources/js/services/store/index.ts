import { ref, computed } from 'vue';
import { deleteRequest, getRequest, postRequest, putRequest } from '../http';

export const storeModuleFactory = <T extends Record<string, unknown> & {id:number}>(moduleName: string) => {
    type K = Record<string,unknown>;
    const state = ref<Record<number, T>>({});

    const getters = {
        all: computed(() => Object.values(state.value)),
        getById: (id:number) => computed(() => state.value[id])
    };

    const setters = {
        setAll: (items:T[]) => {
            for (const item of items) state.value[item.id] = Object.freeze(item);
        },
        deleteByItem: (item:T) => {
            delete state.value[item.id];
        }
    };

    const actions = {
        getAll: async () => {
            const { data } = await getRequest(moduleName);
            if (!data) return;
            setters.setAll(data.data);
        },
        create: async (item:K) => {
            const { data } = await postRequest(moduleName, item);
            if (!data) return;
            setters.setAll(data.data);
        },
        update: async (id:number, item:K) => {
            const { data } = await putRequest(`${moduleName}/${id}`, item);
            if (!data) return;
            setters.setAll(data.data);
        },
        delete: async (id:number) => {
            const result = await deleteRequest(`${moduleName}/${id}`);
            setters.deleteByItem(state.value[id]);
            return result;
        },
    };

    return { getters, setters, actions };
};