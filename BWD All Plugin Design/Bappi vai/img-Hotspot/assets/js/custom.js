
"use strict"

let timeId;


// content positioning=========

function contentPositioning(allToolTipWrapper) {
  let AllToolTip = allToolTipWrapper.querySelectorAll(".bwd-hots-pot");

  for (let item of AllToolTip) {
    let pin = item.querySelector(".bwd-pin");
    let content = item.querySelector(".bwd-content");
    let arrow = content.querySelector(".bwd-arrow");

    // left/ right positioning
    if (
      pin.offsetLeft + content.offsetWidth / 2 >
      allToolTipWrapper.offsetWidth
    ) {
      let leftExtra =
        pin.offsetLeft +
        content.offsetWidth / 2 -
        allToolTipWrapper.offsetWidth;
      let exactLeft =
        pin.offsetLeft - content.clientWidth / 2 - leftExtra + "px";
      content.style.left = exactLeft;
    } else if (pin.offsetLeft < content.offsetWidth / 2) {
    } else {
      content.style.left = pin.offsetLeft - content.clientWidth / 2 + "px";
    }

    // bottom positioning
    content.style.top = pin.offsetTop + 33 + "px";
    arrow.style.bottom = "100%";


    // arrow positioning
    arrow.style.left =
    pin.offsetLeft - content.offsetLeft - arrow.offsetWidth / 2 + "px";
  }


}

function toolTipCalculation(allToolTipWrapper, event) {
  let AllToolTip = allToolTipWrapper.querySelectorAll(".bwd-hots-pot");


  contentPositioning( allToolTipWrapper);


  // clickEventToolTip============
  function clickEventToolTip(item) {
    item.classList.toggle("active");
    // remove from anyWhere

    function removeActive(e) {
      let hasContain = item.contains(e.target);

      if (!hasContain && item.classList.contains("active")) {
        item.classList.remove("active");
      }
    }
    document.addEventListener("click", removeActive);
  }
  // hover event tool tip
  function hoverEventToolTip(pin, item) {
    let content = item.querySelector(".bwd-content");
    pin.addEventListener("mousemove", () => {
      item.classList.add("active");
    });

    pin.addEventListener("mouseleave", () => {
      timeId = setTimeout(() => {
        item.classList.remove("active");
      }, 1000);
    });

    content.addEventListener("mousemove", () => {
      clearInterval(timeId);
      item.classList.add("active");
    });

    content.addEventListener("mouseleave", () => {
      timeId = setTimeout(() => {
        item.classList.remove("active");
      }, 1000);
    });
  }

  for (let i = 0; i < AllToolTip.length; i++) {
    if (event === "click") {
      AllToolTip[i].addEventListener("click", () => {
        let pin = AllToolTip[i].querySelector(".bwd-pin");
        clickEventToolTip(AllToolTip[i]);
      });
    } else if (event === "hover") {
      let pin = AllToolTip[i].querySelector(".bwd-pin");
      hoverEventToolTip(pin, AllToolTip[i]);
    }
  }
}



// hotspot one
const toolTipHotpots = document.querySelector(
  ".bwd-hotspot-area-1 .bwd-hotspots "
);
toolTipCalculation(toolTipHotpots, "hover");
window.addEventListener("resize", () => {
  contentPositioning(toolTipHotpots)
});

// hotspot two
const toolTipHotpots2 = document.querySelector(
  ".bwd-hotspot-area-2 .bwd-hotspots "
);
toolTipCalculation(toolTipHotpots2, "click");

window.addEventListener("resize", () => {
  contentPositioning(toolTipHotpots2);
});

// hotspot three
const toolTipHotpots3 = document.querySelector(
  ".bwd-hotspot-area-3 .bwd-hotspots "
);


toolTipCalculation(toolTipHotpots3, "hover");
window.addEventListener("resize", () => {
  contentPositioning(toolTipHotpots3);
});
