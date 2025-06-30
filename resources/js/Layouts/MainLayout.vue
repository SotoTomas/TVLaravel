<script setup>
import { Head } from '@inertiajs/vue3';
import Header from '@/Components/Header.vue';
import Footer from '@/Components/Footer.vue';
defineProps({
    title: String,
});

</script>

<template>
    <Head :title="title ?? 'MACH'"/>
    <body>
        <header>
            <div class="container mx-auto">
                <Header/>
                    <slot/>
                <Footer/>
            </div>
        </header>
    </body>
</template>


<style scoped>
body{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
</style>