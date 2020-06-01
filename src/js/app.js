import $ from 'jquery';
window.jQuery = $;
window.$ = $;

import initSlider from './modules/init-slider';
import initTabs from './modules/init-tabs';
import initParallax from './modules/init-parallax';
import scrollToElement from './modules/scroll-to-element';

initSlider();
initTabs();
initParallax();
scrollToElement();