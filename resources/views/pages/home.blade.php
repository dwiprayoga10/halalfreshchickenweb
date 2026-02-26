@extends('layouts.app')

@section('content')

    @include('partials.hero')
    @include('partials.about-business')
    @include('partials.products')
    @include('partials.visit-testimoni')
    @include('partials.kata-mereka')
    @include('partials.contact')
    @include('partials.footer')

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ================= VISIT SWIPER ================= */
    const visitSwiperEl = document.querySelector('.visit-swiper');
    if (visitSwiperEl) {
        new Swiper(visitSwiperEl, {
            loop: true,
            spaceBetween: 24,
            slidesPerView: 1,

            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },

            breakpoints: {
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
            },
        });
    }

    /* ============== TESTIMONIAL SWIPER ============== */
    const testimonialSwiperEl = document.querySelector('.testimonial-alt-swiper');
    if (testimonialSwiperEl) {
        new Swiper(testimonialSwiperEl, {
            loop: true,
            spaceBetween: 20,
            grabCursor: true,

            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },

            slidesPerView: 1,
            breakpoints: {
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
            },
        });
    }

});
</script>
@endpush