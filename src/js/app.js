import $ from 'jquery';
window.jQuery = $;
window.$ = $;

import initSlider from './modules/init-slider';
import initTabs from './modules/init-tabs';
import scrolLToElement from './modules/scroll-to-element';

initSlider();
initTabs();
scrolLToElement();