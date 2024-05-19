// is counter active or not
let CounterChecker = () => {
  let intervalId;
  if (document.querySelector(".bwdc-counter-common")) {
    counterPlayer();
  } else {
    intervalId = setInterval(() => {
      let counterCommon = document.querySelector(".bwdc-counter-common");
      if (counterCommon) {
        clearInterval(intervalId);
        // play counter================
        counterPlayer();
      }
    }, 100);
  }
};
CounterChecker();

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
          let changedCounter = record.addedNodes[i].querySelector(
            ".bwdc-counter-common"
          );
          scrollToPlay(changedCounter);
        }
      }
    }
  });
});
observer.observe(elementorElem, {
  subtree: true,
  childList: true,
});
