<script setup>
import Carrousel from '@/Components/Carrousel.vue';
import MainLayout from '@/Layouts/MainLayout.vue'


defineOptions({
  layout: (h, page) => h(MainLayout, { title: 'MACH' }, () => page)
});
</script>

<template>
  <main class="p-12">
    <Carrousel/>
    <div class="flex flex-col mt-8 gap-4 bg-gradient-to-tr from-[#6059b6] to-[#000000] text-white p-8">
      <h2 class="font-bold text-2xl">Sobre nosotros</h2>
    <p>
      En MACH, somos apasionados por la tecnología y la innovación. Nuestro equipo está comprometido en ofrecer productos de alta calidad que marcan la diferencia.
    </p>
    <button class="bg-black text-white px-4 py-2 rounded max-w-32">Conocé más</button>
    </div>
    <Servicios/>
    <Contacto/>
  </main>
</template>
