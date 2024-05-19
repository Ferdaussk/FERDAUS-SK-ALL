//selector function
function selector(elem, all) {
  return all ? document.querySelectorAll(elem) : document.querySelector(elem);
}

// split animating text==============
function splitAnimatingText(headingInner, speed = 100, delay = 1500) {
  // speed type conversion
  if (typeof speed != "number") {
    speed = parseInt(speed);
    console.log("in type condition");
  }
  // delay type conversion
  if (typeof delay != "number") {
    delay = parseInt(delay);
    console.log("in type condition");
  }

  let count = 0;
  let time2 = speed;

  // text splitting=================================

  let textContent = headingInner.innerText;
  let textSplit = textContent.split("");
  headingInner.textContent = "";

  for (let i = 0; i < textSplit.length; i++) {
    headingInner.innerHTML += `<span>${textSplit[i]}</span>`;
  }

  function spaceSpanSelect() {
    let allSpan = headingInner.querySelectorAll("span");

    for (let i = 0; i < allSpan.length; i++) {
      if (allSpan[i].textContent === " ") {
        let prevSib = allSpan[i].previousElementSibling;
        // let prevSibWidth = prevSib.clientWidth;
        // allSpan[i].style.marginRight = prevSibWidth + "px";
        allSpan[i].style.marginRight = 15 + "px";
      }
    }
  }

  function tick() {
    let span = headingInner.querySelectorAll("span")[count];

    if (count === textSplit.length) {
      time2 = delay;

      setTimeout(() => {
        let allSpan = headingInner.querySelectorAll("span");

        for (let item of allSpan) {
          item.classList.remove("fade");
        }
        count = 0;
      }, delay - 500);
    } else {
      time2 = speed;
      span.classList.add("fade");
      count++;
    }

    setTimeout(tick, time2);
  }

  spaceSpanSelect();
  tick();
}

//typing effect
function typingRoot(heading, speed = 400, delay = 1200) {
  const texts = [];
  let counter2 = 0;
  let letter = "";
  let index = 0;
  let time = speed;

  function collectText() {
    let allItems = heading.querySelectorAll(
      ".bwdah-heading-inner-wrapper .bwdah-heading-inner"
    );
    for (let item of allItems) {
      texts.push(item.textContent);
      item.textContent = "";
    }
  }

  function typing() {
    if (counter2 === texts.length) {
      counter2 = 0;
    }

    letter = texts[counter2].slice(0, ++index);
    let textBox = heading.querySelector(".bwdah-heading-inner-wrapper");
    textBox.innerHTML = letter;
    if (letter.length === texts[counter2].length) {
      counter2++;
      index = 0;
      time = delay;
    } else {
      time = speed;
    }

    setTimeout(() => {
      typing(heading);
    }, time);
  }

  collectText();
  typing();
}

//scroll animation=========
function scrollAnimation(text) {
  window.addEventListener("scroll", () => {
    let windowHeight = window.innerHeight / 2;
    let textTopHeight = text.getBoundingClientRect().top;
    if (textTopHeight < windowHeight) {
      text.classList.add("active");
    } else {
      text.classList.remove("active");
    }
  });
}

//text animation
function textAnimation(heading, duration = 1000, delay = 2000) {
  // duration & delay datatype Check
  if (typeof duration != "number") {
    duration = parseInt(duration);
  }
  if (typeof delay != "Number") {
    delay = parseInt(delay);
  }

  let count = 0;
  let allText = [];

  let headingInner2 = heading.querySelectorAll(
    ".bwdah-heading-inner-wrapper .bwdah-heading-inner"
  );

  for (let item of headingInner2) {
    allText.push(item.textContent);
    item.textContent = "";
  }

  // text rendering
  let headingWrapper = heading.querySelector(".bwdah-heading-inner-wrapper");
  headingWrapper.innerHTML = allText[count];
  headingWrapper.classList.add("active");

  setTimeout(() => {
    headingWrapper.classList.remove("active");
  }, duration);

  let mainAnimationFun = () => {
    if (count === allText.length) {
      count = 0;
    }
    headingWrapper.innerHTML = allText[count];

    setTimeout(() => {
      headingWrapper.classList.add("active");
    }, duration);

    setTimeout(() => {
      headingWrapper.classList.remove("active");
      mainAnimationFun();
    }, delay + duration);
    count++;
  };
  mainAnimationFun();
}


// splitAnimatingText start===============================
// heading 1========================
let headingInner1Inner = selector(".bwdah-animated-heading-1 .bwdah-heading-inner");
splitAnimatingText(headingInner1Inner, 500, 3000);

// heading 2========================
let headingInner2Inner = selector(".bwdah-animated-heading-2 .bwdah-heading-inner");
splitAnimatingText(headingInner2Inner);

// heading 3========================
let headingInner3Inner = selector(".bwdah-animated-heading-3 .bwdah-heading-inner");
splitAnimatingText(headingInner3Inner);

// heading 4========================
let headingInner4Inner = selector(
  ".bwdah-animated-heading-4 .bwdah-heading-inner"
);
splitAnimatingText(headingInner4Inner);

// heading 5========================
let headingInner5Inner = selector(
  ".bwdah-animated-heading-5 .bwdah-heading-inner"
);
splitAnimatingText(headingInner5Inner);

// heading 6========================
let headingInner6Inner = selector(
  ".bwdah-animated-heading-6 .bwdah-heading-inner"
);
splitAnimatingText(headingInner6Inner);

// heading 7========================
let headingInner7Inner = selector(
  ".bwdah-animated-heading-7 .bwdah-heading-inner"
);
splitAnimatingText(headingInner7Inner);

// heading 8========================
let headingInner8Inner = selector(
  ".bwdah-animated-heading-8 .bwdah-heading-inner"
);
splitAnimatingText(headingInner8Inner);

// heading 9========================
let headingInner9Inner = selector(
  ".bwdah-animated-heading-9 .bwdah-heading-inner"
);
splitAnimatingText(headingInner9Inner);

// heading 10========================
let headingInner10Inner = selector(
  ".bwdah-animated-heading-10 .bwdah-heading-inner"
);
splitAnimatingText(headingInner10Inner);

// heading 11========================
let headingInner11Inner = selector(
  ".bwdah-animated-heading-11 .bwdah-heading-inner"
);
splitAnimatingText(headingInner11Inner);

// heading 12========================
let headingInner12Inner = selector(
  ".bwdah-animated-heading-12 .bwdah-heading-inner"
);
splitAnimatingText(headingInner12Inner);

// heading 13========================
let headingInner13Inner = selector(
  ".bwdah-animated-heading-13 .bwdah-heading-inner"
);
splitAnimatingText(headingInner13Inner);

// heading 14========================
let headingInner14Inner = selector(
  ".bwdah-animated-heading-14 .bwdah-heading-inner"
);
splitAnimatingText(headingInner14Inner);
// splitAnimatingText end===============================
//==========================================
// typingRoot start===============================
// heading 15=============
const heading15 = selector(".bwdah-animated-heading-15");
typingRoot(heading15, 1000, 3000);

// heading 16=============
const heading16 = selector(".bwdah-animated-heading-16");
typingRoot(heading16);

// typingRoot end===============================
//==========================================
// scrollAnimation start===============================
// heading 17=============
let heading17 = document.querySelector(".bwdah-animated-heading-17");
scrollAnimation(heading17);

// heading 18=============
let heading18 = document.querySelector(".bwdah-animated-heading-18");
scrollAnimation(heading18);
// scrollAnimation end===============================

//==========================================

// textAnimation start===============================
// heading 19=============
const heading19 = selector(".bwdah-animated-heading-19");
textAnimation(heading19);

// heading 20=============
const heading20 = selector(".bwdah-animated-heading-20");
textAnimation(heading20);

// heading 21=============
const heading21 = selector(".bwdah-animated-heading-21");
textAnimation(heading21);

// heading 22=============
const heading22 = selector(".bwdah-animated-heading-22");
textAnimation(heading22);

// heading 23=============
const heading23 = selector(".bwdah-animated-heading-23");
textAnimation(heading23);

// heading 24=============
const heading24 = selector(".bwdah-animated-heading-24");
textAnimation(heading24);

// heading 25=============
const heading25 = selector(".bwdah-animated-heading-25");
textAnimation(heading25);

// heading 26=============
const heading26 = selector(".bwdah-animated-heading-26");
textAnimation(heading26);

// heading 27=============
const heading27 = selector(".bwdah-animated-heading-27");
textAnimation(heading27);

// heading 28=============
const heading28 = selector(".bwdah-animated-heading-28");
textAnimation(heading28);

// heading 29=============
const heading29 = selector(".bwdah-animated-heading-29");
textAnimation(heading29);

// heading 30=============
const heading30 = selector(".bwdah-animated-heading-30");
textAnimation(heading30);

// heading 31=============
const heading31 = selector(".bwdah-animated-heading-31");
textAnimation(heading31);

//==========================================
