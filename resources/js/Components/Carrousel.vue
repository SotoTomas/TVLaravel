<template>
  <div class="swiffy-slider slider-nav-autoplay slider-nav-autoplay-interval-3000">
    <ul class="slider-container">
      <li>
        <div class="grid grid-cols-2 items-center bg-gray-500">
          <img :src="MachPro" class="w-full h-full object-cover" />
          <h3 class="text-6xl font-semibold text-white p-4 text-center">
            Tomá la ventaja con la nueva línea <br /><span class="font-bold">MACH PRO</span>
          </h3>
        </div>
      </li>
      <li>
        <div class="grid grid-cols-2 items-center">
          <img :src="machBlanco" class="w-full h-full object-cover" />
          <h3 class="text-6xl font-semibold text-black p-4 text-center">
            O brillá con la pureza del<br /><span class="font-bold">MACH 11 BLANCO</span>
          </h3>
        </div>
      </li>
      <li>
        <div class="grid grid-cols-2 items-center bg-black">
          <img :src="MachNegro" class="w-full h-full object-cover" />
          <h3 class="text-6xl font-semibold text-white p-4 text-center">
            En MACH sabemos que el<br /><span class="font-bold">NEGRO</span> combina con todo ;)
          </h3>
        </div>
      </li>
    </ul>
    <button type="button" class="slider-nav"></button>
    <button type="button" class="slider-nav slider-nav-next"></button>
    <div class="slider-indicators">
      <button class="active"></button>
      <button></button>
      <button></button>
    </div>
  </div>
</template>

<script setup>
import { onMounted } from 'vue'
import machBlanco from '@/assets/machBlanco.webp'
import MachNegro from '@/assets/MachNegro.webp'
import MachPro from '@/assets/MachPro.webp'

onMounted(() => {
  setTimeout(() => {
    if (window.swiffyslider) {
      window.swiffyslider.init()
    }
  }, 1000)
})
</script>
