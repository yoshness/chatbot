export default function scrollToElement() {
    const $trigger = $('.js-scroll');

    $trigger.on('click', (e) => {
    	e.preventDefault();

    	let $target = $($(e.currentTarget).attr('href'));
        if($target != '') {
        	$('html, body').stop().animate({ scrollTop: $target.offset().top }, 1000);
        }
    });
}