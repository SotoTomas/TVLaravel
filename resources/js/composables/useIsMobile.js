import { ref, onMounted, onUnmounted } from 'vue'

export function useIsMobile(breakpoint = 768) {
  const isMobile = ref(window.innerWidth <= breakpoint)

  function checkScreenSize() {
    isMobile.value = window.innerWidth <= breakpoint
  }

  onMounted(() => {
    window.addEventListener('resize', checkScreenSize)
    checkScreenSize()
  })

  onUnmounted(() => {
    window.removeEventListener('resize', checkScreenSize)
  })

  return { isMobile }
}
