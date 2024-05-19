(function ($) {
	("use strict");

	$('.aoszoom').attr({
		// "data-aos": "fade-up",
		"data-aos-duration": "800",
	});
	setTimeout(() => {
		AOS.init();
	});

	//window-loading
	$( window ).on( "load", function() {
		$("#loading").delay(2000).fadeOut(500);
		$("#loading").fadeOut(500);
	})

    //header-sidebar
    $('.single-box-header').on('click', function () {
        $('.header-sidebar').addClass('open-box');
    });
    $('.close-bttn').on('click', function () {
        $('.header-sidebar').removeClass('open-box');
    });

	// Header Sticky
	$(window).on('scroll',function() {    
		var scroll = $(window).scrollTop();
		if (scroll < 5) {
		 $(".header-scroll").removeClass("scroll-header");
		}else{
		 $(".header-scroll").addClass("scroll-header");
		}
	   });

	//mobile-menu
	jQuery('#mobile-menu').meanmenu({
		meanMenuContainer: '.mobile-menu',
		meanScreenWidth: "991"
	  });


	//Advanced-search
	$('.extra-search').on('click',function(){
	$('.header-form').addClass('header-seaech-box');
	});
	$('.header-close').on('click',function(){
	$('.header-form').removeClass('header-seaech-box');
	});

	// data background
	$("[data-background]").each(function () {
		$(this).css(
			"background-image",
			"url(" + $(this).attr("data-background") + ")"
		);
	});

	//slick--slider---animation
	function mainSlider() {
		var BasicSlider = $('.slider-active');
		BasicSlider.on('init', function(e, slick) {
			var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
			doAnimations($firstAnimatingElements);
		});
		BasicSlider.on('beforeChange', function(e, slick, currentSlide, nextSlide) {
			var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
			doAnimations($animatingElements);
		});
		BasicSlider.slick({
			autoplay: false,
			autoplaySpeed: 3000,
			dots: true,
			fade: true,
			arrows: true,
			prevArrow: '<button type="button" class="slick-prev">PREV</button>',
			nextArrow: '<button type="button" class="slick-next">NEXT</button>',
			responsive: [
				{ breakpoint: 767, settings: { dots: true, arrows: true } }
			]
		});
	
		function doAnimations(elements) {
			var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
			elements.each(function() {
				var $this = $(this);
				var $animationDelay = $this.data('delay');
				var $animationType = 'animated ' + $this.data('animation');
				$this.css({
					'animation-delay': $animationDelay,
					'-webkit-animation-delay': $animationDelay
				});
				$this.addClass($animationType).one(animationEndEvents, function() {
					$this.removeClass($animationType);
				});
			});
		}
	}
	mainSlider();

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

	//slick-portfolio
	$('.slick-portfolio').slick({
		dots: false,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev">PREV</button>',
		nextArrow: '<button type="button" class="slick-next">NEXT</button>',
		infinite: true,
		autoplay: false,
		autoplaySpeed: 3000,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 1900,
			settings: {
			slidesToShow: 4,
			slidesToScroll: 1,
			infinite: true,
			dots: false
			}
		},
		{
			breakpoint: 991,
			settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
			infinite: true,
			dots:false
			}
		},
		{
			breakpoint: 767,
			settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
			infinite: true,
			dots: false
			}
		}
		]
	});

	//testimonial-active
	$('.testimonial-active').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.testimonial-img-active'
	});
	$('.testimonial-img-active').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.testimonial-active',
		dots: false,
		autoplay: true,
		autoplaySpeed: 2000,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev">PREV</button>',
		nextArrow: '<button type="button" class="slick-next">NEXT</button>',
		centerMode: true,
		centerPadding: '0px',
		focusOnSelect: true,
		responsive: [
			{
			breakpoint: 767,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				infinite: true,
				dots: false
			}
			}
		]
	});

	//feature-active
	$('.feature-active').slick({
		dots: false,
		arrows: false,
		centerMode: true,
		centerPadding: '330px',
		autoplay: true,
		autoplaySpeed: 4000,
		slidesToShow: 1,
		responsive: [
		{
			breakpoint: 1500,
			settings: {
			arrows: false,
			centerMode: true,
			centerPadding: '230px',
			slidesToShow: 1
			}
		},
		{
			breakpoint: 1200,
			settings: {
			arrows: false,
			centerMode: true,
			centerPadding: '150px',
			slidesToShow: 1
			}
		},
		{
			breakpoint: 991,
			settings: {
			arrows: false,
			centerMode: true,
			centerPadding: '20px',
			slidesToShow: 1
			}
		},
		{
			breakpoint: 768,
			settings: {
			arrows: false,
			centerMode: true,
			centerPadding: '0',
			slidesToShow: 1
			}
		}
		]
	});
 
	//testimonial-two-active
	$('.testimonial-two-active').slick({
		dots: false,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev">PREV</button>',
		nextArrow: '<button type="button" class="slick-next">NEXT</button>',
		infinite: true,
		autoplay: false,
		autoplaySpeed: 3000,
		slidesToShow: 2,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 1900,
			settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
			infinite: true,
			dots: false
			}
		},
		{
			breakpoint: 991,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			dots:false
			}
		},
		{
			breakpoint: 767,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			dots: false
			}
		}
		]
	});

	//testimonial-three-active
	$('.testimonial-activated').slick({
		dots: true,
		arrows: false,
		infinite: true,
		autoplay: false,
		autoplaySpeed: 3000,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 1900,
			settings: {
			slidesToShow: 3,
			slidesToScroll: 1,
			infinite: true,
			dots: true
			}
		},
		{
			breakpoint: 1199,
			settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
			infinite: true,
			dots:true
			}
		},
		{
			breakpoint: 992,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			dots: true
			}
		}
		]
	});

	// brand-active
	$('.brand-active').slick({
		dots: false,
		arrows: false,
		// prevArrow: '<button type="button" class="slick-prev">PREV</button>',
		// nextArrow: '<button type="button" class="slick-next">NEXT</button>',
		infinite: true,
		autoplay: true,
		autoplaySpeed: 2500,
		centerMode: true,
		centerPadding: '0px',
		focusOnSelect: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 1900,
			settings: {
			slidesToShow: 5,
			slidesToScroll: 1,
			infinite: true,
			dots: false
			}
		},
		{
			breakpoint: 992,
			settings: {
			slidesToShow: 4,
			slidesToScroll: 1,
			infinite: true,
			dots:false
			}
		},
		{
			breakpoint: 767,
			settings: {
			slidesToShow: 3,
			slidesToScroll: 1,
			infinite: true,
			dots: false
			}
		},
		{
			breakpoint: 576,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			dots: false
			}
		}
		]
	});

	//work-latest
	$('.work-active').slick({
		dots: false,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-long-arrow-alt-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="fas fa-long-arrow-alt-right"></i></button>',
		infinite: true,
		autoplay: false,
		autoplaySpeed: 3000,
		slidesToShow: 1,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 1900,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			dots: false
			}
		},
		{
			breakpoint: 991,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			dots:false
			}
		},
		{
			breakpoint: 767,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			dots: false
			}
		}
		]
	});

	//newslater-img
	$('.newslater-img-active').slick({
		dots: true,
		arrows: false,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 3000,
		slidesToShow: 1,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 1900,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			dots: true
			}
		},
		{
			breakpoint: 991,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			dots:true
			}
		},
		{
			breakpoint: 767,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			dots: true
			}
		}
		]
	});

	//service-details
	$('.service-details-active').slick({
		dots: false,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-long-arrow-alt-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="fas fa-long-arrow-alt-right"></i></button>',
		infinite: true,
		autoplay: false,
		autoplaySpeed: 3000,
		slidesToShow: 1,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 1900,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			}
		},
		{
			breakpoint: 991,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			dots:true
			}
		},
		{
			breakpoint: 767,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			dots: true
			}
		}
		]
	});

	//portfolio-isotope
	var $grid = $('.portfolio-grid').isotope({
		itemSelector: '.grid-item',
		percentPosition: true,
		masonry: {
		// use outer width of grid-sizer for columnWidth
		columnWidth: 1
		}
	});
	// filter items on button click
	$('.portfolio-menu').on( 'click', 'button', function() {
		var filterValue = $(this).attr('data-filter');
		$grid.isotope({ filter: filterValue });
	});
	//for menu active class
	$('.portfolio-menu button').on('click', function(event) {
		$(this).siblings('.active').removeClass('active');
		$(this).addClass('active');
		event.preventDefault();
	});


	



})(jQuery);