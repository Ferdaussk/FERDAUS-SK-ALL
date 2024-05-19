"use strict";
//logo filter
(() => {
  function filteringGallery(imgGallery) {
    // tooltip
    function toolTip() {
      const allItems = imgGallery.querySelectorAll(".bwdlc-brand-box-part");
      for (let i = 0; i < allItems.length; i++) {
        let allTooltips = allItems[i].getAttribute("data-tooltip");
        let toolTipWrapper = document.createElement("div");

        toolTipWrapper.setAttribute("class", "tooltip-wrapper");
        toolTipWrapper.innerText = allTooltips;
        allItems[i].appendChild(toolTipWrapper);
      }
    }
    const isEnableTooltip = imgGallery.getAttribute("data-tooltip-enable");

    if ("yes" === isEnableTooltip) {
      toolTip();
    }
    // if it is filter item
    if (imgGallery.classList.contains("bwdlc-filter-common")) {
      let filterBtns = imgGallery.querySelectorAll(
        ".bwdlc-brand-menu .bwdlc-brand-menu-btn"
      );
      let galleryImg = imgGallery.querySelectorAll(
        ".bwdlc-grid .bwdlc-grid-item"
      );

      let itemPadding = getComputedStyle(galleryImg[0], null).getPropertyValue(
        "padding"
      );
      for (let btn of filterBtns) {
        btn.addEventListener("click", () => {
          (function addRemoveBtnActiveClass() {
            for (let btnItem of filterBtns) {
              btnItem.classList.remove("active");
            }
            btn.classList.add("active");
          })();

          let filterValue = btn.getAttribute("data-filter");
          (function checkingImgFiltering() {
            function addingImgActiveClass(addItem) {
              addItem.style.padding = itemPadding;
              addItem.classList.add("active");
            }
            for (let imgItem of galleryImg) {
              // checking padding if img item has

              if (filterValue == "*") {
                addingImgActiveClass(imgItem);
              } else if (imgItem.classList.contains(filterValue)) {
                // removing img active class
                (function removingImgActiveClass() {
                  for (let imgSingleItem of galleryImg) {
                    if (!imgSingleItem.classList.contains(filterValue)) {
                      imgSingleItem.style.padding = "0";
                      imgSingleItem.style.maxWidth = "0";
                      imgSingleItem.classList.remove("active");
                    }
                  }
                })();
                addingImgActiveClass(imgItem);
              }
            }
          })();
        });
      }
    }
  }

  //all galleryFilter player
  const galleryFilterPlayer = () => {
    let allgalleryFilterCommon = document.querySelectorAll(
      ".bwdlc-brand-logo-common"
    );
    for (let item of allgalleryFilterCommon) {
      filteringGallery(item);
    }
  };

  // editMode active or not
  let bwdfgGalleryFilteringEditModeObserver = (getEditMode) => {
    // elementor render observing
    const bwdfgGalleryFilteringObserver = new MutationObserver((mutations) => {
      mutations.map((record) => {
        if (record.addedNodes.length) {
          record.addedNodes.forEach((singleItem) => {
            if (singleItem.nodeName == "DIV") {
              if (singleItem.querySelector(".bwdlc-brand-logo-common")) {
                let observedItem = singleItem.querySelector(
                  ".bwdlc-brand-logo-common"
                );
                filteringGallery(observedItem);
              }
            }
          });
        }
      });
    });

    bwdfgGalleryFilteringObserver.observe(getEditMode, {
      subtree: true,
      childList: true,
    });
  };
  // edit mode checker
  (() => {
    let bwdfgMyInterValId;
    if (
      document.querySelector(".elementor-edit-area") ||
      document.querySelector(".bwdlc-brand-logo-common")
    ) {
      galleryFilterPlayer();
    } else {
      bwdfgMyInterValId = setInterval(() => {
        let ElementorEditArea = document.querySelector(".elementor-edit-area") || document.querySelector(".page");
        
        if (ElementorEditArea) {
          clearInterval(bwdfgMyInterValId);
          // play ===============
          bwdfgGalleryFilteringEditModeObserver(ElementorEditArea);
        }
      }, 300);
    }
  })();
})();


// slider --> logo carousel
(function ($) {
  "use strict";
  $(window).on("elementor/frontend/init", function () {
    elementorFrontend.hooks.addAction(
      "frontend/element_ready/Logo_Carousel.default",
      function () {
        function sliderContainer(sliderNo) {

            let slider = null;
            let items = null;
            let loop = false;
            let slideSpeed = null;
            let autoplay = false;
            let autoplayTimeout = null;
            let hoverPause = false;
            let nav = false;
            let navType = "";
            let prevArrow = "";
            let nextArrow = "";
            let dots = false;
            let center = false;
            let stagePadding = 0;
            let desktop = null;
            let tablet = null;
            let mobile = null;
  
            function init() {
              slider = sliderNo.querySelector(".brand-logo-active");
              //get responsive item
              desktop = parseInt(slider.getAttribute("data-desktop"));
              tablet = parseInt(slider.getAttribute("data-tablet"));
              mobile = parseInt(slider.getAttribute("data-mobile"));
              stagePadding = parseInt(slider.getAttribute("data-padding"));
  
              function conditionalAttrData() {
                autoplay = slider.getAttribute("data-autoplay") === "yes" ? true : false;
  
                if (autoplay) {
                  autoplayTimeout = parseInt(
                    slider.getAttribute("data-autoplay-timeout")
                  );
                  hoverPause =
                    slider.getAttribute("data-hover-pause") === "yes"
                      ? true
                      : false;
                  loop =
                    slider.getAttribute("data-infinite-loop") === "yes"
                      ? true
                      : false;
                }
                //navigation
                let arrowNav = slider.getAttribute("data-is-arrow-nav");
  
                if (
                  slider.getAttribute("data-prev") != null &&
                  arrowNav === "yes"
                ) {
                  nav = true;
                  navType = slider.getAttribute("data-nav-type");
                  if (navType === "icon") {
                    prevArrow = `<i class="bwdlc-arrow-icon ${slider.getAttribute(
                      "data-prev"
                    )}"></i>`;
                    nextArrow = `<i class="bwdlc-arrow-icon ${slider.getAttribute(
                      "data-next"
                    )}"></i>`;
                  } else {
                    prevArrow = `<span class="bwdlc-arrow-icon">${slider.getAttribute(
                      "data-prev"
                    )}</span>`;
                    nextArrow = `<span class="bwdlc-arrow-icon">${slider.getAttribute(
                      "data-next"
                    )}</span>`;
                  }
                }
                //pagination
                if (slider.getAttribute("data-pagination") != "none") {
                  dots = true;
                  let sliderDots;

                  setTimeout(() => {
                    sliderDots = slider.querySelector(".owl-dots");
                    let dotBtns = sliderDots.querySelectorAll("button");
                    if (slider.getAttribute("data-pagination") === "dots") {
                      slider.classList.add("activeDots");
                    } else if (
                      slider.getAttribute("data-pagination") === "numbers"
                    ) {
                      slider.classList.add("activeDots");
                      for (let i = 0; i < dotBtns.length; i++) {
                        dotBtns[i].innerHTML = `<span>${i + 1}</span>`;
                      }
                    }
                  }, 300);
                }
                //center mode
                center = slider.getAttribute("data-center") === "yes" ? true : false;
              }
              conditionalAttrData();
              slideSpeed = parseInt(slider.getAttribute("data-slide-speed"));
            }
            init();

           let sliderID = sliderNo.getAttribute('id')

            $(`#${sliderID} .brand-logo-active.owl-carousel`).owlCarousel({
              loop: loop,
              nav: nav,
              autoplayTimeout: autoplayTimeout,
              autoplay: autoplay,
              autoplaySpeed: slideSpeed,
              autoplayHoverPause: hoverPause,
              items: items,
              navText: [nextArrow, prevArrow],
              dots: dots,
              center: center,
              stagePadding: stagePadding,
              margin: 15,
              responsive: {
                0: {
                  items: mobile,
                },
                768: {
                  items: tablet,
                },
                992: {
                  items: desktop,
                },
              },
            });
  
            // if tooltip is active
            function toolTip() {
              const allItems = slider.querySelectorAll(".bwdlc-brand-box-part");
  
              for (let i = 0; i < allItems.length; i++) {
                let allTooltips = allItems[i].getAttribute("data-tooltip");
                let toolTipWrapper = document.createElement("div");
  
                toolTipWrapper.setAttribute("class", "tooltip-wrapper");
                toolTipWrapper.innerText = allTooltips;
                allItems[i].appendChild(toolTipWrapper);
              }
            }
            const isEnableTooltip = slider.getAttribute("data-tooltip-enable");
            if ("yes" === isEnableTooltip) {
              toolTip();
            }
        }
        // slider call here================
          let allSlider = document.querySelectorAll(".bwdlc-logo-carousel-common");

          for (let item of allSlider) {
            sliderContainer(item);
          }
      }
    );
  });
})(jQuery);
