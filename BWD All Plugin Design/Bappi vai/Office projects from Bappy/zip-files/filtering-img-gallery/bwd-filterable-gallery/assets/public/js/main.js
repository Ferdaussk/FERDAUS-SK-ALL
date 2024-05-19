(function ($) {
  "use strict";
  $(window).on("elementor/frontend/init", function () {
    elementorFrontend.hooks.addAction(
      "frontend/element_ready/NameFilterableGallery.default",
      function ($scope) {
        // gellary-image-animation
        $(".snake").snakeify({
          speed: 200,
        });

        // magnific-popup-active
        $(".bwdfg-popup-image").magnificPopup({
          type: "image",
          gallery: {
            enabled: true,
          },
        });
      }
    );
  });
})(jQuery);

//filterable gallery
("use strict");
function filteringGallery(imgGallery) {
  let filterBtns = imgGallery.querySelectorAll(
    ".bwdfg-my-commonsk-class .bwdfg-menu-item"
  );
  let galleryImg = imgGallery.querySelectorAll(
    ".bwdfg-grid-common .bwdfg-grid-item"
  );

  let itemPadding = getComputedStyle(galleryImg[0],null).getPropertyValue("padding");


  for (let btn of filterBtns) {
    // add click event to btn
    btn.addEventListener("click", () => {
      // add or remove button active class
      (function addRemoveBtnActiveClass() {
        for (let btnItem of filterBtns) {
          btnItem.classList.remove("active");
        }
        btn.classList.add("active");
      })();

      // get clicked button data-filter value
      let filterValue = btn.getAttribute("data-filter");

      //gallery img filtering by filter value
      (function checkingImgFiltering() {

        // adding Active Class to img
        function addingImgActiveClass(addItem) {
          addItem.style.padding = itemPadding;
          addItem.classList.add("bwdfg-img-galleryItem-active");
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
                  imgSingleItem.classList.remove("bwdfg-img-galleryItem-active");
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

//all galleryFilter player
const galleryFilterPlayer = () => {
  let allgalleryFilterCommon = document.querySelectorAll(
    ".bwdfg-gallery-filtering-common"
  );
  for (item of allgalleryFilterCommon) {
    filteringGallery(item);
  }

  // elementor render observing
  let elementorElem = document.querySelector(".elementor-element");
  const observer = new MutationObserver((mutations) => {
    mutations.forEach((record) => {
      if (record.addedNodes.length) {
        for (let i = 0; i < record.addedNodes.length; i++) {
          if (
            record.addedNodes[i].nodeName === "DIV" &&
            record.addedNodes[i].className === "elementor-widget-container"
          ) {
            let changedgalleryFilter = record.addedNodes[i].querySelector(
              ".bwdfg-gallery-filtering-common"
            );
            filteringGallery(changedgalleryFilter);
          }
        }
      }
    });
  });
  observer.observe(elementorElem, {
    subtree: true,
    childList: true,
  });
};

// is galleryFilter active or not
(() => {
  let intervalId;
  if (document.querySelector(".bwdfg-gallery-filtering-common")) {
    galleryFilterPlayer();
  } else {
    intervalId = setInterval(() => {
      let galleryFilterCommon = document.querySelector(
        ".bwdfg-gallery-filtering-common"
      );
      if (galleryFilterCommon) {
        clearInterval(intervalId);
        // play galleryFilter================
        galleryFilterPlayer();
      }
    }, 100);
  }
})();
