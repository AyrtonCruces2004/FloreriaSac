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
// ==== Slider 1 ====
document.addEventListener('DOMContentLoaded', () => {
  const slides1 = document.querySelectorAll('.fade-slide');
  if (slides1.length > 0) {
    let currentFade1 = 0;

    function showSlide1(index) {
      slides1.forEach((slide, i) => {
        slide.classList.toggle('opacity-100', i === index);
        slide.classList.toggle('opacity-0', i !== index);
      });
    }

    function goToFadeSlide(index) {
      currentFade1 = index;
      showSlide1(currentFade1);
    }

    window.goToFadeSlide = goToFadeSlide;

    setInterval(() => {
      currentFade1 = (currentFade1 + 1) % slides1.length;
      showSlide1(currentFade1);
    }, 5000);

    showSlide1(0);
  }
});

// ==== Slider 2 ====
document.addEventListener('DOMContentLoaded', () => {
  const slides2 = document.querySelectorAll('.fade-slide-2');
  if (slides2.length > 0) {
    let currentFade2 = 0;

    function showSlide2(index) {
      slides2.forEach((img, i) => {
        img.classList.toggle('opacity-100', i === index);
        img.classList.toggle('opacity-0', i !== index);
      });
    }

    function goToFade2(index) {
      currentFade2 = index;
      showSlide2(currentFade2);
    }

    window.goToFade2 = goToFade2;

    setInterval(() => {
      currentFade2 = (currentFade2 + 1) % slides2.length;
      showSlide2(currentFade2);
    }, 5000);

    showSlide2(0);
  }
});
