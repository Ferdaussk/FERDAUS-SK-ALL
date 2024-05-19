(function ($) {
	"use strict";

	$(".bwd-pricing-tab-switcher, .bwd-tab-btn").on("click", function () {
		$(".bwd-pricing-tab-switcher, .bwd-tab-btn").toggleClass("active"),
        $(".bwd-pricing-tab").toggleClass("seleceted"),
        $(".bwd-pricing-amount").toggleClass("bwd-change-subs-duration");
	});


	$('.bwd-grid-container-active').slick({
		dots: true,
		infinite: true,
		autoplay: true,
		speed: 900,
		slidesToShow: 3,
		slidesToScroll: 1,
		nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
		prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
		dotsClass: 'slick-dots',
		responsive: [
			{
			  breakpoint: 1024,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: false,
				dots: true
			  }
			},
			{
			  breakpoint: 991,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			  }
			},
			{
			  breakpoint: 660,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			},
			{
				breakpoint: 480,
				settings: {
				  slidesToShow: 1,
				  slidesToScroll: 1
				}
			  }
		  ]
	  });

})(jQuery);