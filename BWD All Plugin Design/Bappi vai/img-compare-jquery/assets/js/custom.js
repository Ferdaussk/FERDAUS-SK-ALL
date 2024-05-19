// jquery code================
("use strict");
$(document).ready(function () {
  function imgCompare(compareItem, event, direction) {
    let afterImg = $(compareItem + " " + ".bwdic-compare-img .bwdic-after");
    let beforeImg = $(compareItem + " " + ".bwdic-compare-img .bwdic-before");
    let sliderBar = $(compareItem + " " + ".bwdic-slider-bar .bwdic-drag-line");
    let compareInp = $(
      compareItem + " " + ".bwdic-slider-bar .bwdic-range-inp"
    );
    let beforeText = $(compareItem + " " + ".bwdic-text-before");
    let afterText = $(compareItem + " " + ".bwdic-text-after");

    let compareImgWidth = beforeImg.innerWidth();

    if (event === "input") {
      compareInp.on("input", function (e) {
        afterImg.css("width", e.target.value + "px");
        sliderBar.css("left", e.target.value + "px");
      });

      compareInp.attr("max", compareImgWidth);
    } else if (event === "hover") {
      beforeImg.on("mousemove", function (e) {
        let imgHeight = beforeImg.height();
        let imgWidth = beforeImg.width();
        let imgTopVal = beforeImg.offset().top;
        let scrollTopVal = $(document).scrollTop();

        let imgOffsetLeft = beforeImg.offset().left;
        let imgOffsetTop = imgTopVal - scrollTopVal;
        let imgOffsetHeight = imgOffsetTop + imgHeight;
        let imgOffsetWidth = imgOffsetLeft + imgWidth;

        let eventX = e.clientX;
        let eventY = e.clientY;

        // hover area ==========================
        let XHoverArea = eventX - imgOffsetLeft + "px";
        let YHoverArea = eventY - imgOffsetTop + "px";

        if (
          direction === "width" &&
          eventX >= imgOffsetLeft &&
          eventX <= imgOffsetWidth
        ) {
          afterImg.css("width", XHoverArea);
          sliderBar.css("left", XHoverArea);

          // before after text control here===================
          let beforeTxtLeft = beforeText.offset().left;
          let afterTxtLeft = afterText.offset().left;

          if (beforeTxtLeft + beforeText.width() > eventX) {
            beforeText.addClass("active");
          } else if (afterTxtLeft < eventX) {
            afterText.addClass("active");
          } else {
            beforeText.removeClass("active");
            afterText.removeClass("active");
          }
        } else if (
          direction === "height" &&
          eventY >= imgOffsetTop &&
          eventY <= imgOffsetHeight
        ) {
          afterImg.css("height", YHoverArea);
          sliderBar.css("top", YHoverArea);

          // before after text control here=========================
          let beforeTxtTop = beforeText.offset().top - $(document).scrollTop();
          let afterTxtTop = afterText.offset().top - $(document).scrollTop();

          if (beforeTxtTop + beforeText.height() > eventY) {
            beforeText.addClass("active");
          } else if (afterTxtTop < eventY) {
            afterText.addClass("active");
          } else {
            beforeText.removeClass("active");
            afterText.removeClass("active");
          }
        }
      });
    }
  }

  imgCompare("#compare-1", "input");
  imgCompare("#compare-2", "input");
  imgCompare("#compare-3", "input");
  imgCompare("#compare-4", "input");

  imgCompare("#compare-5", "hover", "width");

  imgCompare("#compare-6", "hover", "height");


  $(window).resize(function(){
    imgCompare("#compare-1", "input");
    imgCompare("#compare-2", "input");
    imgCompare("#compare-3", "input");
    imgCompare("#compare-4", "input");
  
    imgCompare("#compare-5", "hover", "width");
  
    imgCompare("#compare-6", "hover", "height");
  });
});
