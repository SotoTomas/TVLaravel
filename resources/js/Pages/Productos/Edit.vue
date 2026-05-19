<script setup>
import { useForm } from '@inertiajs/vue3'
const props = defineProps({ producto: Object })

const form = useForm({
  nombre: props.producto.nombre,
  descripcion: props.producto.descripcion,
  precio: props.producto.precio,
  stock: props.producto.stock,
  imagen: null,
})

const submit = () => {
  form.post(`/productos/${props.producto.id}`, {
    forceFormData: true,
    preserveScroll: true,
    onStart: () => form.clearErrors(),
    onSuccess: () => console.log('Actualizado'),
    onError: (errors) => console.error(errors),
    method: 'put',
  })
}
</script>

<template>
  <div class="p-8 max-w-xl mx-auto">
    <h1 class="text-3xl font-bold mb-6">Editar producto</h1>

    <form @submit.prevent="submit" class="space-y-6">
      <div>
        <label class="block mb-1 font-semibold">Nombre</label>
        <input v-model="form.nombre" type="text" class="w-full border p-2 rounded" />
        <div v-if="form.errors.nombre" class="text-red-500 text-sm mt-1">{{ form.errors.nombre }}</div>
      </div>

      <div>
        <label class="block mb-1 font-semibold">Descripción</label>
        <textarea v-model="form.descripcion" class="w-full border p-2 rounded"></textarea>
        <div v-if="form.errors.descripcion" class="text-red-500 text-sm mt-1">{{ form.errors.descripcion }}</div>
      </div>

      <div>
        <label class="block mb-1 font-semibold">Precio</label>
        <input v-model="form.precio" type="number" step="0.01" class="w-full border p-2 rounded" />
        <div v-if="form.errors.precio" class="text-red-500 text-sm mt-1">{{ form.errors.precio }}</div>
      </div>

      <div>
        <label class="block mb-1 font-semibold">Stock</label>
        <input v-model="form.stock" type="number" class="w-full border p-2 rounded" />
        <div v-if="form.errors.stock" class="text-red-500 text-sm mt-1">{{ form.errors.stock }}</div>
      </div>

      <div>
        <label class="block mb-1 font-semibold">Nueva Imagen (opcional)</label>
        <input type="file" @change="form.imagen = $event.target.files[0]" accept="image/*" class="w-full border p-2 rounded" />
        <div v-if="form.errors.imagen" class="text-red-500 text-sm mt-1">{{ form.errors.imagen }}</div>
      </div>

      <div v-if="producto.imagen" class="mt-4">
        <p class="mb-2">Imagen actual:</p>
        <img :src="`/storage/${producto.imagen}`" alt="Imagen actual" class="w-40 h-auto rounded border" />
      </div>

      <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700" :disabled="form.processing">
        Actualizar
      </button>
    </form>
  </div>
</template>
