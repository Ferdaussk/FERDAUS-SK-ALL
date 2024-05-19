(function ($) {
	("use strict");


	// data background
	$("[data-background]").each(function () {
		$(this).css(
			"background-image",
			"url(" + $(this).attr("data-background") + ")"
		);
	});

	
	//magnific--popup--video
	$('.popup-video').magnificPopup({
		type:'iframe'
	});

	//magnific--popup--image
	$('.popup-img').magnificPopup({
		type:'image',
		gallery: {
		enabled: true
		}
	});




})(jQuery);



