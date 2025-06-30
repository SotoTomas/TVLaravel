<script setup>
import { onMounted } from 'vue'
import machBlanco from '@/assets/machBlanco.webp'
import MachNegro from '@/assets/MachNegro.webp'
import MachPro from '@/assets/MachPro.webp'

onMounted(() => {
  if (window.swiffyslider) {
    window.swiffyslider.init();
  }
});
</script>

<template>
  <h2 class="font-bold text-4xl text-center mb-8">La última tecnología, de la mano de MACH</h2>
  <div class="flex justify-center">
    <div class="swiffy-slider">
      <ul class="slider-container bg-gradient-to-tr from-[#000000] to-[#1a1a1a]">
        <div class="grid grid-cols-2 items-center">
            <li><img :src="MachPro" class="w-full h-full object-cover"></li>
            <h3 class="top-0 text-8xl text-left font-semibold text-white p-4">Tomá la ventaja con la nueva línea <br><span class="font-bold">MACH PRO</span></h3>
        </div>
        <div class="grid grid-cols-2 items-center">
            <h3 class="top-0 text-8xl text-left font-semibold text-white p-4">O brillá con la pureza del<br><span class="font-bold">MACH 11 BLANCO</span></h3>
            <li><img :src="machBlanco" class="w-full h-full object-cover"></li>
        </div>
        <div class="grid grid-cols-2 items-center">
            <li><img :src="MachNegro" class="w-full h-full object-cover"></li>
            <h3 class="top-0 text-8xl text-left font-semibold text-white p-4">En MACH sabemos que el<br><span class="font-bold">NEGRO</span> combina con todo ;)</h3>
            </div>
      </ul>
      <button type="button" class="slider-nav"></button>
      <button type="button" class="slider-nav slider-nav-next"></button>
      <div class="slider-indicators">
        <button class="active"></button>
        <button></button>
        <button></button>
      </div>
    </div>
  </div>
</template>
