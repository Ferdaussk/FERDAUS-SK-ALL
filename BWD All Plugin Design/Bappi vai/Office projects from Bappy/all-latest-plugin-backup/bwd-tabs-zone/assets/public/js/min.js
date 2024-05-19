"use strict";

// minHeightAdd
function minHeightAdd(tabItem) {
  let tabWrapper = tabItem.querySelector(".bwdtz-tab-content");
  let tabBtns = tabItem.querySelectorAll(".bwdtz-nav-tabs .bwd-tab-list");
  let tabContents = tabItem.querySelectorAll(
    ".bwdtz-tab-content .bwdtz-tab-pane"
  );

  tabWrapper.style.minHeight = tabContents[0].clientHeight + "px";
  for (let i = 0; i < tabBtns.length; i++) {
    tabBtns[i].addEventListener("click", function () {
      let itemHeight = tabContents[i].clientHeight;
      tabWrapper.style.minHeight = itemHeight + "px";
    });
  }
}

function TabMaker(tab, dir, res) {
  let tabBtns = tab.querySelectorAll(".bwd-tab-list");
  let tabItems = tab.querySelectorAll(".bwdtz-tab-content .bwdtz-tab-pane");
  let progressLine = tab.querySelector(
    ".bwdtz-progress-bar .bwdtz-progress-bar-inner"
  );

  for (let i = 0; i < tabBtns.length; i++) {
    tabBtns[i].addEventListener("click", function () {
      for (let j = 0; j < tabBtns.length; j++) {
        // tab button class active/remove
        tabBtns[j].classList.remove("active");
        this.classList.add("active");

        // tab contents class active/remove
        tabItems[j].classList.remove("active");
        tabItems[i].classList.add("active");
      }

      if (progressLine) {
        let singlePgWidth = 100 / tabItems.length;
        if (dir === "width") {
          progressLine.style.width = singlePgWidth * (i + 1) + "%";
        } else if (dir === "height") {
          progressLine.style.height = singlePgWidth * (i + 1) + "%";
        }

        if (res && window.innerWidth < 768) {
          progressLine.style.height = 100 + "%";
          progressLine.style.width = singlePgWidth * (i + 1) + "%";
        }
      }
    });
  }
}

function tabPlayer() {
  let allTabCommon = document.querySelectorAll(".bwdtz-tab-common");

  for (let item of allTabCommon) {
    if (item.classList.contains("bwdtz-tab-fourteen")) {
      minHeightAdd(item);
    } else if (item.classList.contains("bwdtz-tab-eighteen")) {
      TabMaker(item, "width");
    } else if (item.classList.contains("bwdtz-tab-twenty-two")) {
      TabMaker(item, "width");
    }

    TabMaker(item);
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
            let changedCounter =
              record.addedNodes[i].querySelector(".bwdtz-tab-common");
            TabMaker(changedCounter);
          }
        }
      }
    });
  });
  observer.observe(elementorElem, {
    subtree: true,
    childList: true,
  });
}

// is counter active or not
(() => {
  let intervalId;
  if (document.querySelector(".bwdtz-tab-common")) {
    tabPlayer();
  } else {
    intervalId = setInterval(() => {
      let tabCommon = document.querySelector(".bwdtz-tab-common");
      console.log(tabCommon);
      if (tabCommon) {
        clearInterval(intervalId);
        // play counter================
        tabPlayer();
      }
    }, 300);
  }
})();

