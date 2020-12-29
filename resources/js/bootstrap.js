window.AOS = require('aos');
AOS.init({once: true, mirror: false});

import Swiper, {Navigation, Pagination} from "swiper";

Swiper.use([Navigation, Pagination]);

let swiper = new Swiper(
    '.swiper-container',
    {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
            waitForTransition: true
        },
        loop: true,
        effect: "fade",
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    },
);
