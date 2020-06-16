export default function formValidation() {
	const $submitBtn = $('#js-submit-form'),
		  $requiredInput = $('.js-required-input'),
		  validEmailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	$submitBtn.prop('disabled', true);

	function checkIfFormValid() {
		let isValid = true;
		$requiredInput.each(function() {
			if ( 
				$(this).val() === '' ||
				($(this).hasClass('js-email-input') && !validEmailRegex.test(String($(this).val()).toLowerCase()))
			) {
	        	isValid = false;
			}
	  	});

		return isValid;
	}

	$requiredInput.on('keyup', (e) => {
		if(checkIfFormValid()) {
			$submitBtn.prop('disabled', false);
		}
		else {
			$submitBtn.prop('disabled', true);
		}
	});
}