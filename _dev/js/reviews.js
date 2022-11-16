const reviewContainer = document.querySelector('.reviews')

if(reviewContainer) {

const reviews = new Swiper(".reviewCarousel", {
    autoplay: {
        delay: 4000,
        pauseOnMouseEnter: true,
    },
    slidesPerGroup: 1,
    centeredSlides: false,
    loop: true,
    slideToClickedSlide: false,
    initialSlide: -1,
    resizeEvent: 'auto',
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    watchSlidesProgress: true,
    slideVisibleClass: 'activeReview',
    // Responsive breakpoints
    breakpoints: {
        320: {
            slidesPerView: 'auto',
            spaceBetween: 10,
            centeredSlides: true,
        },

        960: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
    },

    // Navigation arrows
    navigation: {
        nextEl: '.nextReview',
        prevEl: '.prevReview',
    },
});


const activeReviews = document.querySelectorAll('.activeReview')
    activeReviews[1].classList.add('reviewOpacity')
    activeReviews[2].classList.add('reviewOpacity')


reviews.on('transitionStart', () => {
    const reviews = document.querySelectorAll('.reviews')
    const activeReviews = document.querySelectorAll('.activeReview')

    reviews.forEach((review) => {
        review.classList.remove('reviewOpacity')
    })

    activeReviews.forEach((activeReview) => {
        activeReview.classList.remove('reviewOpacity')
    })

    activeReviews[1].classList.add('reviewOpacity')
    activeReviews[2].classList.add('reviewOpacity')
})

}