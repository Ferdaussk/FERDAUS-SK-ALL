(function ($) {
    "use strict";



// gellary-image-animation
$(".snake").snakeify({
  speed: 200
});
// magnific-popup-active
$('.wpskc-popup-image').magnificPopup({
    type:'image',
    gallery: {
      enabled: true
    }
});

// gellary-active
function filtering(grid,gridItem,gallery,galleryBtn){
  $(grid).imagesLoaded( function() {
    var gridM = $(grid).isotope({
      itemSelector: gridItem,
      percentPosition: true,
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: gridItem,
      }
    })
    // filter items on button click
    $(gallery).on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    gridM.isotope({ filter: filterValue });
    });
    //for gellary- menu active class
    $(galleryBtn).on('click', function(event) {
    $(this).siblings('.active').removeClass('active');
    $(this).addClass('active');
    event.preventDefault();
    });
});
}
filtering('.wpskc-grid','.wpskc-grid .wpskc-grid-item','.wpskc-gallery-menu','.wpskc-gallery-menu button')



})(jQuery);




