// Jquery
window.$ = window.jQuery = require('jquery');

// Bootstrap Js
require('bootstrap-sass');

// Jquery Easing
require('jquery.easing');

// Scripts for navbar scroll
require('./scrolling-nav');

// Own Carousel
require('./owl.carousel');

$("#owl-demo").owlCarousel({
    autoPlay: 3000, //Set AutoPlay to 3 seconds
    items: 4,
    itemsDesktop: [1199, 3],
    itemsDesktopSmall: [979, 3]
});