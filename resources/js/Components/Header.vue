<script setup>
import mach from '@/assets/mach.webp';
import Icon from '@/Components/Icon.vue';
import Carrousel from './Carrousel.vue';
import {ref, onMounted, onBeforeUnmount} from 'vue';


const isMobile = ref(false)

function chequearMobile(){
    isMobile.value = window.innerWidth <= 767
}

onMounted(()=>{
    chequearMobile();
    window.addEventListener('resize', chequearMobile)
})
onBeforeUnmount(()=>{
    window.removeEventListener('resize', chequearMobile)
})

function desplegarMenu(){
    //aparece menu
    const menuDesplegable = document.querySelector('.menu-desplegable')
    menuDesplegable.classList.toggle('oculto')
    menuDesplegable.classList.toggle('desplegado')
}

</script>

<template>
    <body>
        <nav class="flex justify-between items-center bg-white px-4 pt-2 shadow-[0_4px_4px_-2px_rgba(0,0,0,0.2)]">
            <div class="icono">
               <a href="/"><img :src="mach" class="size-12 md:size-12 pb-2" alt="mach icono"/></a>
            </div>
            <div v-if="!isMobile" class="flex font-sans text-sm gap-8 font-medium pr-3">
                <a href="">Nosotros</a>
                <a href="">Productos</a>
                <a href="">Soporte</a>
                <a href=""><Icon name="search"/></a>
                <a href=""><Icon name="shopping_bag"/></a>   
            </div>
            <div v-if="isMobile" class="flex font-sans gap-8 font-medium pr-3">
                <a href=""><Icon name="search"/></a>
                <a href=""><Icon name="shopping_bag"/></a>
                <button type="button" class="menu" @click="desplegarMenu"><Icon name="menu"/></button>
            </div>
        </nav>
        <div v-if="isMobile" class="menu-desplegable oculto flex flex-col text-center bg-gray-900 opacity-70 text-white transition-all">
            <a class="hover:bg-gray-500" href="">Nosotros</a>
            <a class="hover:bg-gray-500" href="">Productos</a>
            <a class="hover:bg-gray-500" href="">Soporte</a>
        </div>
    </body>
</template>

<style>

.oculto{
    display: none;
}

</style>