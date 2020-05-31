export default function scrollToElement() {
    const $trigger = $('.js-scroll');

    $trigger.on('click', (e) => {
    	// only smooth scroll if not in company page, otherwise act as a normal anchor
    	if (window.location.href.indexOf('company') === -1) {
		    e.preventDefault();

	    	let $target = $($(e.currentTarget).attr('href').replace('/', ''));
	        if($target != '') {
	        	$('html, body').stop().animate({ scrollTop: $target.offset().top }, 1000);
	        }
		}
    });
}