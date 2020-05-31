export default function scrollToElement() {
    const $trigger = $('.js-scroll');

    $trigger.on('click', (e) => {
    	// only smooth scroll if not in company page, otherwise act as a normal anchor
    	if(window.location.href.indexOf('company') === -1) {
		    e.preventDefault();

	    	let $target = $($(e.currentTarget).attr('href').replace('/', ''));
	        if($target != '') {
	        	$('html, body').stop().animate({ scrollTop: $target.offset().top }, 1000);
	        }
		}
    });

    // scroll to success message if form is sent
    if(window.location.href.indexOf('message=sent') > 0) {
    	$('html, body').stop().animate({ scrollTop: $('#js-success-message').offset().top }, 1000);
    }
}