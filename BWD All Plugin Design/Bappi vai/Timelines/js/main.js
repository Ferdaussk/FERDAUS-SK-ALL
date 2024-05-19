"use strict";


//selector function

function $(element,all){
    return (all ==='all'? document.querySelectorAll(element) : document.querySelector(element));
}

let body = $('body');


// timeline maker
function HTLMakerRoot(TL,TLItems,HrProgress){

    let Counter = 0;
    let itmCngr = 0;

    function itemChangerInterval(){
        TL.style.minHeight = (TLItems[0].clientHeight + 120) + 'px'
           setInterval(function() {

                function itemIndicatorUpdate() {
    
                     //timeline item update
                     let TLItemUpdate = (count)=>{
                        if ((itmCngr >= 0) && (itmCngr < TLItems.length)) {
    
                            if(body.offsetWidth >= 992){
                                if(count > 1  ){
                                    for(let i = 0; i < TLItems.length; i++){
                                        if(i <= itmCngr){
                                            TLItems[i].classList.add('active');
                                        }
                                       
        
                                    }
                                }
        
                                else if( count < 0){
        
                                    for(let i = 0; i < TLItems.length; i++){
                                        if(i > itmCngr){
                                            TLItems[i].classList.remove('active');
                                        }
        
                                    }
        
                                }
                            }
    
                            else{
                                
                                for( let item of TLItems){
                                    item.classList.remove('active');
                                }
                                TLItems[itmCngr].classList.add('active');
                            }
                         
                            // min height add to body=========================
                          
                            let bodyHeightAdd = ()=>{
                                let itemHeight= TLItems[itmCngr].clientHeight;
                                
                                TL.style.minHeight= (itemHeight + 120) + 'px';
                            }
                            bodyHeightAdd();
    
                            // horizontal progress line

                            if(HrProgress){
                                  (function(){
                                    let progressVal = (100 / (TLItems.length)) * (itmCngr + 1);
                                    HrProgress.style.width = progressVal + '%'; 
                                  })()
                            }
            
                        }
                    }
                   
                    // itemChanger Update function here
                    let itemChangerUpdate =()=>{
    
                        if (Counter > 10) {
                            itmCngr ++;
                            TLItemUpdate(Counter)
        
                            if (itmCngr >= TLItems.length) {
        
                                itmCngr = TLItems.length;
        
                                body.classList.remove('active');
                            }
        
                        } else if (Counter < -10) {
                            itmCngr --;
                            TLItemUpdate(Counter)
                            if (itmCngr < 0) {
                                itmCngr = -1;
                                body.classList.remove('active');
                            }
                        }
                    }
                    itemChangerUpdate() 
                 
                }
                itemIndicatorUpdate()
                Counter = 0;
            }, 300)

    }
  itemChangerInterval()

    // scroll event added here=========================
   window.addEventListener('scroll', function() {

                let TLTopDsc = TL.getBoundingClientRect().top;
                let windowH2 = window.innerHeight / 5;
                let windowH3 = window.innerHeight / 10;
     
                // Section distance from top=================
                let crnEvent= 'wheel';

                    window.addEventListener('wheel',function(){
                         crnEvent= 'wheel';
                         if ((TLTopDsc < windowH2) && (TLTopDsc > windowH3)){
                            crnEvent= 'wheel'; 
                        }
    
                        else {
                            crnEvent= 'click'; 
                        }
                       
                    })

                    if ((TLTopDsc < windowH2) && (TLTopDsc > windowH3)){
                        body.classList.add('active');
            
                        (function(){
                            window.addEventListener(crnEvent, function(e) {
                              
                                if(TL.contains(e.target)){
                                    Counter = e.deltaY;
                                }

                            })
                        }())

                    }

    })
}

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


// timeline one===================================
const timelineOne= $('.bwd-timeline-one');
const timelineOneItems= $('.bwd-timeline-one .bwd-timeline-item-container .bwd-timeline-item', 'all');
const timelineOneProgress=$('.bwd-timeline-one .bwd-progress-line-wrapper .bwd-progress-line');


HTLMakerRoot(timelineOne,timelineOneItems,timelineOneProgress)




// timeline Two======================

const timelineTwoContentItems = $('.bwd-timeline-two .bwd-timeline-item-container .bwd-timeline-item','all');
scrollToActive(timelineTwoContentItems);

 //timeline three
const timelineThreeContentEvenItems = $('.bwd-timeline-three .bwd-timeline-item-container .bwd-timeline-item:nth-child(even)','all');
// minusHalfHeigh============
minusHalfHeight(timelineThreeContentEvenItems);


 // timeline Four======================
const timelineFourContentItems = $('.bwd-timeline-four .bwd-timeline-item-container .bwd-timeline-item','all');

const timelineFourContentEvenItems = $('.bwd-timeline-four .bwd-timeline-item-container .bwd-timeline-item:nth-child(even)','all');

// minusHalfHeigh============
 minusHalfHeight(timelineFourContentEvenItems)

//  vartically scroll to active function
 scrollToActive(timelineFourContentItems);


// // timeline five======================
const timelineFiveContentItems = $('.bwd-timeline-five .bwd-timeline-wrapper .bwd-timeline-item','all');

//  vartically scroll to active function
scrollToActive(timelineFiveContentItems)



// timeline Six======================

const timelineSixContentItems = $('.bwd-timeline-six .bwd-timeline-item-container .bwd-timeline-item','all');
const timelineSixContentEvenItems = $('.bwd-timeline-six .bwd-timeline-item-container .bwd-timeline-item:nth-child(even)','all');

//  vartically scroll to active function
 scrollToActive(timelineSixContentItems)

//  minusHalfHeight
 minusHalfHeight(timelineSixContentEvenItems)





// timeline seven

let timelineSeven = $('.bwd-timeline-seven');
let timelineSevenItems = $('.bwd-timeline-seven .bwd-timeline-item', 'all')
const TLSevenProgress=$('.bwd-timeline-seven .bwd-progress-line-wrapper .bwd-progress-line');

HTLMakerRoot(timelineSeven,timelineSevenItems,TLSevenProgress)
 



// timeline eight=========================================================

let timelineEight = $('.bwd-timeline-eight');
let progressEightHelper = $('.bwd-progress-helper');
let timelineEightProgressLine = $('.bwd-timeline-eight .bwd-progress-line');


verticalProgress(timelineEight,progressEightHelper,timelineEightProgressLine)

// item active

const timelineEightContentItems = $('.bwd-timeline-eight .bwd-timeline-item-container .bwd-timeline-item','all');

scrollToActive(timelineEightContentItems);


// timeline nine==========================================



// timeline nine progress bar=====================
let timelineNine = $('.bwd-timeline-nine');
let progressHelperNine = $('.bwd-progress-helper-nine');
let timelineNineProgressLine = $('.bwd-timeline-nine .bwd-progress-line');

verticalProgress(timelineNine,progressHelperNine,timelineNineProgressLine)


// timeline item active==
const timelineNineContentItems = $('.bwd-timeline-nine .bwd-timeline-wrapper .bwd-timeline-item-container .bwd-timeline-item','all');

scrollToActive(timelineNineContentItems);




// timeline Ten==========================================
let timelineTen = $('.bwd-timeline-ten');
let progressHelperTen = $('.bwd-progress-helper-ten');
let timelineTenProgressLine = $('.bwd-timeline-ten .bwd-progress-line');

verticalProgress(timelineTen,progressHelperTen,timelineTenProgressLine)



const timelineTenContentItems = $('.bwd-timeline-ten .bwd-timeline-wrapper .bwd-timeline-item-container .bwd-timeline-item', 'all');

scrollToActive(timelineTenContentItems)



//timeline eleven scroll to  item change=============


const TL11= $('.bwd-timeline-eleven');
const TL11Items= $('.bwd-timeline-eleven .bwd-timeline-item-container .bwd-timeline-item', 'all');
const TL11ProgressBar=$('.bwd-timeline-eleven .bwd-progress-line-wrapper .bwd-progress-line');

HTLMakerRoot(TL11,TL11Items,TL11ProgressBar)



// timeline twelve================================
let timelineTwelve = $('.bwd-timeline-twelve');
let timelineTwelveHelper = $('.bwd-timeline-twelve .bwd-progress-helper-twelve')
let TLTwelveProgressBar = $('.bwd-timeline-twelve .bwd-progress-line');

verticalProgress(timelineTwelve,timelineTwelveHelper,TLTwelveProgressBar)




// timeline Thirteen==============================

const timelineThirteen= $('.bwd-timeline-thirteen');
const timelineThirteenItems= $('.bwd-timeline-thirteen .bwd-timeline-item-container .bwd-timeline-item', 'all');
let TL13ProgressBar = $('.bwd-timeline-thirteen .bwd-progress-line');

HTLMakerRoot(timelineThirteen,timelineThirteenItems,TL13ProgressBar)


//timelineFourteen======================

const timelineFourteen= $('.bwd-timeline-fourteen');
const timelineFourteenItems= $('.bwd-timeline-fourteen .bwd-timeline-item-container .bwd-timeline-item', 'all');
const timelineFourteenProgress=$('.bwd-timeline-fourteen .bwd-progress-line-wrapper .bwd-progress-line');

HTLMakerRoot(timelineFourteen,timelineFourteenItems,timelineFourteenProgress)


// //timelineFifteen
const timelineFifteen= $('.bwd-timeline-fifteen');
const timelineFifteenItems= $('.bwd-timeline-fifteen .bwd-timeline-item-container .bwd-timeline-item', 'all');
const timelineFifteenProgress=$('.bwd-timeline-fifteen .bwd-progress-line-wrapper .bwd-progress-line');
HTLMakerRoot(timelineFifteen,timelineFifteenItems,timelineFifteenProgress)



function ItemHeight(){
    window.addEventListener('scroll',()=>{
        let TL15TopDsc= timelineFifteen.getBoundingClientRect().top;
        if(TL15TopDsc < 50){
            window.addEventListener('wheel',()=>{
                for(let i=0; i < timelineFifteenItems.length; ++i){
                    if(timelineFifteenItems[i].classList.contains('active')){
                        let itemHeight= timelineFifteenItems[i].clientHeight;
                        // console.log(itemHeight);
                        timelineFifteen.style.minHeight = (itemHeight + 120) + 'px';
                    }
                }
            })
        }
    })
}
ItemHeight()

//timeline 20================


function TL20SpaceCreator(){
    let TL20Items = $('.bwd-timeline-twenty .bwd-timeline-item-container .bwd-timeline-item','all');
    let TL20ItemContent = $('.bwd-timeline-twenty .bwd-timeline-item-container .bwd-timeline-item .bwd-timeline-content','all');

    for(let i= 0; i < TL20ItemContent.length; i++){

        let TL20ItemContentHeight = TL20ItemContent[i].clientHeight;
        TL20Items[i].style.marginBottom= (TL20ItemContentHeight + 30) + 'px';
      
    }
}
TL20SpaceCreator();


//timeline 25================
const TL25Items= $('.bwd-timeline-twenty-five .bwd-timeline-item-container .bwd-timeline-item', 'all')
scrollToActive(TL25Items);

//timeline 26================
const TL26Items= $('.bwd-timeline-twenty-six .bwd-timeline-item-container .bwd-timeline-item', 'all')
const TL26 = $('.bwd-timeline-twenty-six');
const TL26ProgressHelper= $('.bwd-timeline-twenty-six .bwd-progress-helper-twenty-six')
const TL26ProgressLine = $('.bwd-timeline-twenty-six .bwd-progress-line')
verticalProgress(TL26,TL26ProgressHelper,TL26ProgressLine)

//timeline 27================
const TL27EvenItems =$('.bwd-timeline-twenty-seven .bwd-timeline-item-container .bwd-timeline-item:nth-child(even)','all')
minusHalfHeight(TL27EvenItems)

//************************ */
const TL27= $('.bwd-timeline-twenty-seven');
const TL27ProgressHelper= $('.bwd-timeline-twenty-seven .bwd-progress-helper-twenty-seven');
const TL27ProgressLine= $('.bwd-timeline-twenty-seven .bwd-progress-line')
const TL27Items= $('.bwd-timeline-twenty-seven .bwd-timeline-item-container .bwd-timeline-item','all')
verticalProgress(TL27,TL27ProgressHelper,TL27ProgressLine);

scrollToActive(TL27Items);

//timeline 29================
const TL29= $('.bwd-timeline-twenty-nine');
const TL29ProgressHelper= $('.bwd-timeline-twenty-nine .bwd-progress-helper-twenty-nine');
const TL29ProgressLine= $('.bwd-timeline-twenty-nine .bwd-progress-line')
const TL29Items= $('.bwd-timeline-twenty-nine .bwd-timeline-item-container .bwd-timeline-item','all')
verticalProgress(TL29,TL29ProgressHelper,TL29ProgressLine);

scrollToActive(TL29Items);

//timeline 30================
const TL30= $('.bwd-timeline-thirty');
const TL30ProgressHelper= $('.bwd-timeline-thirty .bwd-progress-helper-thirty');
const TL30ProgressLine= $('.bwd-timeline-thirty .bwd-progress-line')
verticalProgress(TL30,TL30ProgressHelper,TL30ProgressLine);

//timelineone
const TL31= $('.bwd-timeline-thirty-one');
const TL31Items= $('.bwd-timeline-thirty-one .bwd-timeline-item-container .bwd-timeline-item', 'all');
const TL31Progress=$('.bwd-timeline-thirty-one .bwd-progress-line-wrapper .bwd-progress-line');


HTLMakerRoot(TL31,TL31Items,TL31Progress)













