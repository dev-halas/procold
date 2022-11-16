const swiper = new Swiper('.logoCarousel', {
    loop: true,
    grabCursor: false,
    speed: 4000,
    allowTouchMove: false,
    autoplay: {
        delay: 0,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    spaceBetween: 30,

    // Responsive breakpoints
    breakpoints: {
        320: {
            slidesPerView: 2,
            spaceBetween: 20,
        },

        960: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        1300: {
            slidesPerView: 5,
            spaceBetween: 40,
        },
    },
});

