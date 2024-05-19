(function($){
   "use strict";



  
  // Sticky Header

    $(window).on('scroll',function() {    
      var scroll = $(window).scrollTop();
      if (scroll < 245) {
       $(".sticky").removeClass("scroll-header");
    }else{
    $(".sticky").addClass("scroll-header");
      }
     });

  //  Back To Top

var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '5000');
});

 
    // // // init Isotope
var $grid = $('.item-details').isotope({
  // options
});
// filter items on button click
$('.item-menu').on( 'click', 'li', function() {
  var filterValue = $(this).attr('data-filter');
 $grid.isotope({ filter: filterValue });
});
//for menu active class
$('.item-menu li').on('click', function(event) {
	$(this).siblings('.active').removeClass('active');
	$(this).addClass('active');
	event.preventDefault();
});

 //mean-menu
 jQuery('#mobile-menu').meanmenu({
   meanMenuContainer: '.mobile-menu',
   meanScreenWidth: "991",
   meanShowChildren: 'false',
 });




})(jQuery);