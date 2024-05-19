function imgCompare(compareItem, event, direction) {
  let afterImg = compareItem.querySelector(".bwd-compare-img .bwd-after");
  let beforeImg = compareItem.querySelector(".bwd-compare-img .bwd-before");
  let sliderBar = compareItem.querySelector(".bwd-slider-bar .bwd-drag-line");
  let compareInp = compareItem.querySelector(".bwd-slider-bar .bwd-range-inp");
  let beforeText = compareItem.querySelector(".bwd-text-before");
  let afterText = compareItem.querySelector(".bwd-text-after");

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
const compareItem1 = document.querySelector(".bwd-compare-item-1");
imgCompare(compareItem1, "input");

window.addEventListener('resize', ()=>{
  imgCompare(compareItem1, "input")
})




const compareItem2 = document.querySelector(".bwd-compare-item-2");
imgCompare(compareItem2, "input");
window.addEventListener('resize', ()=>{
  imgCompare(compareItem2, "input")
})






const compareItem3 = document.querySelector(".bwd-compare-item-3");
imgCompare(compareItem3, "input");
window.addEventListener('resize', ()=>{
  imgCompare(compareItem3, "input")
})





const compareItem4 = document.querySelector(".bwd-compare-item-4");
imgCompare(compareItem4, "input");
window.addEventListener('resize', ()=>{
  imgCompare(compareItem4, "input")
})


// img compare 2 hover==========================

const compareItem5 = document.querySelector(".bwd-compare-item-5 .bwd-compare-img-wrapper");
imgCompare(compareItem5, "hover", "width");
window.addEventListener('resize', ()=>{
  imgCompare(compareItem5, "hover", "width");
})





const compareItem6 = document.querySelector(".bwd-compare-item-6 .bwd-compare-img-wrapper");
imgCompare(compareItem6, "hover", "height");
window.addEventListener('resize', ()=>{
  imgCompare(compareItem6, "hover", "height");
})
