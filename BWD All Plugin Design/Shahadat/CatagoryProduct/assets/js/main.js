(function ($) {
	("use strict");

	//carousel
	$('.bwd-owl-active.owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav: false,
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


	//isotop masonry
	var $bwdgrid = $('.bwd-catagory-item').isotope({
		itemSelector: '.grid-item',
		percentPosition: true,
		masonry: {
		  columnWidth: 1
		}
	  });
	  $bwdgrid.imagesLoaded().progress( function() {
		$bwdgrid.isotope('layout');
	  });


})(jQuery);



