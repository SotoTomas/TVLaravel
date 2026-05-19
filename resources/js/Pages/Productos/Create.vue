<script setup>

import { useForm } from '@inertiajs/vue3';

const form = useForm({
    nombre: '',
    descripcion: '',
    precio: '',
    stock: '',
    imagen: null,
})
const submit = () => {
    form.post('/productos', {
        forceFormData: true,
        onStart: () => {
            form.clearErrors();
        },
        onSuccess: () => {
            form.reset();
        },
        onError: (errors) => {
            console.error(errors);
        }
    });
};

</script>
<template>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Crear Producto</h1>
       
        <form @submit.prevent="submit" class="space-y-4">
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input v-model="form.nombre" type="text" id="nombre" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
            </div>
            <div>
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea v-model="form.descripcion" id="descripcion" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required></textarea>
            </div>
            <div>
                <label for="precio" class="block text-sm font-medium text-gray-700">Precio</label>
                <input v-model="form.precio" type="number" step="0.01" id="precio" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
            </div>
            <div>
                <label for="stock" class="block text-sm font-medium text-gray-700">Stock</label>
                <input v-model="form.stock" type="number" id="stock" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
            <div>
                <label for="imagen" class="block text-sm font-medium text-gray-700">Imagen</label>
                <input type="file" id="imagen" accept=".jpg,.jpeg,.png,.gif,.webp,.avif,.svg" @change="form.image = $event.target.files[0]" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Crear Producto</button>
        </form>
        <div v-if="form.errors" class="mt-4">
            <ul class="text-red-600">
                <li v-for="(error, key) in form.errors" :key="key">{{ error }}</li>
            </ul>
        </div>
    </div>
</template>