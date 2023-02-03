let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
};

window.onscroll = () =>{
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
  loop:true,
  spaceBetween:20,
  grabCursor:true,
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
});

var swiper = new Swiper(".service-slider", {
  loop:true,
  spaceBetween:20,
  grabCursor:true,
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  breakpoints: {
    450: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1000: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".reviews-slider", {
  loop:true,
  spaceBetween:20,
  grabCursor:true,
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  breakpoints: {
    450: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1000: {
      slidesPerView: 3,
    },
  },
});