import $ from 'jquery';
window.jQuery = $;
window.$ = $;

import initSliders from './modules/init-sliders';
import initTabs from './modules/init-tabs';
import initParallax from './modules/init-parallax';
import scrollToElement from './modules/scroll-to-element';
import toggleMenu from './modules/toggle-menu';

initSliders();
initTabs();
initParallax();
scrollToElement();
toggleMenu();