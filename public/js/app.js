// main css
import "../styles/app.scss";

// bootstrap js
import './bootstrap';

// phosphor icons js
import "./vendor/phosphor-icon.js";

// select2 js
import Select2 from '/node_modules/select2/dist/js/select2.min.js';

// slick slider js
import "/node_modules/slick-carousel/slick/slick.min.js";

// countdown js
import "./modules/count-down.js";

// jquery ui js
import "/node_modules/jquery-ui/ui/widgets/slider";

import WOW from "/node_modules/wowjs/dist/wow.js";
new WOW.WOW({
  live: false,
}).init();
import "/node_modules/wowjs/css/libs/animate.css";

// aos init
import AOS from "/node_modules/aos/dist/aos.js";
AOS.init({
  offset: 40,
  duration: 1000,
  easing: "ease",
});

// marquee js
import "/node_modules/jquery.marquee/jquery.marquee.min.js";

// vanilla tilt js
import VanillaTilt from "/node_modules/vanilla-tilt/dist/vanilla-tilt.min.js";
VanillaTilt.init(document.querySelectorAll("[data-tilt]"), {
  max: 16,
  speed: 500,
  perspective: 5000,
  scale: 1.06,
});

// preloader
import "./modules/preloader.js";

// scroll to top
import "./modules/scroll-to-top-button.js";

// main js
import "./modules/main.js";
