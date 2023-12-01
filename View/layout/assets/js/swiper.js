// HERO
var swiper = new Swiper(".swiperXL", {
  grabCursor: true,
  loop: true,
  effect: "creative",
  creativeEffect: {
    prev: {
      opacity: 0,
      translate: [0, 0, -400],
    },
    next: {
      translate: ["100%", 0, 0],
    },
  },
});

var swiper = new Swiper(".heroSwiper", {
  loop: true,
  spaceBetween: 30,

  pagination: {
    el: ".hero-swiper-pagination",
    dynamicBullets: true,
    clickable: true,
  },
});

// REVIEW
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,

  navigation: {
    nextEl: ".review-slider-next",
    prevEl: ".review-slider-prev",
  },

  breakpoints: {
    340: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
  },
});
