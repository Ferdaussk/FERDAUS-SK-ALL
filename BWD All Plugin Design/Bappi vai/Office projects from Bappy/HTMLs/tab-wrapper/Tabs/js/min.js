
"use strict"


// tab maker class
// class TabMaker {
//     static tabFunction(tabButtons, tabItems, btnActive, tabActive) {
//         for (let i = 0; i < tabButtons.length; i++) {
//             tabButtons[i].addEventListener('click', function() {
//                 for (let j = 0; j < tabButtons.length; j++) {

//                     // tab button class active/remove
//                     tabButtons[j].classList.remove(btnActive);
//                     this.classList.add(btnActive);

//                     // tab contents class active/remove
//                     tabItems[j].classList.remove(tabActive);
//                     tabItems[i].classList.add(tabActive);
//                 }
//             })

//         }
//     }
// }

// // // tab one=== === === === === === === ===
// const tabOneBtns = document.querySelectorAll('.bwd-tab-one .bwd-nav .bwd-nav-link');
// const tabOneContents = document.querySelectorAll('.bwd-tab-one .bwd-tab-content .bwd-tab-pane');
// TabMaker.tabFunction(tabOneBtns, tabOneContents, 'active-link', 'active-tab-pane');

// // // tab two === === === === === === === ===
// const tabTwoBtns = document.querySelectorAll('.bwd-tab-two .bwd-nav li');
// const tabTwoContents = document.querySelectorAll('.bwd-tab-two .bwd-tab-content .bwd-tab-pane');
// TabMaker.tabFunction(tabTwoBtns, tabTwoContents, 'active', 'active');

// // // tab three === === === === === === === ===
// const tabThreeBtns = document.querySelectorAll('.bwd-tab-three .bwd-nav-tabs li');
// const tabThreeContents = document.querySelectorAll('.bwd-tab-three .bwd-tab-content .bwd-tab-pane');
// TabMaker.tabFunction(tabThreeBtns, tabThreeContents, 'active', 'active');

// // // tab four === === === === === === === ===
// const tabFourBtns = document.querySelectorAll('.bwd-tab-four .bwd-nav-tabs li');
// const tabFourContents = document.querySelectorAll('.bwd-tab-four .bwd-tab-content .bwd-tab-pane');
// TabMaker.tabFunction(tabFourBtns, tabFourContents, 'active', 'active');

// // tab five === === === === === === === ===
// const tabFiveBtns = document.querySelectorAll('.bwd-tab-five .bwd-nav-tabs li');
// const tabFiveContents = document.querySelectorAll('.bwd-tab-five .bwd-tab-content .bwd-tab-pane');
// TabMaker.tabFunction(tabFiveBtns, tabFiveContents, 'active', 'active');

// // tab six === === === === === === === ===
// const tabSixBtns = document.querySelectorAll('.bwd-tab-six .bwd-nav-tabs li');
// const tabSixContents = document.querySelectorAll('.bwd-tab-six .bwd-tab-content .bwd-tab-pane');
// TabMaker.tabFunction(tabSixBtns, tabSixContents, 'active', 'active');


// // tab seven === === === === === === === ===
// const tabSevenBtns = document.querySelectorAll('.bwd-tab-seven .bwd-nav-tabs li');
// const tabSevenContents = document.querySelectorAll('.bwd-tab-seven .bwd-tab-content .bwd-tab-pane');
// TabMaker.tabFunction(tabSevenBtns, tabSevenContents, 'active', 'active');

// // tab eight === === === === === === === ===
// const tabEightBtns = document.querySelectorAll('.bwd-tab-eight .bwd-nav-tabs li');
// const tabEightContents = document.querySelectorAll('.bwd-tab-eight .bwd-tab-content .bwd-tab-pane');
// TabMaker.tabFunction(tabEightBtns, tabEightContents, 'active', 'active');


// // tab nine === === === === === === === ===
// const tabNineBtns = document.querySelectorAll('.bwd-tab-nine .bwd-nav-tabs li');
// const tabNineContents = document.querySelectorAll('.bwd-tab-nine .bwd-tab-content .bwd-tab-pane');
// TabMaker.tabFunction(tabNineBtns, tabNineContents, 'active', 'active');

// // tab ten === === === === === === === ===
// const tabTenBtns = document.querySelectorAll('.bwd-tab-ten .bwd-nav-tabs li');
// const tabTenContents = document.querySelectorAll('.bwd-tab-ten .bwd-tab-content .bwd-tab-pane');
// TabMaker.tabFunction(tabTenBtns, tabTenContents, 'active', 'active');



// ==================================================


function TabMakerTest(tabItem,progressLine,dir,res){
    let tab = document.querySelector(tabItem);
    let tabBtns = tab.querySelectorAll('.bwd-nav-link');
    let tabItems = tab.querySelectorAll('.bwd-tab-content .bwd-tab-pane');

    console.log(tabBtns,tabItems)

    for (let i = 0; i < tabBtns.length; i++) {
        tabBtns[i].addEventListener('click', function () {
            for (let j = 0; j < tabBtns.length; j++) {

                // tab button class active/remove
                tabBtns[j].classList.remove('active');
                this.classList.add('active');

                // tab contents class active/remove
                tabItems[j].classList.remove('active');
                tabItems[i].classList.add('active');
            }
            
            if (progressLine) {
                let singlePgWidth = 100 / tabItems.length;
                if(dir==='width'){
                    progressLine.style.width = singlePgWidth * (i + 1) + '%';
                }
                else if(dir==='height'){
                    progressLine.style.height = singlePgWidth * (i + 1) + '%';
                }

                if(res &&  window.innerWidth < 768){
                    progressLine.style.height = 100 + '%';
                    progressLine.style.width = singlePgWidth * (i + 1) + '%';
                }
                
            }
        })

    }

}




// // tab one=== === === === === === === ===
// const tabOneBtns = document.querySelectorAll('.bwd-tab-one .bwd-nav .bwd-nav-link');
// const tabOneContents = document.querySelectorAll('.bwd-tab-one .bwd-tab-content .bwd-tab-pane');

TabMakerTest('.bwd-tab-one');