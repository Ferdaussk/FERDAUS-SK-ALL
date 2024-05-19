(function ($) {
  "use strict";
  $(window).on("elementor/frontend/init", function () {
    elementorFrontend.hooks.addAction("frontend/element_ready/BWDSlider.default",
      function () {
        let desktop = 3;
        let tablet = 2;
        let mobile = 1;
        const sliderMain = {
          options: {
            slider: null,
            items: null,
            loop: false,
            slideSpeed: null,
            slideBy:null,
            autoplay:false,
            autoplayTimeout:null,
            hoverPause: false,
            nav:false,
            navType:'',
            prevArrow:'',
            nextArrow: '',
            dots:false,
          },

          init: function(){
            sliderMain.options.slider = document.querySelector('.bwdsd-slides');
            //get responsive item
            function sliderPerValueCollector(){

              
              console.log('document resize or clicked');
                setTimeout(() => {
                  const elementorPanel = window.elementor.panel.el.querySelector('#elementor-controls');
                  const viewDevices = [elementorPanel.querySelector('.elementor-control-bwdsd_slider_per_view input'),
                  elementorPanel.querySelector('.elementor-control-bwdsd_slider_per_view_tablet input'),
                  elementorPanel.querySelector('.elementor-control-bwdsd_slider_per_view_mobile input')
                  ];
                  viewDevices.forEach((device) => {
                    device.addEventListener('input',(e)=>{;
                      if(device.getAttribute('data-setting') === 'bwdsd_slider_per_view'){
                        desktop =  parseInt(device.value);
                        owlSlider()
                      }else if(device.getAttribute('data-setting') === 'bwdsd_slider_per_view_tablet'){
                        tablet = parseInt(device.value);
                        owlSlider()
                    
                      }else if(device.getAttribute('data-setting') === 'bwdsd_slider_per_view_mobile'){
                        mobile =  parseInt(device.value);
                        owlSlider()
                      }
                    });
                  })

              }, 200);
            }

            sliderMain.options.slider.addEventListener('click', sliderPerValueCollector);
            window.addEventListener('resize',sliderPerValueCollector);

            function laterCall(){
              setTimeout(() => {
                console.log(desktop);
              }, 300);
  
            }


            //get responsive item
            sliderMain.options.items = parseInt(this.options.slider.getAttribute('data-slide-item'));
            
            function conditionalAttrData(){
              sliderMain.options.autoplay = sliderMain.options.slider.getAttribute('data-autoplay') === 'yes'? true : false;
              sliderMain.options.slideBy = sliderMain.options.slider.getAttribute('data-slide-by') === 'left' ? 1 : 2;
              if( sliderMain.options.autoplay){
                sliderMain.options.autoplayTimeout = parseInt(sliderMain.options.slider.getAttribute('data-autoplay-timeout'));
                sliderMain.options.hoverPause = sliderMain.options.slider.getAttribute('data-hover-pause') === 'yes'? true : false;
                sliderMain.options.loop = sliderMain.options.slider.getAttribute('data-infinite-loop') === 'yes'? true : false;
              }
              //navigation
              if(sliderMain.options.slider.getAttribute('data-prev') != null){
                sliderMain.options.nav = true;
                sliderMain.options.navType = sliderMain.options.slider.getAttribute('data-nav-type');
                if(sliderMain.options.navType === 'icon'){
                  sliderMain.options.prevArrow = `<i class="bwdsd-arrow-icon ${sliderMain.options.slider.getAttribute('data-prev')}"></i>`;
                  sliderMain.options.nextArrow = `<i class="bwdsd-arrow-icon ${sliderMain.options.slider.getAttribute('data-next')}"></i>`;
                  
                }else {
                  sliderMain.options.prevArrow = `<span class="bwdsd-arrow-icon">${sliderMain.options.slider.getAttribute('data-prev')}</span>`;
                  sliderMain.options.nextArrow = `<span class="bwdsd-arrow-icon">${sliderMain.options.slider.getAttribute('data-next')}</span>`;
                }
              }
              //pagination
              if(sliderMain.options.slider.getAttribute('data-pagination') != 'none'){
                sliderMain.options.dots = true;
                let sliderDots;
                setTimeout(() => {
                  sliderDots = sliderMain.options.slider.querySelector('.owl-dots');
                  let dotBtns = sliderDots.querySelectorAll('button');
                  if(sliderMain.options.slider.getAttribute('data-pagination') === 'dots'){
                    sliderMain.options.slider.classList.add('activeDots');
                  }else if(sliderMain.options.slider.getAttribute('data-pagination') === 'bullets'){
                    sliderMain.options.slider.classList.add('activeDots');
                    for(let i = 0; i <  dotBtns.length; i++){
                      dotBtns[i].innerHTML = `<span>${i + 1}</span>`;
                    }
                  }else if(sliderMain.options.slider.getAttribute('data-pagination') === 'fraction'){
                    let slideItems = sliderMain.options.slider.querySelectorAll('.owl-item');
                    // let slideSr =  slideItems.indexOf('active');
                    dotBtns[1].innerHTML = `<span>${slideItems.length}</span>`;
                    
                  }
                }, 500);
              }
            }
            conditionalAttrData()
            sliderMain.options.slideSpeed = parseInt(this.options.slider.getAttribute('data-slide-speed'));
          }
        }
        sliderMain.init();
        function owlSlider(){
          setTimeout(() => {
            $('.bwdsd-slides.owl-carousel').owlCarousel({
              loop:sliderMain.options.loop,
              margin:15,
              nav:sliderMain.options.nav,
              autoplayTimeout:sliderMain.options.autoplayTimeout,
              autoplay:sliderMain.options.autoplay,
              autoplaySpeed:sliderMain.options.slideSpeed,
              autoplayHoverPause:sliderMain.options.hoverPause,
              slideBy:sliderMain.options.slideBy,
              items: sliderMain.options.items,
              navText:[sliderMain.options.nextArrow, sliderMain.options.prevArrow],
              dots:sliderMain.options.dots,
              dotsEach: true,
              responsive:{
                  0:{
                      items:mobile
                  },
                  768:{
                    items:tablet
                  },
                  992:{
                    items:desktop
                  }
              }

          })
          }, 400);
        }
        owlSlider()
      }
    );
  });
})(jQuery);
