<script setup lang="ts">
import { getErrorByProperty } from '../services/error';

defineProps<{ name: string }>();
</script>

<template>
    <div v-for="error in getErrorByProperty(name).value" :key="error">
        {{ error }}
    </div>
</template>

<style scoped>
div {
    width:fit-content;
    padding:0.5rem;
    border-radius:10px;
    background-color: red;
    color:white;
    font-weight: bold;
}
</style>