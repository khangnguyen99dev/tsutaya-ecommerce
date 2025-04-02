import "./bootstrap";

// jquery
import $ from "jquery";
import jQuery from "jquery";
window.$ = $;
window.jQuery =jQuery;

// slick slider js
import "slick-carousel/slick/slick.min.js";

// select2
import "select2"
import select2 from 'select2';
select2();

// wow
if (typeof window !== 'undefined') {
  import('wowjs').then((module) => {
    const WOW = module.default;
    new WOW({
      live: false,
    }).init();
  });
}

// aos init
import AOS from "aos";

// marquee js
import "jquery.marquee";

// vanilla tilt js
import VanillaTilt from "vanilla-tilt";

// import code handle
import "./vendor/phosphor-icon";
import "./modules/count-down";
import "./modules/preloader"
import "./modules/scroll-to-top-button"
import "./modules/main";

document.addEventListener("DOMContentLoaded", function () {
  $(".select2").select2();

  AOS.init({
    offset: 40,
    duration: 1000,
    easing: "ease",
  });

  VanillaTilt.init(document.querySelectorAll("[data-tilt]"), {
    max: 16,
    speed: 500,
    perspective: 5000,
    scale: 1.06,
  });
});