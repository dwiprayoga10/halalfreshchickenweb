import './bootstrap'

import Alpine from 'alpinejs'
import intersect from '@alpinejs/intersect'

Alpine.plugin(intersect)
window.Alpine = Alpine
Alpine.start()

import Swiper from 'swiper'
import { Autoplay, Pagination } from 'swiper/modules'
import 'swiper/css'
import 'swiper/css/pagination'

new Swiper('.testimonialSwiper', {
    modules: [Autoplay, Pagination],
    slidesPerView: 1.1,
    spaceBetween: 16,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
            centeredSlides: false,
        },
        1024: {
            slidesPerView: 3,
        }
    }
})