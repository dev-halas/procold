const articles = new Swiper(".homeBlog--articles", {
    autoplay: {
        delay: 4000,
        pauseOnMouseEnter: true,
    },
    slidesPerGroup: 1,
    centeredSlides: false,
    loop: true,
    slideToClickedSlide: false,
    spaceBetween: 3,
    resizeEvent: 'auto',
    // Responsive breakpoints
    breakpoints: {
        320: {
            slidesPerView: 'auto',
            spaceBetween: 10,
        },

        960: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },

    // Navigation arrows
    
    navigation: {
        nextEl: '.nextArticle',
        prevEl: '.prevArticle',
    },

});
