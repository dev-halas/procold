const hamburger = document.querySelector('.hamburger');
const header = document.querySelector('.header');
const navLinks = document.querySelectorAll('.navLinks a');

const langOpen = document.querySelector('.lang--active')
const langMenu = document.querySelector('.lang--more')

const pageHeight = window.innerHeight * 0.8;

hamburger.addEventListener('click', () => {
    header.classList.toggle('--active')
})

navLinks.forEach((navLink) => {
    navLink.addEventListener('click', () => {
        header.classList.toggle('--active');
    })
})


langOpen.addEventListener('click', () => {
    langMenu.classList.toggle('--open')
})

window.onscroll = () => {
    let top = window.scrollY;
    top >= pageHeight ? header.classList.add('scrolled') : header.classList.remove('scrolled');
};

