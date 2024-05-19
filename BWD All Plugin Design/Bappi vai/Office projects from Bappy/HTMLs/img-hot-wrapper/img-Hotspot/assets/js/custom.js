"use strict";



function toolTipMaker(spotsContainer) {
const AllToolTip = spotsContainer.querySelectorAll(".bwd-hots-pot");
  let timeId;
  let arrowHalfWidth

  // content positioning=========
  function contentPositioning() {
    for (let item of AllToolTip) {
      let pin = item.querySelector(".bwd-pin");
      let content = item.querySelector(".bwd-content");
      let arrow = content.querySelector(".bwd-arrow");
      let contentHalfWidth =  content.offsetWidth / 2;
      arrowHalfWidth =  arrow.offsetWidth / 2;
      let pinLeft = pin.offsetLeft;

      function contentBoxPositioning(){
        // left/ right content positioning
        if (pinLeft + contentHalfWidth > spotsContainer.offsetWidth) {
            let leftExtra = pinLeft + contentHalfWidth - spotsContainer.offsetWidth;
            let exactLeft = pinLeft - contentHalfWidth - leftExtra + "px";
            content.style.left = exactLeft;

        } else if (pinLeft < contentHalfWidth) {
            content.style.left = '0';
        }
        else {
            content.style.left = pinLeft - contentHalfWidth + "px";
        }
        // bottom positioning
        content.style.top = pin.offsetTop + 33 + "px";
    }
    contentBoxPositioning()
    
      // arrow positioning
      let contentLeft = content.getBoundingClientRect().left
      console.log('pin left ' + pinLeft ,'  content left ' + contentLeft );
      arrow.style.left = (pinLeft - content.offsetLeft - arrowHalfWidth) + "px";
    }
  }
  
  function toolTipCalculation(event) {
    contentPositioning();

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
        clearTimeout(timeId);
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
  toolTipCalculation('hover')

// pin will moving when dragging
  function toolTipDrag() {
    for (let item of AllToolTip) {
      let pin = item.querySelector(".bwd-pin");
      pin.setAttribute("draggable", true);

      let wrapperHeight = spotsContainer.clientHeight;
      let wrapperWidth = spotsContainer.clientWidth;

      pin.addEventListener("drag", () =>{
        pin.classList.add('bwd-drag-cursor');
      })

      pin.addEventListener("dragend", (e) => {
        let spotsWrapperTop = spotsContainer.getBoundingClientRect().top;
        let spotsWrapperLeft = spotsContainer.getBoundingClientRect().left;
        let mouseY = e.clientY - spotsWrapperTop;
        let mouseX = e.clientX - spotsWrapperLeft;
        if ((mouseY > arrowHalfWidth && mouseX > arrowHalfWidth)) {
          pin.style.top = (100 * mouseY) / wrapperHeight + "%";
          pin.style.left = (100 * mouseX) / wrapperWidth + "%";
          contentPositioning();
        }
      });
    }
  }



  toolTipDrag();
  window.addEventListener("resize", () => {
    contentPositioning();
  });

}

const toolTipsContainer = document.querySelector(".bwd-hotspot-area-1 .bwd-hotspots");
toolTipMaker(toolTipsContainer);
