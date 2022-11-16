const hamburger = document.querySelector('.hamburger');
const header = document.querySelector('.header');
const navLinks = document.querySelectorAll('.navLinks a');

const pageHeight = window.innerHeight * 0.8;

hamburger.addEventListener('click', () => {
    header.classList.toggle('--active')
})

navLinks.forEach((navLink) => {
    navLink.addEventListener('click', () => {
        header.classList.toggle('--active');
    })
})



window.onscroll = () => {
    let top = window.scrollY;
    top >= pageHeight ? header.classList.add('scrolled') : header.classList.remove('scrolled');
};

