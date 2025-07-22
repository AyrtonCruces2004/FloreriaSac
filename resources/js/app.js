import Swiper, { Navigation, Pagination, Autoplay, EffectFade } from 'swiper'
import 'swiper/css'
import 'swiper/css/navigation'
import 'swiper/css/pagination'
import 'swiper/css/effect-fade'
import Scrollbar from 'smooth-scrollbar'

Swiper.use([Navigation, Pagination, Autoplay, EffectFade])

ddocument.addEventListener('DOMContentLoaded', () => {
  // Inicializa smooth-scrollbar en tu div#scroll-container
  Scrollbar.init(
    document.querySelector('#scroll-container'),
    {
      damping: 0.10,       // más inercia → más suave
      thumbMinSize: 20,
      renderByPixels: true
    }
  )
  const thumb = new Swiper('.thumb-swiper', {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  })

  // 2) Swiper principal enlazado a thumbs
  new Swiper('.product-swiper', {
    spaceBetween: 10,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    thumbs: {
      swiper: thumb
    }
  })

  // 2. Swiper principal con efecto fade
  new Swiper('.mySwiper', {
    loop: true,
    effect: 'fade',
    speed: 800,
    autoplay: { delay: 3000, disableOnInteraction: false },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: { el: '.swiper-pagination', clickable: true },
  })

  // 3. Slider 1 “fade-slide”
  const slides1 = document.querySelectorAll('.fade-slide')
  if (slides1.length > 0) {
    let currentFade1 = 0

    function showSlide1(index) {
      slides1.forEach((slide, i) => {
        slide.classList.toggle('opacity-100', i === index)
        slide.classList.toggle('opacity-0', i !== index)
      })
    }

    window.goToFadeSlide = (index) => {
      currentFade1 = index
      showSlide1(currentFade1)
    }

    setInterval(() => {
      currentFade1 = (currentFade1 + 1) % slides1.length
      showSlide1(currentFade1)
    }, 5000)

    showSlide1(0)
  }
  // Fecha → habilita el timepicker
const fechaInput = document.getElementById('fecha')
const horaInput  = document.getElementById('horario')
const iconHora   = document.getElementById('ic-hora')

fechaInput.addEventListener('change', () => {
  if (fechaInput.value) {
    horaInput.disabled = false
    horaInput.classList.remove('bg-gray-100','text-gray-500')
    horaInput.classList.add('bg-white','text-black')
    iconHora.querySelector('svg').classList.replace('text-gray-400','text-gray-500')
  } else {
    horaInput.disabled = true
    horaInput.classList.add('bg-gray-100','text-gray-500')
    horaInput.classList.remove('bg-white','text-black')
    iconHora.querySelector('svg').classList.replace('text-gray-500','text-gray-400')
  }
})

})
