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
const accordionOneItems = document.querySelectorAll('.bwd-Accordion-1 .bwd-Accordion-default')

const accordionOne = document.querySelector('.bwd-Accordion-1')
accordionMaker(accordionOne, accordionOneItems, 'active')


// accordion two=======================
const accordionTwoItems = document.querySelectorAll('.bwd-Accordion-2 .bwd-Accordion-default')

const accordionTwo = document.querySelector('.bwd-Accordion-2')
accordionMaker(accordionTwo, accordionTwoItems, 'active')


// accordion three=======================
const accordionThreeItems = document.querySelectorAll('.bwd-Accordion-3 .bwd-Accordion-default')

const accordionThree = document.querySelector('.bwd-Accordion-3')
accordionMaker(accordionThree, accordionThreeItems, 'active')


// accordion Four=======================
const accordionFourItems = document.querySelectorAll('.bwd-Accordion-4 .bwd-Accordion-default')

const accordionFour = document.querySelector('.bwd-Accordion-4')
accordionMaker(accordionFour, accordionFourItems, 'active')


// accordion Five=======================
const accordionFiveItems = document.querySelectorAll('.bwd-Accordion-5 .bwd-Accordion-default')

const accordionFive = document.querySelector('.bwd-Accordion-5')
accordionMaker(accordionFive, accordionFiveItems, 'active')


// accordion Six=======================
const accordionSixItems = document.querySelectorAll('.bwd-Accordion-6 .bwd-Accordion-default')

const accordionSix = document.querySelector('.bwd-Accordion-6')
accordionMaker(accordionSix, accordionSixItems, 'active')


// accordion Seven=======================
const accordionSevenItems = document.querySelectorAll('.bwd-Accordion-7 .bwd-Accordion-default')

const accordionSeven = document.querySelector('.bwd-Accordion-7')
accordionMaker(accordionSeven, accordionSevenItems, 'active')

// accordion Eight=======================
const accordionEIghtItems = document.querySelectorAll('.bwd-Accordion-8 .bwd-Accordion-default')

const accordionEIght = document.querySelector('.bwd-Accordion-8')
accordionMaker(accordionEIght, accordionEIghtItems, 'active')


// accordion NIne=======================
const accordionNineItems = document.querySelectorAll('.bwd-Accordion-9 .bwd-Accordion-default')

const accordionNine = document.querySelector('.bwd-Accordion-9')
accordionMaker(accordionNine, accordionNineItems, 'active')


// accordion Ten=======================
const accordionTenItems = document.querySelectorAll('.bwd-Accordion-10 .bwd-Accordion-default')

const accordionTen = document.querySelector('.bwd-Accordion-10')
accordionMaker(accordionTen, accordionTenItems, 'active')



// accordion Eleven=======================
const accordionElevenItems = document.querySelectorAll('.bwd-Accordion-11 .bwd-Accordion-default')

const accordionEleven = document.querySelector('.bwd-Accordion-11')
accordionMaker(accordionEleven, accordionElevenItems, 'active')



// accordion Twelve=======================
const accordionTwelveItems = document.querySelectorAll('.bwd-Accordion-12 .bwd-Accordion-default')

const accordionTwelve = document.querySelector('.bwd-Accordion-12')
accordionMaker(accordionTwelve, accordionTwelveItems, 'active')

// accordion Thirteen=======================
const accordionThirteenItems = document.querySelectorAll('.bwd-Accordion-13 .bwd-Accordion-default')

const accordionThirteen = document.querySelector('.bwd-Accordion-13')
accordionMaker(accordionThirteen, accordionThirteenItems, 'active')

// accordion Fourteen=======================
const accordionFourteenItems = document.querySelectorAll('.bwd-Accordion-14 .bwd-Accordion-default')

const accordionFourteen = document.querySelector('.bwd-Accordion-14')
accordionMaker(accordionFourteen, accordionFourteenItems, 'active')

// accordion Fifteen=======================
const accordionFifteenItems = document.querySelectorAll('.bwd-Accordion-15 .bwd-Accordion-default')

const accordionFifteen = document.querySelector('.bwd-Accordion-15')
accordionMaker(accordionFifteen, accordionFifteenItems, 'active')