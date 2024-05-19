function imgCompare(compareItem, event, direction) {
  let afterImg = compareItem.querySelector(".bwdic-compare-img .bwdic-after");
  let beforeImg = compareItem.querySelector(".bwdic-compare-img .bwdic-before");
  let sliderBar = compareItem.querySelector(
    ".bwdic-slider-bar .bwdic-drag-line"
  );
  let compareInp = compareItem.querySelector(
    ".bwdic-slider-bar .bwdic-range-inp"
  );
  let beforeText = compareItem.querySelector(".bwdic-text-before");
  let afterText = compareItem.querySelector(".bwdic-text-after");

  let compareImgWidth = beforeImg.offsetWidth + "";

  if (event === "input") {
    compareInp.addEventListener("input", (e) => {
      afterImg.style.width = e.target.value + "px";
      sliderBar.style.left = e.target.value + "px";
    });

    compareInp.setAttribute("max", compareImgWidth);
  } else if (event === "hover") {
    compareItem.addEventListener("mousemove", (e) => {
      let hoverArea = e.clientX - compareItem.offsetLeft;
      let hoverArea2 = e.clientY - compareItem.getBoundingClientRect().top;

      if (
        e.clientX >= compareItem.offsetLeft &&
        e.clientX <= compareItem.offsetLeft + compareItem.offsetWidth
      ) {
        if (
          direction === "height" &&
          e.clientY >= compareItem.getBoundingClientRect().top &&
          e.clientY <=
            compareItem.getBoundingClientRect().top + compareItem.offsetHeight
        ) {
          afterImg.style.height = hoverArea2 + "px";
          sliderBar.style.top = hoverArea2 + "px";

          let beforeTop = beforeText.getBoundingClientRect().top;
          let afterTop = afterText.getBoundingClientRect().top;
          if (afterTop < e.clientY) {
            afterText.classList.add("active");
          } else if (beforeTop + beforeText.offsetHeight > e.clientY) {
            beforeText.classList.add("active");
          } else {
            afterText.classList.remove("active");
            beforeText.classList.remove("active");
          }
        } else if (direction === "width") {
          afterImg.style.width = hoverArea + "px";
          sliderBar.style.left = hoverArea + "px";

          let beforeLeft = beforeText.getBoundingClientRect().left;
          let afterLeft = afterText.getBoundingClientRect().left;

          if (beforeLeft + beforeText.offsetWidth > e.clientX) {
            beforeText.classList.add("active");
          } else if (afterLeft < e.clientX) {
            afterText.classList.add("active");
          } else {
            afterText.classList.remove("active");
            beforeText.classList.remove("active");
          }
        }
      }
    });
  }
}

// img compare 1==========================
const compareItem1 = document.querySelector(".bwdic-compare-item-1");
imgCompare(compareItem1, "input");

window.addEventListener("resize", () => {
  imgCompare(compareItem1, "input");
});

const compareItem2 = document.querySelector(".bwdic-compare-item-2");
imgCompare(compareItem2, "input");
window.addEventListener("resize", () => {
  imgCompare(compareItem2, "input");
});

const compareItem3 = document.querySelector(".bwdic-compare-item-3");
imgCompare(compareItem3, "input");
window.addEventListener("resize", () => {
  imgCompare(compareItem3, "input");
});

const compareItem4 = document.querySelector(".bwdic-compare-item-4");
imgCompare(compareItem4, "input");
window.addEventListener("resize", () => {
  imgCompare(compareItem4, "input");
});

// img compare 2 hover==========================

const compareItem5 = document.querySelector(
  ".bwdic-compare-item-5 .bwdic-compare-img-wrapper"
);
imgCompare(compareItem5, "hover", "width");
window.addEventListener("resize", () => {
  imgCompare(compareItem5, "hover", "width");
});

const compareItem6 = document.querySelector(
  ".bwdic-compare-item-6 .bwdic-compare-img-wrapper"
);
imgCompare(compareItem6, "hover", "height");
window.addEventListener("resize", () => {
  imgCompare(compareItem6, "hover", "height");
});

const compareItem7 = document.querySelector(
  ".bwdic-compare-item-7 .bwdic-compare-img-wrapper"
);
imgCompare(compareItem7, "hover", "height");
window.addEventListener("resize", () => {
  imgCompare(compareItem7, "hover", "height");
});

const compareItem8 = document.querySelector(
  ".bwdic-compare-item-8 .bwdic-compare-img-wrapper"
);
imgCompare(compareItem8, "hover", "height");
window.addEventListener("resize", () => {
  imgCompare(compareItem7, "hover", "height");
});

// clip path img compare==========================================
function clipImgCompare(item, dir) {
  let clippingImg = item.querySelector(".bwdic-after");
  let beforeImg = item.querySelector(".bwdic-before");
  //before after text
  let beforeText = item.querySelector('.bwdic-text-before')
  let afterText = item.querySelector('.bwdic-text-after')


  let IW = beforeImg.clientWidth;
  let IH = beforeImg.clientHeight;

  let RY;
  let RX;
  beforeImg.addEventListener("mousemove", (e) => {
    let CX = e.clientX;
    let CY = e.clientY;
    let imgLDsc = beforeImg.getBoundingClientRect().left;
    let imgTDsc = beforeImg.getBoundingClientRect().top;

    let X = CX - imgLDsc;
    let Y = CY - imgTDsc;
    X = Math.floor(X);
    Y = Math.floor(Y);

    if (CY >= imgTDsc && CY <= imgTDsc + IH && dir === "h") {
      // lateRender
      setTimeout(() => {
        RY = Y;
        clippingImg.style.clipPath = `path("M 0 0 L 0 ${RY} L ${X} ${Y} L ${IW} ${RY} L ${IW} 0 L 0 0 Z")`;
      }, 200);
      clippingImg.style.clipPath = `path("M 0 0 L 0 ${RY} L ${X} ${Y} L ${IW} ${RY} L ${IW} 0 L 0 0 Z")`;


      // before text hide show
      let beforeTop = beforeText.getBoundingClientRect().top;
      let afterTop = afterText.getBoundingClientRect().top;

      if (beforeTop + beforeText.offsetHeight >= CY) {

        beforeText.classList.add("active");
      }

      else if (afterTop < CY) {
        afterText.classList.add("active");
      } else {
        afterText.classList.remove("active");
        beforeText.classList.remove("active");
      }

    } else if (CX >= imgLDsc && CX <= imgLDsc + IW && dir === "w") {

      // lateRender
      setTimeout(() => {
        RX = X;
        clippingImg.style.clipPath = `path("M 0 0 L ${RX} 0 L ${X} ${Y} L ${RX} ${IH} L 0 ${IH} L 0 0 Z")`;

      }, 200);
      clippingImg.style.clipPath = `path("M 0 0 L ${RX} 0 L ${X} ${Y} L ${RX} ${IH} L 0 ${IH} L 0 0 Z")`;


      // before text hide show
      let beforeLeft = beforeText.getBoundingClientRect().left;
      let afterLeft = afterText.getBoundingClientRect().left;

      if (beforeLeft + beforeText.offsetWidth >= CX) {
        beforeText.classList.add("active");
      }

      else if (afterLeft < CX) {
        afterText.classList.add("active");

      } else {
        afterText.classList.remove("active");
        beforeText.classList.remove("active");
      }


      
    }
  });
}




let compareItem = document.querySelector(".bwdic-compare-item-9");
clipImgCompare(compareItem, "h");

window.addEventListener("resize", () => {
  clipImgCompare(compareItem, "h");
});

let compareItem10 = document.querySelector(".bwdic-compare-item-10");
clipImgCompare(compareItem10, "w");

window.addEventListener("resize", () => {
  clipImgCompare(compareItem10, "w");
});






// // skew style
// function skewImgCompare(item){
//   let afterImg = item.querySelector(".bwdic-after");
//   let beforeImg = item.querySelector(".bwdic-before");


//   // img dimension
//   let ImgW = beforeImg.clientWidth;
//   let ImgH = beforeImg.clientHeight;


//   beforeImg.addEventListener('mousemove',(e)=>{
//     // delta value
//     let CX = e.clientX;
//     let CY = e.clientY;

//     let imgLDsc = beforeImg.getBoundingClientRect().left;
//     let imgTDsc = beforeImg.getBoundingClientRect().top;

//     let X = CX - imgLDsc;
//     let Y = CY - imgTDsc;

//     if( (CX >= imgLDsc && CX <= imgLDsc + ImgW )){
      
//       afterImg.style.width = X + 'px';
//     }

//   })



 




// }


// let compareItem11 = document.querySelector(".bwdic-compare-item-11");
// skewImgCompare(compareItem11);

// window.addEventListener("resize", () => {
//   skewImgCompare(compareItem11);
// });
