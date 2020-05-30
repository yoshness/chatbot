import 'slick-carousel';

export default function initSlider() {
	$('#js-slider').slick({
		arrows: false,
		dots: true,
		infinite: true,
		speed: 1000,
    	centerMode: true,
  		centerPadding: '20%'
	});
}