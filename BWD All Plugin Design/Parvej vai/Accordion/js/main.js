"use strict"
// accordion maker============
function accordionMaker(accordion, accordionItems, activeClass) {
    for (let singleItem of accordionItems) {

        let itemButton = singleItem.querySelector('div')
        itemButton.addEventListener('click', function() {
            let buttonParent = this.parentElement;

            if (buttonParent.classList.contains(activeClass)) {
                buttonParent.classList.remove(activeClass);
                for (let item of accordionItems) {
                    item.classList.remove(activeClass);
                }
            } else {
                for (let item of accordionItems) {
                    item.classList.remove(activeClass);
                }
                buttonParent.classList.add(activeClass);
            }

        })
    }


    function documentClickToActiveClass(e) {
        let isClick = accordion.contains(e.target);


        if ((!isClick)) {
            for (let singleItem of accordionItems) {
                singleItem.classList.remove(activeClass);
            }

        }
    }
    document.addEventListener('click', documentClickToActiveClass)

}


// accordion one=======================
const accordionOneItems = document.querySelectorAll('.ab-Accordion-1 .ab-Accordion-default')

const accordionOne = document.querySelector('.ab-Accordion-1')
accordionMaker(accordionOne, accordionOneItems, 'active')


// accordion two=======================
const accordionTwoItems = document.querySelectorAll('.ab-Accordion-2 .ab-Accordion-default')

const accordionTwo = document.querySelector('.ab-Accordion-2')
accordionMaker(accordionTwo, accordionTwoItems, 'active')


// accordion three=======================
const accordionThreeItems = document.querySelectorAll('.ab-Accordion-3 .ab-Accordion-default')

const accordionThree = document.querySelector('.ab-Accordion-3')
accordionMaker(accordionThree, accordionThreeItems, 'active')


// accordion Four=======================
const accordionFourItems = document.querySelectorAll('.ab-Accordion-4 .ab-Accordion-default')

const accordionFour = document.querySelector('.ab-Accordion-4')
accordionMaker(accordionFour, accordionFourItems, 'active')


// accordion Five=======================
const accordionFiveItems = document.querySelectorAll('.ab-Accordion-5 .ab-Accordion-default')

const accordionFive = document.querySelector('.ab-Accordion-5')
accordionMaker(accordionFive, accordionFiveItems, 'active')


// accordion Six=======================
const accordionSixItems = document.querySelectorAll('.ab-Accordion-6 .ab-Accordion-default')

const accordionSix = document.querySelector('.ab-Accordion-6')
accordionMaker(accordionSix, accordionSixItems, 'active')


// accordion Seven=======================
const accordionSevenItems = document.querySelectorAll('.ab-Accordion-7 .ab-Accordion-default')

const accordionSeven = document.querySelector('.ab-Accordion-7')
accordionMaker(accordionSeven, accordionSevenItems, 'active')

// accordion Eight=======================
const accordionEIghtItems = document.querySelectorAll('.ab-Accordion-8 .ab-Accordion-default')

const accordionEIght = document.querySelector('.ab-Accordion-8')
accordionMaker(accordionEIght, accordionEIghtItems, 'active')


// accordion NIne=======================
const accordionNineItems = document.querySelectorAll('.ab-Accordion-9 .ab-Accordion-default')

const accordionNine = document.querySelector('.ab-Accordion-9')
accordionMaker(accordionNine, accordionNineItems, 'active')


// accordion Ten=======================
const accordionTenItems = document.querySelectorAll('.ab-Accordion-10 .ab-Accordion-default')

const accordionTen = document.querySelector('.ab-Accordion-10')
accordionMaker(accordionTen, accordionTenItems, 'active')



// accordion Eleven=======================
const accordionElevenItems = document.querySelectorAll('.ab-Accordion-11 .ab-Accordion-default')

const accordionEleven = document.querySelector('.ab-Accordion-11')
accordionMaker(accordionEleven, accordionElevenItems, 'active')



// accordion Twelve=======================
const accordionTwelveItems = document.querySelectorAll('.ab-Accordion-12 .ab-Accordion-default')

const accordionTwelve = document.querySelector('.ab-Accordion-12')
accordionMaker(accordionTwelve, accordionTwelveItems, 'active')

// accordion Thirteen=======================
const accordionThirteenItems = document.querySelectorAll('.ab-Accordion-13 .ab-Accordion-default')

const accordionThirteen = document.querySelector('.ab-Accordion-13')
accordionMaker(accordionThirteen, accordionThirteenItems, 'active')

// accordion Fourteen=======================
const accordionFourteenItems = document.querySelectorAll('.ab-Accordion-14 .ab-Accordion-default')

const accordionFourteen = document.querySelector('.ab-Accordion-14')
accordionMaker(accordionFourteen, accordionFourteenItems, 'active')

// accordion Fifteen=======================
const accordionFifteenItems = document.querySelectorAll('.ab-Accordion-15 .ab-Accordion-default')

const accordionFifteen = document.querySelector('.ab-Accordion-15')
accordionMaker(accordionFifteen, accordionFifteenItems, 'active')


//accordion Sixteen========================

const accordion16 = document.querySelector('.ab-Accordion-16')
const accordion16Items = document.querySelectorAll('.ab-Accordion-16 .ab-Accordion-default')
accordionMaker(accordion16, accordion16Items, 'active')


//accordion 17========================

const accordion17 = document.querySelector('.ab-Accordion-17')
const accordion17Items = document.querySelectorAll('.ab-Accordion-17 .ab-Accordion-default')
accordionMaker(accordion17, accordion17Items, 'active')

//accordion 18========================
const accordion18 = document.querySelector('.ab-Accordion-18')
const accordion18Items = document.querySelectorAll('.ab-Accordion-18 .ab-Accordion-default')
accordionMaker(accordion18, accordion18Items, 'active');

//accordion 19========================
const accordion19 = document.querySelector('.ab-Accordion-19')
const accordion19Items = document.querySelectorAll('.ab-Accordion-19 .ab-Accordion-default')
accordionMaker(accordion19, accordion19Items, 'active');


//accordion 20========================
const accordion20 = document.querySelector('.ab-Accordion-20')
const accordion20Items = document.querySelectorAll('.ab-Accordion-20 .ab-Accordion-default')
accordionMaker(accordion20, accordion20Items, 'active');


//accordion 21========================
const accordion21 = document.querySelector('.ab-Accordion-21')
const accordion21Items = document.querySelectorAll('.ab-Accordion-21 .ab-Accordion-default')
accordionMaker(accordion21, accordion21Items, 'active');


//accordion 22========================
const accordion22 = document.querySelector('.ab-Accordion-22')
const accordion22Items = document.querySelectorAll('.ab-Accordion-22 .ab-Accordion-default')
accordionMaker(accordion22, accordion22Items, 'active');


//accordion 23========================
const accordion23 = document.querySelector('.ab-Accordion-23')
const accordion23Items = document.querySelectorAll('.ab-Accordion-23 .ab-Accordion-default')
accordionMaker(accordion23, accordion23Items, 'active');

//accordion 23========================
const accordion24 = document.querySelector('.ab-Accordion-24')
const accordion24Items = document.querySelectorAll('.ab-Accordion-24 .ab-Accordion-default')
accordionMaker(accordion24, accordion24Items, 'active');

//accordion 23========================
const accordion25 = document.querySelector('.ab-Accordion-25')
const accordion25Items = document.querySelectorAll('.ab-Accordion-25 .ab-Accordion-default')
accordionMaker(accordion25, accordion25Items, 'active');

//accordion 23========================
const accordion26 = document.querySelector('.ab-Accordion-26')
const accordion26Items = document.querySelectorAll('.ab-Accordion-26 .ab-Accordion-default')
accordionMaker(accordion26, accordion26Items, 'active');

//accordion 23========================
const accordion27 = document.querySelector('.ab-Accordion-27')
const accordion27Items = document.querySelectorAll('.ab-Accordion-27 .ab-Accordion-default')
accordionMaker(accordion27, accordion27Items, 'active');

//accordion 23========================
const accordion28 = document.querySelector('.ab-Accordion-28')
const accordion28Items = document.querySelectorAll('.ab-Accordion-28 .ab-Accordion-default')
accordionMaker(accordion28, accordion28Items, 'active');

//accordion 23========================
const accordion29 = document.querySelector('.ab-Accordion-29')
const accordion29Items = document.querySelectorAll('.ab-Accordion-29 .ab-Accordion-default')
accordionMaker(accordion29, accordion29Items, 'active');

//accordion 23========================
const accordion30 = document.querySelector('.ab-Accordion-30')
const accordion30Items = document.querySelectorAll('.ab-Accordion-30 .ab-Accordion-default')
accordionMaker(accordion30, accordion30Items, 'active');

//accordion 23========================
const accordion31 = document.querySelector('.ab-Accordion-31')
const accordion31Items = document.querySelectorAll('.ab-Accordion-31 .ab-Accordion-default')
accordionMaker(accordion31, accordion31Items, 'active');

























