(function ($) {
	("use strict");



	$('.owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		navText : ['arrow', 'arrow'],
		nav: true,
		
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:3,
			}
		}
	})





})(jQuery);



