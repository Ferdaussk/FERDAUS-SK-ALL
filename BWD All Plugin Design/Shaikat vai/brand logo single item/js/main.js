(function ($) {
    "use strict";





  
  


function sliderController(slider, arrow , slideShow, dots, centerMode, centerPadding){
  $(slider).slick({
    dots: dots,
    centerMode: centerMode,
    centerPadding: centerPadding,
    infinite: true,
    speed: 1000,
    slidesToShow: slideShow,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    arrows: arrow,
    prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
}




let brandLogo1 = document.querySelector('.bwd-brand-logo-1 .brand-logo-active');
sliderController(brandLogo1 , false , 5)
let brandLogo2 = document.querySelector('.bwd-brand-logo-2 .brand-logo-active');
sliderController(brandLogo2 , false , 5)
let brandLogo3 = document.querySelector('.bwd-brand-logo-3 .brand-logo-active');
sliderController(brandLogo3 , false , 5)
let brandLogo4 = document.querySelector('.bwd-brand-logo-4 .brand-logo-active');
sliderController(brandLogo4 , false , 5)
let brandLogo5 = document.querySelector('.bwd-brand-logo-5 .brand-logo-active');
sliderController(brandLogo5 , true , 6)
let brandLogo6 = document.querySelector('.bwd-brand-logo-6 .brand-logo-active');
sliderController(brandLogo6 , false , 6)
let brandLogo7 = document.querySelector('.bwd-brand-logo-7 .brand-logo-active');
sliderController(brandLogo7 , true , 6)
let brandLogo8 = document.querySelector('.bwd-brand-logo-8 .brand-logo-active');
sliderController(brandLogo8 , true , 6, true)
let brandLogo15 = document.querySelector('.bwd-brand-logo-15 .brand-logo-active');
sliderController(brandLogo15 , true , 5, false)
let brandLogo18 = document.querySelector('.bwd-brand-logo-18 .brand-logo-active');
sliderController(brandLogo18 , true , 5, false, true, 0)





// $('.center').slick({
//   centerMode: true,
//   centerPadding: 0,
//   slidesToShow: 5,
//   responsive: [
//     {
//       breakpoint: 768,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         centerPadding: '40px',
//         slidesToShow: 3
//       }
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         centerPadding: '40px',
//         slidesToShow: 1
//       }
//     }
//   ]
// });





// tool-tip-active

  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  })  





  // portfolio-active
  $('.bwd-grid').imagesLoaded( function() {

    var grid = $('.bwd-grid').isotope({
      itemSelector: '.bwd-grid-item',
      percentPosition: true,
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: '.bwd-grid-item'
      }
    })

// filter items on button click
$('.bwd-brand-menu').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  grid.isotope({ filter: filterValue });
});


//for portfolio- menu active class
$('.bwd-brand-menu button').on('click', function(event) {
$(this).siblings('.active').removeClass('active');
$(this).addClass('active');
event.preventDefault();
});

});








// use jquery cdn


	
	$("#menu li button").click(function(){
		
		// add and remove active class on menu button
			$("#menu li button").removeClass('active');
		  $(this).addClass('active');
		// end
		
		var targeted_item = $(this).data('target');
		
		if(targeted_item === "all"){
			$(".single-item").fadeIn(); // show all
		}else{
			$(".single-item").hide(); // hide all
		  $("."+targeted_item).fadeIn(1000); // show clicked item
		}
		
		
		
	})
	
	
	
	















})(jQuery);




