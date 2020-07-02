export default function scrollToElement() {
    const $trigger = $('.js-scroll');

    $trigger.on('click', (e) => {
    	// only smooth scroll if not in company page, otherwise act as a normal anchor
    	if(window.location.href.indexOf('company') === -1) {
		    e.preventDefault();

            // if menu item is clicked, close menu first
            if($(e.currentTarget).closest('li').hasClass('menu__item')) {
                $('#js-toggle-menu').click();
            }

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
    // scroll to contact form if required fields missing
    else if(window.location.href.indexOf('message=reqcp') > 0) {
        $('html, body').stop().animate({ scrollTop: $('#js-contact-section').offset().top }, 1000);
        $('.js-company-input').addClass('is-missing');
        $('.js-person-input').addClass('is-missing');
    }
    else if(window.location.href.indexOf('message=reqpe') > 0) {
        $('html, body').stop().animate({ scrollTop: $('#js-contact-section').offset().top }, 1000);
        $('.js-person-input').addClass('is-missing');
        $('.js-email-input').addClass('is-missing');
    }
    else if(window.location.href.indexOf('message=reqce') > 0) {
        $('html, body').stop().animate({ scrollTop: $('#js-contact-section').offset().top }, 1000);
        $('.js-company-input').addClass('is-missing');
        $('.js-email-input').addClass('is-missing');
    }
    else if(window.location.href.indexOf('message=reqc') > 0) {
        $('html, body').stop().animate({ scrollTop: $('#js-contact-section').offset().top }, 1000);
        $('.js-company-input').addClass('is-missing');
    }
    else if(window.location.href.indexOf('message=reqe') > 0) {
        $('html, body').stop().animate({ scrollTop: $('#js-contact-section').offset().top }, 1000);
        $('.js-email-input').addClass('is-missing');
    }
    else if(window.location.href.indexOf('message=reqp') > 0) {
        $('html, body').stop().animate({ scrollTop: $('#js-contact-section').offset().top }, 1000);
        $('.js-person-input').addClass('is-missing');
    }
    else if(window.location.href.indexOf('message=req') > 0) {
        $('html, body').stop().animate({ scrollTop: $('#js-contact-section').offset().top }, 1000);
        $('.js-required-input').addClass('is-missing');
    }

    // scroll to contact form if email format is invalid
    if(window.location.href.indexOf('message=invalid') > 0) {
        $('html, body').stop().animate({ scrollTop: $('#js-contact-section').offset().top }, 1000);
        $('.js-email-input').addClass('is-invalid');
    }
}