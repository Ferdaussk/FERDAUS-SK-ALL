"use strict";
//selector function
function $(element,all){
    return (all ==='all'? document.querySelectorAll(element) : document.querySelector(element));
}
let body = $('body');

// hoisting top function==================
function minusHalfHeight(TLItems){
    for (let item of TLItems) {
        let itemClientHeight = Math.floor(item.clientHeight / 2) + 'px';
        let itemClientHeightMinus = '-' + itemClientHeight;
        item.style.marginTop = itemClientHeightMinus;
    
    }
}
// verticalProgressFunction
function verticalProgress(TL,progressHelper,progressLine){
    
    window.addEventListener('scroll', function() {
        let progressHelperTopDsc = progressHelper.getBoundingClientRect().top;
        let windowHeight = window.innerHeight / 2;

        function progressing() {

            if ((progressHelperTopDsc < windowHeight) && (progressHelperTopDsc < 0)) {

                let positiveValue = Math.abs(progressHelperTopDsc);

                if (positiveValue <= TL.clientHeight) {

                    let positiveStringVal = positiveValue + 'px';

                    progressLine.style.height = positiveStringVal;
                }


            } else {
                progressLine.style.height = 0;
            }
        }
        progressing();
    })

}

//  vartically scroll to active function
const scrollToActive = (TLItems) => {

    window.addEventListener('scroll', function() {
        const windowInnerHeight = window.innerHeight / 5 * 4;
    
        TLItems.forEach(item => {
            let contentTop = item.getBoundingClientRect().top;
    
            if (contentTop < windowInnerHeight) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        })
    })
 }

// timeline Two======================
const timelineTwoContentItems = $('.bwdtl-timeline-two .bwdtl-timeline-item-container .bwdtl-timeline-item','all');
scrollToActive(timelineTwoContentItems);

 //timeline three
const timelineThreeContentEvenItems = $('.bwdtl-timeline-three .bwdtl-timeline-item-container .bwdtl-timeline-item:nth-child(even)','all');
// minusHalfHeigh============
minusHalfHeight(timelineThreeContentEvenItems);

 // timeline Four======================
const timelineFourContentItems = $('.bwdtl-timeline-four .bwdtl-timeline-item-container .bwdtl-timeline-item','all');
const timelineFourContentEvenItems = $('.bwdtl-timeline-four .bwdtl-timeline-item-container .bwdtl-timeline-item:nth-child(even)','all');

// minusHalfHeigh============
 minusHalfHeight(timelineFourContentEvenItems)

//  vartically scroll to active function
 scrollToActive(timelineFourContentItems);

// // timeline five======================
const timelineFiveContentItems = $('.bwdtl-timeline-five .bwdtl-timeline-wrapper .bwdtl-timeline-item','all');

//  vertically scroll to active function
scrollToActive(timelineFiveContentItems)


// timeline Six======================

const timelineSixContentItems = $('.bwdtl-timeline-six .bwdtl-timeline-item-container .bwdtl-timeline-item','all');
const timelineSixContentEvenItems = $('.bwdtl-timeline-six .bwdtl-timeline-item-container .bwdtl-timeline-item:nth-child(even)','all');

//  vertically scroll to active function
 scrollToActive(timelineSixContentItems)

//  minusHalfHeight
 minusHalfHeight(timelineSixContentEvenItems)





// timeline eight=========================================================

let timelineEight = $('.bwdtl-timeline-eight');
let progressEightHelper = $('.bwdtl-progress-helper');
let timelineEightProgressLine = $('.bwdtl-timeline-eight .bwdtl-progress-line');


verticalProgress(timelineEight,progressEightHelper,timelineEightProgressLine)

// item active

const timelineEightContentItems = $('.bwdtl-timeline-eight .bwdtl-timeline-item-container .bwdtl-timeline-item','all');

scrollToActive(timelineEightContentItems);


// timeline nine==========================================



// timeline nine progress bar=====================
let timelineNine = $('.bwdtl-timeline-nine');
let progressHelperNine = $('.bwdtl-progress-helper-nine');
let timelineNineProgressLine = $('.bwdtl-timeline-nine .bwdtl-progress-line');

verticalProgress(timelineNine,progressHelperNine,timelineNineProgressLine)


// timeline item active==
const timelineNineContentItems = $('.bwdtl-timeline-nine .bwdtl-timeline-wrapper .bwdtl-timeline-item-container .bwdtl-timeline-item','all');

scrollToActive(timelineNineContentItems);




// timeline Ten==========================================
let timelineTen = $('.bwdtl-timeline-ten');
let progressHelperTen = $('.bwdtl-progress-helper-ten');
let timelineTenProgressLine = $('.bwdtl-timeline-ten .bwdtl-progress-line');

verticalProgress(timelineTen,progressHelperTen,timelineTenProgressLine)



const timelineTenContentItems = $('.bwdtl-timeline-ten .bwdtl-timeline-wrapper .bwdtl-timeline-item-container .bwdtl-timeline-item', 'all');

scrollToActive(timelineTenContentItems)



// timeline twelve================================
let timelineTwelve = $('.bwdtl-timeline-twelve');
let timelineTwelveHelper = $('.bwdtl-timeline-twelve .bwdtl-progress-helper-twelve')
let TLTwelveProgressBar = $('.bwdtl-timeline-twelve .bwdtl-progress-line');

verticalProgress(timelineTwelve,timelineTwelveHelper,TLTwelveProgressBar)




//timeline 20================


function TL20SpaceCreator(){
    let TL20Items = $('.bwdtl-timeline-twenty .bwdtl-timeline-item-container .bwdtl-timeline-item','all');
    let TL20ItemContent = $('.bwdtl-timeline-twenty .bwdtl-timeline-item-container .bwdtl-timeline-item .bwdtl-timeline-content','all');

    for(let i= 0; i < TL20ItemContent.length; i++){

        let TL20ItemContentHeight = TL20ItemContent[i].clientHeight;
        TL20Items[i].style.marginBottom= (TL20ItemContentHeight + 30) + 'px';
      
    }
}
TL20SpaceCreator();


//timeline 25================
const TL25Items= $('.bwdtl-timeline-twenty-five .bwdtl-timeline-item-container .bwdtl-timeline-item', 'all')
scrollToActive(TL25Items);

//timeline 26================
const TL26Items= $('.bwdtl-timeline-twenty-six .bwdtl-timeline-item-container .bwdtl-timeline-item', 'all')
const TL26 = $('.bwdtl-timeline-twenty-six');
const TL26ProgressHelper= $('.bwdtl-timeline-twenty-six .bwdtl-progress-helper-twenty-six')
const TL26ProgressLine = $('.bwdtl-timeline-twenty-six .bwdtl-progress-line')
verticalProgress(TL26,TL26ProgressHelper,TL26ProgressLine)

//timeline 27================
const TL27EvenItems =$('.bwdtl-timeline-twenty-seven .bwdtl-timeline-item-container .bwdtl-timeline-item:nth-child(even)','all')
minusHalfHeight(TL27EvenItems)

// ================
const TL27= $('.bwdtl-timeline-twenty-seven');
const TL27ProgressHelper= $('.bwdtl-timeline-twenty-seven .bwdtl-progress-helper-twenty-seven');
const TL27ProgressLine= $('.bwdtl-timeline-twenty-seven .bwdtl-progress-line')
const TL27Items= $('.bwdtl-timeline-twenty-seven .bwdtl-timeline-item-container .bwdtl-timeline-item','all')
verticalProgress(TL27,TL27ProgressHelper,TL27ProgressLine);

scrollToActive(TL27Items);

//timeline 29================
const TL29= $('.bwdtl-timeline-twenty-nine');
const TL29ProgressHelper= $('.bwdtl-timeline-twenty-nine .bwdtl-progress-helper-twenty-nine');
const TL29ProgressLine= $('.bwdtl-timeline-twenty-nine .bwdtl-progress-line')
const TL29Items= $('.bwdtl-timeline-twenty-nine .bwdtl-timeline-item-container .bwdtl-timeline-item','all')
verticalProgress(TL29,TL29ProgressHelper,TL29ProgressLine);

scrollToActive(TL29Items);

//timeline 30================
const TL30= $('.bwdtl-timeline-thirty');
const TL30ProgressHelper= $('.bwdtl-timeline-thirty .bwdtl-progress-helper-thirty');
const TL30ProgressLine= $('.bwdtl-timeline-thirty .bwdtl-progress-line')
verticalProgress(TL30,TL30ProgressHelper,TL30ProgressLine);













