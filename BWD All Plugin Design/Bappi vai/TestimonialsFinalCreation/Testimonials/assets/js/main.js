$(document).ready(function() {
    "use strict"

    //testimonial one
    $('.tbt-testimonial-one .tbt-testimonial-item-wrapper').slick({
        dots: false,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 3500,

        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 992,
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

    //testimonial two
    $('.tbt-testimonial-two .tbt-testimonial-item-wrapper').slick({
        dots: false,
        infinite: true,
        autoplaySpeed: 3500,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        autoplay: true,

        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 992,
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

    //testimonial three
    $('.tbt-testimonial-three .tbt-testimonial-item-wrapper').slick({
        dots: false,
        infinite: true,
        autoplaySpeed: 3500,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        autoplay: true,

        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,

                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }
        ]
    });

    //testimonial four
    $('.tbt-testimonial-four .tbt-testimonial-item-wrapper').slick({
        dots: false,
        infinite: true,
        autoplaySpeed: 3500,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        autoplay: true,

        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,

                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    // autoplay: true,

                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    // autoplay: true,
                }
            }
        ]
    });

    //testimonial-five
    $('.tbt-testimonial-five .tbt-testimonial-item-wrapper').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        // autoplay: true,
        autoplaySpeed: 3500,
        arrows: false,
        dots: true,
        infinite: true,
    });

    // testimonial six
    $('.tbt-slide-area').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.tbt-slide-indicators',
        autoplay: false,
        autoplaySpeed: 3000,
        infinite: true,
    });
    $('.tbt-slide-indicators').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.tbt-slide-area',
        dots: false,
        arrows: false,
        centerMode: true,
        focusOnSelect: true,
        infinite: true,
        centerPadding: 0,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,

            }
        }]
    });

    // testimonial seven
    $('.tbt-testimonial-seven .tbt-testimonial-item-wrapper').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 3500,
        arrows: true,
        dots: false,
        vertical: true,
        prevArrow: '<button class="next-btn"><i class="fas fa-chevron-down"></i></button>',
        nextArrow: '<button class="prev-btn"><i class="fas fa-chevron-up"></i></button>',
        verticalSwiping: true,
        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,

                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    // autoplay: true,

                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    arrows: true,
                    // autoplay: true,
                }
            }
        ]

    });

    // testimonial eight
    $('.tbt-testimonial-eight .tbt-testimonial-item-wrapper').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3500,
        arrows: true,
        dots: false,
        prevArrow: '<button class="next-btn"><i class="fas fa-angle-right"></i></button>',
        nextArrow: '<button class="prev-btn"><i class="fas fa-angle-left"></i></button>',
        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,

                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    // autoplay: true,

                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    arrows: false,
                    // autoplay: true,
                }
            }
        ]
    });

    //testimonial nine
    $('.tbt-testimonial-nine .tbt-testimonial-item-wrapper').slick({
        dots: false,
        infinite: true,
        autoplaySpeed: 3500,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,

        responsive: [{
                breakpoint: 1100,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
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

    // testimonial ten
    $('.tbt-testimonial-ten .tbt-testimonial-item-wrapper').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3500,
        arrows: true,
        dots: false,
        prevArrow: '<button class="next-btn"><i class="fas fa-angle-right"></i></button>',
        nextArrow: '<button class="prev-btn"><i class="fas fa-angle-left"></i></button>',
        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,

                }
            }
        ]
    });

    //testimonial eleven
    $('.tbt-testimonial-eleven .tbt-testimonial-item-wrapper').slick({
        dots: false,
        infinite: true,
        autoplaySpeed: 3500,
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: true,

        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    //testimonial twelve
    $('.tbt-testimonial-twelve .tbt-testimonial-item-wrapper').slick({
        dots: false,
        autoplay: true,
        infinite: true,
        autoplaySpeed: 3500,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        dots: false,

        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

        ]
    });

    //testimonial thirteen
    $('.tbt-testimonial-thirteen .tbt-testimonial-item-wrapper').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3500,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: true,

        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    // dots: true
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    //testimonial fourteen
    $('.tbt-testimonial-fourteen .tbt-testimonial-item-wrapper').slick({
        dots: false,
        infinite: true,
        autoplaySpeed: 3500,
        autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: true,

        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },

        ]
    });

    //testimonial fifteen
    $('.tbt-testimonial-fifteen .tbt-testimonial-item-wrapper').slick({
        dots: false,
        infinite: true,
        autoplaySpeed: 3500,
        // autoplay: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        prevArrow: '<button class="next-btn"><i class="fas fa-angle-right"></i></button>',
        nextArrow: '<button class="prev-btn"><i class="fas fa-angle-left"></i></button>',

        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                }
            }
        ]
    });
});

//39.20% for item==