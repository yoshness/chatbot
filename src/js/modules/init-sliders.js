import 'slick-carousel';

export default function initSliders() {

	$('#js-testimonies-slider').slick({
		arrows: false,
		dots: true,
		infinite: true,
		speed: 500,
		cssEase: 'ease-out',
    	centerMode: true,
  		centerPadding: '20%',
  		responsive: [
	    	{
	            breakpoint: 768,
	            settings: {
	            	centerMode: false,
	            }
	    	}
	    ]
	});

	$('#js-failure-slider').slick({
		arrows: false,
		dots: true,
		infinite: true,
		speed: 500,
		cssEase: 'ease-out',
		mobileFirst: true,
		responsive: [
	    	{
	            breakpoint: 768,
	            settings: 'unslick'
	    	}
	    ]
	});

	$('#js-flow-slider').slick({
		arrows: false,
		dots: true,
		infinite: true,
		speed: 500,
		cssEase: 'ease-out',
		mobileFirst: true,
		responsive: [
	    	{
	            breakpoint: 768,
	            settings: 'unslick'
	    	}
	    ]
	});

}