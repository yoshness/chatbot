export default function heroAnimation() {
	const IS_SHOWN = 'is-shown',
	      $heroWrapper = $('#js-hero'),
	      $heroPhone1 = $('#js-hero-phone-1'),
	      $heroPhone2 = $('#js-hero-phone-2'),
	      $heroTitle = $('#js-hero-title'),
	      $heroDescription = $('#js-hero-description'),
	      $heroBottom = $('#js-hero-bottom'),
	      $heroLogo = $('#js-hero-logo'),
	      $heroScroll = $('#js-hero-scroll'),
	      $header = $('#js-header');

	if($(window).width() < 768) {
		$(window).on('load', () => {
		    $heroWrapper.addClass(IS_SHOWN).delay(300).queue((next) => {
		        $heroLogo.addClass(IS_SHOWN).delay(300).queue((next) => {
		            $heroTitle.addClass(IS_SHOWN).delay(300).queue((next) => {
		                $heroDescription.addClass(IS_SHOWN).delay(700).queue((next) => {
		                  $heroBottom.addClass(IS_SHOWN).delay(1000).queue((next) => {
		                  	$heroPhone2.addClass(IS_SHOWN).delay(1000).queue((next) => {
			                    $header.addClass(IS_SHOWN);
			                  });
		                  });
		                });
		            });
		        });
		    });
		});
	}
	else {
		$(window).on('load', () => {
		    $heroWrapper.addClass(IS_SHOWN).delay(300).queue((next) => {
		        $heroPhone1.addClass(IS_SHOWN).delay(300).queue((next) => {
		            $heroPhone2.addClass(IS_SHOWN).delay(300).queue((next) => {
		                $heroTitle.addClass(IS_SHOWN).delay(300).queue((next) => {
		                  $heroDescription.addClass(IS_SHOWN).delay(300).queue((next) => {
		                  	$heroBottom.addClass(IS_SHOWN).delay(300).queue((next) => {
			                    $header.addClass(IS_SHOWN);
			                    $heroScroll.addClass(IS_SHOWN);
			                  });
		                  });
		                });
		            });
		        });
		    });
		});
	}
}