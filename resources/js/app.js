// Include jQuery directly
window.$ = window.jQuery = require('jquery');

// main css
require("../css/app.scss");

// Import AOS globally
window.AOS = require('aos');

// Make sure all jQuery code runs after DOM is ready
document.addEventListener('DOMContentLoaded', function() {
  // bootstrap js
  require('bootstrap/dist/js/bootstrap.bundle.min.js');
  // select2 js
  require('select2/dist/js/select2.min.js');
  // slick slider js
  require('slick-carousel/slick/slick.min.js');
  // aos js
  require('aos/dist/aos.js');

  // Initialize AOS
  AOS.init({
    duration: 800,
    easing: 'ease-in-out',
    once: true,
    mirror: false
  });

  // jquery marquee js
  require('jquery.marquee/jquery.marquee.min.js');
  // vanilla tilt js
  require('vanilla-tilt/dist/vanilla-tilt.min.js');
  // jquery ui js
  require('jquery-ui/ui/widgets/slider');

  // Then load your modules
  require('./modules/main');
});

// phosphor icons js
import './vendor/phosphor-icon.js';

// countdown js
import './modules/count-down.js';

import 'wowjs';
// Or try this alternative
const WOW = require('wowjs/dist/wow.js').WOW;

new WOW({
  live: false,
}).init();
import "wowjs/css/libs/animate.css";

// marquee js
require('jquery.marquee/jquery.marquee.min.js');

// vanilla tilt js
require('vanilla-tilt/dist/vanilla-tilt.min.js');
// Access VanillaTilt from the global scope after importing the script
const VanillaTilt = window.VanillaTilt;
// Or use require if the window approach doesn't work
// const VanillaTilt = require('vanilla-tilt/dist/vanilla-tilt.min.js');

VanillaTilt.init(document.querySelectorAll("[data-tilt]"), {
  max: 16,
  speed: 500,
  perspective: 5000,
  scale: 1.06,
});

// preloader
import './modules/preloader.js';

// scroll to top
import './modules/scroll-to-top-button.js';
