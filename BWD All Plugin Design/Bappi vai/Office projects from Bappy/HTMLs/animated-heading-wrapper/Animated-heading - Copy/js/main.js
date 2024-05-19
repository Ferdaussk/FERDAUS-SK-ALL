//selector function
function selector(elem, all) {
  return all ? document.querySelectorAll(elem) : document.querySelector(elem);


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


// text animation===================
// function textAnimation(heading) {
//   let time = 1000;
//   let count = 0;
//   let allText = [];

//   let headingInner2 = heading.querySelectorAll(
//     ".bwd-heading-inner-wrapper .bwd-heading-inner"
//   );

//   for (let item of headingInner2) {
//     allText.push(item.textContent);
//     item.textContent = "";
//   }

//   // text rendering
//   let headingWrapper = heading.querySelector(".bwd-heading-inner-wrapper");
//   headingWrapper.innerHTML = allText[count];
//   headingWrapper.classList.add("active");

//   setTimeout(() => {
//     headingWrapper.classList.remove("active");
//   }, time);

//   setInterval(() => {
//     if (count === allText.length) {
//       count = 0;
//     }

//     headingWrapper.innerHTML = allText[count];
//     headingWrapper.classList.add("active");

//     setTimeout(() => {
//       headingWrapper.classList.remove("active");
//     }, time );

//     count++;
//   }, time * 2);
// }


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
    ".bwd-heading-inner-wrapper .bwd-heading-inner"
  );

  for (let item of headingInner2) {
    allText.push(item.textContent);
    item.textContent = "";
  }

  // text rendering
  let headingWrapper = heading.querySelector(".bwd-heading-inner-wrapper");
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

//typing effect
function typingRoot(heading, speed = 400, delay = 1200) {
  const texts = [];
  let counter2 = 0;
  let letter = "";
  let index = 0;
  let time = speed;

  function collectText() {
    let allItems = heading.querySelectorAll(
      ".bwd-heading-inner-wrapper .bwd-heading-inner"
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
    let textBox = heading.querySelector(".bwd-heading-inner-wrapper");
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

// heading 1========================
let headingInner1Inner = selector(".bwd-animated-heading-1 .bwd-heading-inner");
splitAnimatingText(headingInner1Inner, 500, 3000);

// heading 2=============
const heading2 = selector(".bwd-animated-heading-2");
textAnimation(heading2);

// heading 3=============
const heading3 = selector(".bwd-animated-heading-3");
textAnimation(heading3);

// heading 4=============
const heading4 = selector(".bwd-animated-heading-4");
textAnimation(heading4);

// heading 5=============
const heading5 = selector(".bwd-animated-heading-5");
textAnimation(heading5);

// heading 6=============
const heading6 = selector(".bwd-animated-heading-6");
typingRoot(heading6, 100, 1000);

// heading 7========================
let headingInner7Inner = selector(".bwd-animated-heading-7 .bwd-heading-inner");
splitAnimatingText(headingInner7Inner);

// heading 8========================
let headingInner8Inner = selector(".bwd-animated-heading-8 .bwd-heading-inner");
splitAnimatingText(headingInner8Inner);

// heading 9=============
const heading9 = selector(".bwd-animated-heading-9");
textAnimation(heading9);

// heading 10=============
const heading10 = selector(".bwd-animated-heading-10");
textAnimation(heading10);

// heading 11=============
const heading11 = selector(".bwd-animated-heading-11");
textAnimation(heading11);

// heading 12=============
const heading12 = selector(".bwd-animated-heading-12");
textAnimation(heading12);

// heading 13=============
const heading13 = selector(".bwd-animated-heading-13");
typingRoot(heading13);


// heading 14=============
let heading14 = document.querySelector(".bwd-animated-heading-14");
scrollAnimation(heading14);

// heading 15=============
let heading15 = document.querySelector(".bwd-animated-heading-15");
scrollAnimation(heading15);

// heading 16========================
let headingInner16Inner = selector(
  ".bwd-animated-heading-16 .bwd-heading-inner"
);
splitAnimatingText(headingInner16Inner);

// heading 17========================
let headingInner17Inner = selector(
  ".bwd-animated-heading-17 .bwd-heading-inner"
);
splitAnimatingText(headingInner17Inner);

// heading 18========================
let headingInner18Inner = selector(
  ".bwd-animated-heading-18 .bwd-heading-inner"
);
splitAnimatingText(headingInner18Inner);

// heading 19========================
let headingInner19Inner = selector(
  ".bwd-animated-heading-19 .bwd-heading-inner"
);
splitAnimatingText(headingInner19Inner);

// heading 20========================
let headingInner20Inner = selector(
  ".bwd-animated-heading-20 .bwd-heading-inner"
);
splitAnimatingText(headingInner20Inner);

// heading 21========================
let headingInner21Inner = selector(
  ".bwd-animated-heading-21 .bwd-heading-inner"
);
splitAnimatingText(headingInner21Inner);

// heading 22========================
let headingInner22Inner = selector(
  ".bwd-animated-heading-22 .bwd-heading-inner"
);
splitAnimatingText(headingInner22Inner);

// heading 23========================
let headingInner23Inner = selector(
  ".bwd-animated-heading-23 .bwd-heading-inner"
);
splitAnimatingText(headingInner23Inner);

// heading 24========================
let headingInner24Inner = selector(
  ".bwd-animated-heading-24 .bwd-heading-inner"
);
splitAnimatingText(headingInner24Inner);

// heading 25=============
const heading25 = selector(".bwd-animated-heading-25");
textAnimation(heading25);

// heading 26========================
let headingInner26Inner = selector(
  ".bwd-animated-heading-26 .bwd-heading-inner"
);
splitAnimatingText(headingInner26Inner);

// heading 27========================
let headingInner27Inner = selector(
  ".bwd-animated-heading-27 .bwd-heading-inner"
);
splitAnimatingText(headingInner27Inner);

// heading 28=============
const heading28 = selector(".bwd-animated-heading-28");
textAnimation(heading28);

// heading 29=============
const heading29 = selector(".bwd-animated-heading-29");
textAnimation(heading29);

// heading 30=============
const heading30 = selector(".bwd-animated-heading-30");
textAnimation(heading30);

// heading 31=============
const heading31 = selector(".bwd-animated-heading-31");
textAnimation(heading31);
