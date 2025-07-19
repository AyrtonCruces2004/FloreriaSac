import Swiper, { Navigation, Pagination, Autoplay, EffectFade } from 'swiper'
import 'swiper/css'
import 'swiper/css/navigation'
import 'swiper/css/pagination'
import 'swiper/css/effect-fade'

Swiper.use([Navigation, Pagination, Autoplay, EffectFade])

document.addEventListener('DOMContentLoaded', () => {
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
})
