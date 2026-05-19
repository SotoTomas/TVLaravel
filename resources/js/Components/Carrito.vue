<script setup>
import {ref} from 'vue'
import { reactive } from 'vue'


// ref para valores que cambian, como un contador, un booleano, o un string 
const contador = ref(0)
function sumar() {
    contador.value++
}
//Para objetos con varias propiedades, usamos reactive
const usuario = reactive({
    nombre: 'Juan',
    apellido: 'Pérez',
    edad: 30
})
//Cuando laravel nos pasa propiedades, las recibimos con defineProps
//Esto es útil para pasar datos desde el servidor a nuestro componente Vue
//Por ejemplo, si Laravel pasa un mensaje, lo recibimos aquí
//defineProps es una función de Vue que nos permite definir las propiedades que nuestro componente espera recibir
const props = defineProps({
    mensaje: String 
})
function HacerAlgo() {
    alert ('Hiciste click en el botón')
    // Aquí podrías hacer algo más complejo, como llamar a una API o cambiar el estado de tu componente
}



</script>

<template>
    <button
        class="bg-blue-500 text-white font-bold py-2 px-4 rounded"
        @click="sumar">
        Contador: {{ contador }}
    </button>

    <div class="mt-4">
        <p>Nombre: {{ usuario.nombre }}</p>
        <p>Apellido: {{ usuario.apellido }}</p>
        <p>Edad: {{ usuario.edad }}</p>
    </div>

    <div class="mt-4">
        <p>Mensaje desde Laravel: {{ props.mensaje }} (No disponible hasta hacer algo con el back)</p>
    </div>

    <button @click="HacerAlgo" class="bg-blue-500 text-white font-bold py-2 px-4 rounded">Click</button>

    <!-- Condicionales -->
    <div v-if="contador > 5" class="mt-4 text-red-500">
        El contador es mayor que 5
    </div>
    <div v-else class="mt-4 text-green-500">
        El contador es 5 o menos
    </div>
</template>
