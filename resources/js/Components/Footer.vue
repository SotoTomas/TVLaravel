<script setup>
import whatsapp from '@/assets/whatsapp.png';
import Instagram from '@/assets/Instagram.png';
import Mail from '@/assets/Mail.png';
</script>

<template>
    <footer>
        <div>
            <div class="navegacion-footer lg:grid lg:grid-cols-3 border-t-2 border-grey-500 pt-4">
                <div class="pb-8 border-r-2 flex flex-col p-4">
                    <h4 class="font-bold pb-1">Descubir</h4>
                    <a href="" class="text-gray-500 hover:text-black">Mach 11 Echo</a>
                    <a href="" class="text-gray-500 hover:text-black">Mach 11</a>
                    <a href="" class="text-gray-500 hover:text-black">Mach 11 Pro</a>
                    <a href=""></a>
                </div>
                <div class="pb-8 border-r-2 p-4 flex flex-col">
                    <h4 class="font-bold pb-1">Acerca de Mach</h4>
                    <a href="" class="text-gray-500 hover:text-black">Newsroom</a>
                    <a href="" class="text-gray-500 hover:text-black">Directivos de Mach</a>
                    <a href="" class="text-gray-500 hover:text-black">Oportunidades laborales</a>
                    <a href="" class="text-gray-500 hover:text-black">Inversionistas</a>
                    <a href="" class="text-gray-500 hover:text-black">Ética y cumplimiento de políticas</a>
                </div>
                <div class="pb-8 p-4">
                    <h4 class="font-bold pb-1 flex flex-col">Contacto</h4>
                    <div class="inline-block max-w-12">
                        <a href="/"><img :src="whatsapp" class="pb-2" alt="whatsapp icono"></a>
                        <a href="/"><img :src="Instagram" class="pb-2" alt="Instagram icono"></a>
                        <a href="/"><img :src="Mail" class="pb-2" alt="Instagram icono"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="rights pb-4 font-thin text-gray-600 block text-center justify-between mt-11 sm:flex">
            <p>Tomás Soto. © Todos Los derechos reservados</p>
            <div class="flex my-0 justify-center gap-8">
                <a href="" class="hover:font-bold">Botón de arrepentimiento</a>
                <a href="" class="hover:font-bold">Política de Privacidad</a>
                <a href="" class="hover:font-bold">Aviso Legal</a>
                <a href="" class="hover:font-bold">Mapa del sitio</a>
            </div>
        </div>
    </footer>
</template>