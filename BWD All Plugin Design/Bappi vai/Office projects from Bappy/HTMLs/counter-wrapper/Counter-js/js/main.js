// let counter = (counterUp, countTime) => {
//   let counterValues = [];
//   for (let item of counterUp) {
//     counterValues.push(Number(item.innerText));
//   }

//   let counterSetting = {
//     exactTime: countTime / 4,
//     timeCount: 1,
//     interValId: "",
//   };



//   for (let i = 0; i < counterValues.length; i++) {
//     let countNumWithTime = counterValues[i] / counterSetting.exactTime;
//     for(let item of counterValues){

//     }

//     let count = countNumWithTime;

//     function counterManagement() {
//       counterSetting.interValId = setTimeout(() => {
//         counterUp[i].innerHTML = Math.ceil(count);

//         count = count + countNumWithTime;

//         counterSetting.timeCount++;

//         counterManagement();

//         if (count > counterValues[i]) {
//           clearTimeout(counterSetting.interValId);
//         }
//       }, 1);
//     }
//     counterManagement();
//   }
// };




let counterDemo = function(counterItems, countTime){

  let counterValues = [];
  for (let item of counterItems) {
    counterValues.push(parseInt(item.innerText));
  }
  let CountTimeoutId;



  for(let i=0; i < counterValues.length; i++){

    let timeToUpDate = 10;

    let totalCount = timeToUpDate;

    let countNumber = (counterValues[i] / countTime) *  timeToUpDate;
    console.log(countNumber)
    let insertNumber = countNumber;

    function countManageMent(){







      CountTimeoutId = setTimeout(()=>{

        insertNumber = insertNumber + countNumber;
        counterItems[i].innerHTML = insertNumber ;

        totalCount = totalCount + timeToUpDate ;
        countManageMent()
        if(totalCount === countTime){
          clearTimeout(CountTimeoutId)
        }
      },timeToUpDate)
    }
    countManageMent()

    }


}




function scrollToPlay(counterNum, counterVal, duration) {
  let exactPositionToPlay = () => {
    let windowHeight = window.innerHeight / 3;
    let counterTopDsc = counterNum.getBoundingClientRect().top;

    if (windowHeight > counterTopDsc) {
      counterDemo(counterVal, duration);
      document.removeEventListener("scroll", exactPositionToPlay);
    }
  };

  document.addEventListener("scroll", exactPositionToPlay);
}






let counter1 = document.querySelector(".bwd-counter-1");
let counter1Num = document.querySelectorAll(
  ".bwd-counter-1 .bwd-counter-value"
);

scrollToPlay(counter1, counter1Num, 5000);






// counter 2
let counter2Num = document.querySelectorAll(
  ".bwd-counter-2 .bwd-counter-value"
);
let counter2 = document.querySelector(".bwd-counter-2");

scrollToPlay(counter2, counter2Num, 1000);

// counter 3
let counter3 = document.querySelector(".bwd-counter-3");
let counter3Num = document.querySelectorAll(
  ".bwd-counter-3 .bwd-counter-value"
);
scrollToPlay(counter3, counter3Num, 1000);

// counter 4
let counter4 = document.querySelector(".bwd-counter-4 ");
let counter4Num = document.querySelectorAll(
  ".bwd-counter-4 .bwd-counter-value"
);
scrollToPlay(counter4, counter4Num, 1000);

// counter 5
let counter5 = document.querySelector(".bwd-counter-5");
let counter5Num = document.querySelectorAll(
  ".bwd-counter-5 .bwd-counter-value"
);
scrollToPlay(counter5, counter5Num, 1000);


// counter 6
let counter6 = document.querySelector(".bwd-counter-6 .bwd-counter-value");
let counter6Num = document.querySelectorAll(
  ".bwd-counter-6 .bwd-counter-value"
);
scrollToPlay(counter6, counter6Num, 1000);

// counter 7

let counter7 = document.querySelector(".bwd-counter-7");
let counter7Num = document.querySelectorAll(
  ".bwd-counter-7 .bwd-counter-value"
);
scrollToPlay(counter7, counter7Num, 1000);

// counter 8
let counter8 = document.querySelector(".bwd-counter-8");
let counter8Num = document.querySelectorAll(
  ".bwd-counter-8 .bwd-counter-value"
);

scrollToPlay(counter8, counter8Num, 1000);

// counter 9
let counter9 = document.querySelector(".bwd-counter-9");
let counter9Num = document.querySelectorAll(
  ".bwd-counter-9 .bwd-counter-value"
);
scrollToPlay(counter9, counter9Num, 1000);

// counter 10
let counter10 = document.querySelector(".bwd-counter-10");

let counter10Num = document.querySelectorAll(
  ".bwd-counter-10 .bwd-counter-value"
);
scrollToPlay(counter10, counter10Num, 1000);

// counter 11
let counter11 = document.querySelector(".bwd-counter-11");

let counter11Num = document.querySelectorAll(
  ".bwd-counter-11 .bwd-counter-value"
);
scrollToPlay(counter11, counter11Num, 1000);

// counter 12
let counter12 = document.querySelector(".bwd-counter-12");

let counter12Num = document.querySelectorAll(
  ".bwd-counter-12 .bwd-counter-value"
);
scrollToPlay(counter12, counter12Num, 1000);

// counter 13
let counter13 = document.querySelector(".bwd-counter-13");

let counter13Num = document.querySelectorAll(
  ".bwd-counter-13 .bwd-counter-value"
);
scrollToPlay(counter13, counter13Num, 1000);

// counter 14
let counter14 = document.querySelector(".bwd-counter-14");

let counter14Num = document.querySelectorAll(
  ".bwd-counter-14 .bwd-counter-value"
);
scrollToPlay(counter14, counter14Num, 1000);

// counter 15
let counter15 = document.querySelector(".bwd-counter-15");

let counter15Num = document.querySelectorAll(
  ".bwd-counter-15 .bwd-counter-value"
);
scrollToPlay(counter15, counter15Num, 1000);

// counter 16
let counter16 = document.querySelector(".bwd-counter-16");

let counter16Num = document.querySelectorAll(
  ".bwd-counter-16 .bwd-counter-value"
);
scrollToPlay(counter16, counter16Num, 1000);

// counter 17
let counter17 = document.querySelector(".bwd-counter-17");

let counter17Num = document.querySelectorAll(
  ".bwd-counter-17 .bwd-counter-value"
);
scrollToPlay(counter17, counter17Num, 1000);

// counter 18
let counter18 = document.querySelector(".bwd-counter-18");

let counter18Num = document.querySelectorAll(
  ".bwd-counter-18 .bwd-counter-value"
);
scrollToPlay(counter18, counter18Num, 1000);

// counter 19

let counter19 = document.querySelector(".bwd-counter-19");
let counter19Num = document.querySelectorAll(
  ".bwd-counter-19 .bwd-counter-value"
);
scrollToPlay(counter19, counter19Num, 1000);


// counter 20
let counter20 = document.querySelector(".bwd-counter-20");

let counter20Num = document.querySelectorAll(
  ".bwd-counter-20 .bwd-counter-value"
);
scrollToPlay(counter20, counter20Num, 1000);

// counter 21
let counter21 = document.querySelector(".bwd-counter-21");

let counter21Num = document.querySelectorAll(
  ".bwd-counter-21 .bwd-counter-value"
);
scrollToPlay(counter21, counter21Num, 1000);

// counter 22
let counter22 = document.querySelector(".bwd-counter-22");

let counter22Num = document.querySelectorAll(
  ".bwd-counter-22 .bwd-counter-value"
);
scrollToPlay(counter22, counter22Num, 1000);

// counter 23
let counter23 = document.querySelector(".bwd-counter-23");

let counter23Num = document.querySelectorAll(
  ".bwd-counter-23 .bwd-counter-value"
);
scrollToPlay(counter23, counter23Num, 1000);

// counter 24
let counter24 = document.querySelector(".bwd-counter-24");

let counter24Num = document.querySelectorAll(
  ".bwd-counter-24 .bwd-counter-value"
);
scrollToPlay(counter24, counter24Num, 1000);

// counter 25
let counter25 = document.querySelector(".bwd-counter-25");

let counter25Num = document.querySelectorAll(
  ".bwd-counter-25 .bwd-counter-value"
);
scrollToPlay(counter25, counter25Num, 1000);

// counter 26
let counter26 = document.querySelector(".bwd-counter-26");

let counter26Num = document.querySelectorAll(
  ".bwd-counter-26 .bwd-counter-value"
);
scrollToPlay(counter26, counter26Num, 1000);

// counter 27
let counter27 = document.querySelector(".bwd-counter-27");
let counter27Num = document.querySelectorAll(
  ".bwd-counter-27 .bwd-counter-value"
);
scrollToPlay(counter27, counter27Num, 1000);

// counter 28
let counter28 = document.querySelector(".bwd-counter-28");

let counter28Num = document.querySelectorAll(
  ".bwd-counter-28 .bwd-counter-value"
);
scrollToPlay(counter28, counter28Num, 1000);

// counter 29
let counter29 = document.querySelector(".bwd-counter-29");

let counter29Num = document.querySelectorAll(
  ".bwd-counter-29 .bwd-counter-value"
);
scrollToPlay(counter29, counter29Num, 1000);

// counter 30
let counter30 = document.querySelector(".bwd-counter-30");

let counter30Num = document.querySelectorAll(
  ".bwd-counter-30 .bwd-counter-value"
);
scrollToPlay(counter30, counter30Num, 1000);


// counter 31
let counter31 = document.querySelector(".bwd-counter-31");
let counter31Num = document.querySelectorAll(
  ".bwd-counter-31 .bwd-counter-value"
);
scrollToPlay(counter31, counter31Num, 1000);



let hiddenNum = document.querySelector('.bwd-counter-1 .hidden-num');
console.log(hiddenNum.innerHTML);