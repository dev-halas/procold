/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_styles_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(6);
/* harmony import */ var _css_styles_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_css_styles_scss__WEBPACK_IMPORTED_MODULE_0__);
__webpack_require__(1);
__webpack_require__(2);
__webpack_require__(3);
__webpack_require__(4);
__webpack_require__(5);



/***/ }),
/* 1 */
/***/ (function(module, exports) {

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



/***/ }),
/* 2 */
/***/ (function(module, exports) {

const slides = document.querySelectorAll('.heroSlide');
const heroNavs = document.querySelectorAll('.heroSlide--navItem');
const numberOfSlides = slides.length;
let currentSlide = 0;

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

/***/ }),
/* 3 */
/***/ (function(module, exports) {

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


/***/ }),
/* 4 */
/***/ (function(module, exports) {

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



/***/ }),
/* 5 */
/***/ (function(module, exports) {

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

/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ })
/******/ ]);