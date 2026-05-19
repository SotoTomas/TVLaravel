<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
const props = defineProps({
  productos: Array
})
defineOptions({
  layout: (h, page) => h(MainLayout, { title: 'MACH' }, () => page)
});



</script>

<template>
  <div class="p-8 max-w-7xl mx-auto">
    <h1 class="text-3xl font-bold mb-6">Listado de Productos</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div v-for="producto in productos" :key="producto.id" class="border rounded-lg shadow p-4">
        <img
          v-if="producto.imagen"
          :src="`/storage/${producto.imagen}`"
          alt="Imagen del producto"
          class="w-full h-48 object-cover rounded mb-4"
        />
        <h2 class="text-xl font-semibold mb-2">{{ producto.nombre }}</h2>
        <p class="text-gray-700 mb-1">{{ producto.descripcion }}</p>
        <p class="font-bold text-lg text-blue-600 mb-2">$ {{ producto.precio }}</p>
        <p class="text-sm text-gray-600">Stock: {{ producto.stock }}</p>
      </div>
    </div>
  </div>
</template>
