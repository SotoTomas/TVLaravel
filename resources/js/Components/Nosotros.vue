
<template>
  <div class="bg-gradient-to-tr from-[#000000] to-[#1a1a1a] text-white p-8">
    <h2 class="font-bold text-4xl text-center mb-8">Nosotros</h2>
    <p class="text-lg mb-4">
      En MACH, somos apasionados por la tecnología y la innovación. Nuestro equipo está comprometido en ofrecer productos de alta calidad que marcan la diferencia.
    </p>
    <p class="text-lg mb-4">
      Con años de experiencia en el sector, nos especializamos en crear soluciones que se adaptan a las necesidades de nuestros clientes, siempre con un enfoque en la excelencia y el servicio.
    </p>
    <p class="text-lg">
      Únete a nosotros y descubre cómo MACH puede transformar tu experiencia tecnológica.
    </p>
  </div>
</template>
<script setup>
import MainLayout from '@/Layouts/MainLayout.vue'

defineOptions({
  layout: (h, page) => h(MainLayout, { title: 'MACH - Nosotros' }, () => page)
});
</script>