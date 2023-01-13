const heroExist = document.querySelector('.hero')

const heroInit = () => {

    const slides = document.querySelectorAll('.heroSlide');
    const heroNavs = document.querySelectorAll('.heroSlide--navItem');
    const numberOfSlides = slides.length;
    let currentSlide = 0;

    slides[0].classList.add('active')
    heroNavs[0].classList.add('activeTab')

    const nextSlide = () => {
        slides.forEach((slide) => {
            slide.classList.remove('active');
        })

        currentSlide++;

        (currentSlide > numberOfSlides - 1) ? (currentSlide = 0) : currentSlide;

        slides[currentSlide].classList.add('active');
    }


    heroNavs.forEach((heroNav, slideIndex) => {
        heroNav.addEventListener('click', () => {
            
            slides.forEach((e) => {
                e.classList.remove('active');
            })

            heroNavs.forEach((e) => {
                e.classList.remove('activeTab')
            })

            slides[slideIndex].classList.add('active');
            heroNavs[slideIndex].classList.add('activeTab');
        })
    })

}

if(heroExist) {
    heroInit();
}