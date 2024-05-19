(function ($) {
    "use strict";




// gellary-image-animation

$(".snake").snakeify({
  speed: 200
});




    // magnific-popup-active
$('.bwdfg-popup-image').magnificPopup({
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
    $('.bwdfg-grid').css({'height':'100%'});

});
}
filtering('.bwdfg-grid','.bwdfg-grid .bwdfg-grid-item','.bwdfg-gallery-menu','.bwdfg-gallery-menu button')

// filter two
filtering('.bwdfg-grid-two','.bwdfg-grid-two .bwdfg-grid-item','.bwdfg-gallery-menu-two','.bwdfg-gallery-menu-two button')
// filter three
filtering('.bwdfg-grid-three','.bwdfg-grid-three .bwdfg-grid-item','.bwdfg-gallery-menu-three','.bwdfg-gallery-menu-three button')
// filter four
filtering('.bwdfg-grid-four','.bwdfg-grid-four .bwdfg-grid-item','.bwdfg-gallery-menu-four','.bwdfg-gallery-menu-four button')
// filter five
filtering('.bwdfg-grid-five','.bwdfg-grid-five .bwdfg-grid-item','.bwdfg-gallery-menu-five','.bwdfg-gallery-menu-five button')
// filter six
filtering('.bwdfg-grid-six','.bwdfg-grid-six .bwdfg-grid-item','.bwdfg-gallery-menu-six','.bwdfg-gallery-menu-six button')
// filter seven
filtering('.bwdfg-grid-seven','.bwdfg-grid-seven .bwdfg-grid-item','.bwdfg-gallery-menu-seven','.bwdfg-gallery-menu-seven button')
// filter eight
filtering('.bwdfg-grid-eight','.bwdfg-grid-eight .bwdfg-grid-item','.bwdfg-gallery-menu-eight','.bwdfg-gallery-menu-eight button')
// filter nine
filtering('.bwdfg-grid-nine','.bwdfg-grid-nine .bwdfg-grid-item','.bwdfg-gallery-menu-nine','.bwdfg-gallery-menu-nine button')
// filter ten
filtering('.bwdfg-grid-ten','.bwdfg-grid-ten .bwdfg-grid-item','.bwdfg-gallery-menu-ten','.bwdfg-gallery-menu-ten button')
// filter eleven
filtering('.bwdfg-grid-eleven','.bwdfg-grid-eleven .bwdfg-grid-item','.bwdfg-gallery-menu-eleven','.bwdfg-gallery-menu-eleven button')
// filter twelve
filtering('.bwdfg-grid-twelve','.bwdfg-grid-twelve .bwdfg-grid-item','.bwdfg-gallery-menu-twelve','.bwdfg-gallery-menu-twelve button')
// filter thirteen
filtering('.bwdfg-grid-thirteen','.bwdfg-grid-thirteen .bwdfg-grid-item','.bwdfg-gallery-menu-thirteen','.bwdfg-gallery-menu-thirteen button')
// filter fourteen
filtering('.bwdfg-grid-fourteen','.bwdfg-grid-fourteen .bwdfg-grid-item','.bwdfg-gallery-menu-fourteen','.bwdfg-gallery-menu-fourteen button')
// filter fifteen
filtering('.bwdfg-grid-fifteen','.bwdfg-grid-fifteen .bwdfg-grid-item','.bwdfg-gallery-menu-fifteen','.bwdfg-gallery-menu-fifteen button')
// filter sixteen
filtering('.bwdfg-grid-sixteen','.bwdfg-grid-sixteen .bwdfg-grid-item','.bwdfg-gallery-menu-sixteen','.bwdfg-gallery-menu-sixteen button')
// filter seventeen
filtering('.bwdfg-grid-seventeen','.bwdfg-grid-seventeen .bwdfg-grid-item','.bwdfg-gallery-menu-seventeen','.bwdfg-gallery-menu-seventeen button')
// filter eighteen
filtering('.bwdfg-grid-eighteen','.bwdfg-grid-eighteen .bwdfg-grid-item','.bwdfg-gallery-menu-eighteen','.bwdfg-gallery-menu-eighteen button')
// filter nineteenbwdfg-
filtering('.bwdfg-grid-nineteen','.bwdfg-grid-nineteen .bwdfg-grid-item','.bwdfg-gallery-menu-nineteen','.bwdfg-gallery-menu-nineteen button')
// filter twenty
filtering('.bwdfg-grid-twenty','.bwdfg-grid-twenty .bwdfg-grid-item','.bwdfg-gallery-menu-twenty','.bwdfg-gallery-menu-twenty button')
// filter twenty-one
filtering('.bwdfg-grid-twenty-one','.bwdfg-grid-twenty-one .bwdfg-grid-item','.bwdfg-gallery-menu-twenty-one','.bwdfg-gallery-menu-twenty-one button')
// filter twenty-two
filtering('.bwdfg-grid-twenty-two','.bwdfg-grid-twenty-two .bwdfg-grid-item','.bwdfg-gallery-menu-twenty-two','.bwdfg-gallery-menu-twenty-two button')
// filter twenty-three
filtering('.bwdfg-grid-twenty-three','.bwdfg-grid-twenty-three .bwdfg-grid-item','.bwdfg-gallery-menu-twenty-three','.bwdfg-gallery-menu-twenty-three button')
// filter twenty-four
filtering('.bwdfg-grid-twenty-four','.bwdfg-grid-twenty-four .bwdfg-grid-item','.bwdfg-gallery-menu-twenty-four','.bwdfg-gallery-menu-twenty-four button')
// filter twenty-five
filtering('.bwdfg-grid-twenty-five','.bwdfg-grid-twenty-five .bwdfg-grid-item','.bwdfg-gallery-menu-twenty-five','.bwdfg-gallery-menu-twenty-five button')
// filter twenty-six
filtering('.bwdfg-grid-twenty-six','.bwdfg-grid-twenty-six .bwdfg-grid-item','.bwdfg-gallery-menu-twenty-six','.bwdfg-gallery-menu-twenty-six button')
// filter twenty-seven
filtering('.bwdfg-grid-twenty-seven','.bwdfg-grid-twenty-seven .bwdfg-grid-item','.bwdfg-gallery-menu-twenty-seven','.bwdfg-gallery-menu-twenty-seven button')
// filter twenty-eight
filtering('.bwdfg-grid-twenty-eight','.bwdfg-grid-twenty-eight .bwdfg-grid-item','.bwdfg-gallery-menu-twenty-eight','.bwdfg-gallery-menu-twenty-eight button')
// filter twenty-nine
filtering('.bwdfg-grid-twenty-nine','.bwdfg-grid-twenty-nine .bwdfg-grid-item','.bwdfg-gallery-menu-twenty-nine','.bwdfg-gallery-menu-twenty-nine button')
// filter thirty
filtering('.bwdfg-grid-thirty','.bwdfg-grid-thirty .bwdfg-grid-item','.bwdfg-gallery-menu-thirty','.bwdfg-gallery-menu-thirty button')
// filter twenty-thirty-one
filtering('.bwdfg-grid-thirty-one','.bwdfg-grid-thirty-one .bwdfg-grid-item','.bwdfg-gallery-menu-thirty-one','.bwdfg-gallery-menu-thirty-one button')

})(jQuery);



var theName = style.getPropertyCSSValue('color').getRGBColorValue();
console.log(theName);

var ferdauskhan = "Ferdaus Khan";
console.log(ferdauskhan);


