'use strict';

/**
 * add event on element
 */

const addEventOnElem = function (elem, type, callback) {
  if (elem.length > 1) {
    for (let i = 0; i < elem.length; i++) {
      elem[i].addEventListener(type, callback);
    }
  } else {
    elem.addEventListener(type, callback);
  }
}





/**
 * toggle navbar
 */

const navbar = document.querySelector("[data-navbar]");
const navbarLinks = document.querySelectorAll("[data-nav-link]");
const navToggler = document.querySelector("[data-nav-toggler]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  navToggler.classList.toggle("active");
}

addEventOnElem(navToggler, "click", toggleNavbar);

const closeNavbar = function () {
  navbar.classList.remove("active");
  navToggler.classList.remove("active");
}

addEventOnElem(navbarLinks, "click", closeNavbar);



/**
 * header active
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

window.addEventListener("scroll", function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
});

function showHamburger(){
  var hamburger_icon = document.querySelector("icon");
  if (hamburger_icon.style.display == "none") {
      hamburger_icon.style.display = "flex";
      hamburger_icon.style.flexDirection = "column";
  }else if (hamburger_icon.style.display == "flex") {
      hamburger_icon.style.display = "none";
  }
}



jQuery(document).ready(function($){
  $(".owl-carousel").owlCarousel({
      items: 1, // menampilkan satu item per slide
      loop: true,
      autoplay: true,
      autoplayTimeout: 5000, // waktu per slide
      autoplayHoverPause: true
  });
});



