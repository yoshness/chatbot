export default function initParallax() {
	function isInViewport(node) {
		let rect = node.getBoundingClientRect()
		return (
    		(rect.height > 0 || rect.width > 0) &&
		    rect.bottom >= 0 &&
		    rect.right >= 0 &&
		    rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
    		rect.left <= (window.innerWidth || document.documentElement.clientWidth)
  		)
	}

	$(window).scroll(function() {
	  	let scrolled = $(window).scrollTop();
	  	$('.js-parallax').each(function(index, element) {
		    let initY = $(this).offset().top;
		    let height = $(this).height();
		    let endY  = initY + $(this).height();

	    	// Check if the element is in the viewport
	    	let visible = isInViewport(this);
	    	if(visible) {
		    	let diff = scrolled - initY;
		    	let ratio = Math.round((diff / height) * 100);
		    	let speed = $(window).width() >= 768 ? $(this).data('speed') : $(this).data('speed') / 3;
		    	$(this).css('transform', `translateY(${parseInt(-(ratio * 1) * speed)}px)`);
	    	}
	  })
	})
}